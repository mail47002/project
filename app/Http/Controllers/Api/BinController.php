<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \KMLaravel\GeographicalCalculator\Facade\GeoFacade;
use App\Models\Bin;
use App\Models\Log;
use App\Models\Media;


class BinController extends Controller
{
    public function index(Request $request)
    {  
        $longitude = $request->longitude;
        $latitude = $request->latitude;

        $bins = Bin::all();

        $qry = Bin::select('*');

        if(!empty($request->name))
        {
            $qry->where('name','LIKE',"%$request->name%");
        }
        if(!empty($request->percentage))
        {
            $qry->where('actual_volume_percent','>=',$request->percentage);
        }
        if(!empty($request->filter_battery_start) && !empty($request->filter_battery_end))
        {
            $qry->whereBetween('battery',[$request->filter_battery_start,$request->filter_battery_end]);
        }
        if(!empty($request->status))
        {
            $qry->where('status',$request->status);
        }
        $filter_bins = $qry->get();
        $R = 6371;
        foreach( $bins as $bin)
        {
            $lat = $latitude - $bin->latitude;
            $long = $longitude - $bin->longitude;

            $Latitude = deg2rad($lat);
            $Longitude = deg2rad($long);

            $a = sin($Latitude/2) * sin($Latitude/2) + cos(deg2rad($latitude)) * cos(deg2rad($bin->latitude)) * sin($Longitude/2) * sin($Longitude/2);

            $c = 2 * atan2(sqrt($a), sqrt(1-$a));

            $bin->KM = $R * $c;
        }
       
        return response()->json(['Bins' => $bins,'FilterBins' => $filter_bins], 200);
    }
    public function binInformation(Request $request)
    {
        $longitude = $request->longitude;
        $latitude = $request->latitude;
        $uuid = $request->uuid;

        $bin = Bin::where(['uuid' => $uuid])->get();

        $needed_battery_to_change = $bin[0]['battery'] - 10;
        $needed_days_to_change_battery = $needed_battery_to_change / $bin[0]['daily_decrement_battery'];

        $required_actual_volume = 80 - $bin[0]['actual_volume_percent'];
        $needed_days_to_empty_bin = $required_actual_volume / $bin[0]['daily_increment_bottle'];

        $binMedia = Bin::find($bin[0]->id);
     
        $media = $binMedia->Media->map(function($data) {
            return [
                'file' => asset('storage/media/Bin/'.$data->file),
            ];
        });
       
        $history = Log::where(['bin_id' => $bin[0]['id']])->get();

        $R = 6371;

        $lat = $latitude-$bin[0]['latitude'];
        $long = $longitude-$bin[0]['longitude'];

        $Latitude = deg2rad($lat);
        $Longitude = deg2rad($long);

        $a = sin($Latitude/2) * sin($Latitude/2) + cos(deg2rad($latitude)) * cos(deg2rad($bin[0]['latitude'])) * sin($Longitude/2) * sin($Longitude/2);

        $c = 2 * atan2(sqrt($a), sqrt(1-$a));

        $DistanceKM = $R * $c;

        return response()->json(['Information' => $bin, 'Distance' => $DistanceKM, 'Media' => $media , 'Next_Empty_Required' => $needed_days_to_empty_bin , "Battery_change_required" => $needed_days_to_change_battery, 'History' => $history], 200);
    }
}
