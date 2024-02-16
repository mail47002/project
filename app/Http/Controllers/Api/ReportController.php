<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BinReportLocation;
use App\Models\BinReportProblem;
use App\Models\Problem;
use App\Models\Media;
use App\Models\User;
use App\Models\Log;
use App\Models\Bin;
use App\Models\UserAction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Storage;
use Image;


class ReportController extends Controller
{
    public function reportEmptyStore(Request $request,$bin_id)
    {
        $user = $request->user();
        $bin  = Bin::where(['id' => $bin_id])->get();
        $request_data = array();
        $request_data['DeviceRequest'] = ['Username' => '22593', 'Email' => 'co@flexconsult.de', 'SecurityStamp' => '9b9f3811-45ba-4d0e-b4e7-8dd70db09c25','DeviceID' => $bin[0]['device_id']];
        $data = json_encode($request_data);
        $response = Http::withHeaders(['Content-Type' => 'application/json'])
        ->send('POST', 'http://aes-gate-ecofrog.azurewebsites.net/Api/FuncDevice', [
            'body' => $data
        ])->json();
        
        if(isset($user))
        {
           
            if($request->empty_type == "FULL_EMPTY")
            {
                $uuid                                  =     Str::uuid();
                $userAction                            =     new UserAction;
                $userAction->uuid                      =     $uuid;
                $userAction->user_id                   =     $user['id'];
                $userAction->bin_id                    =     $bin_id;
                $userAction->type                      =     'empty';
                $userAction->remark                    =     $request['remark'];
                $userAction->new_bag_id                =     $request['new_empty_bag'];
                $userAction->old_bag_id                =     $request['full_bag'];
                $userAction->save();

                $log                                   =     new Log;
                $log->bin_id                           =     $bin_id;
                $log->uuid                             =     $uuid;
                $log->battery                          =     $bin[0]['battery'];
                $log->actual_volume                    =     $bin[0]['actual_volume'];
                $log->actual_volume_percent            =     $bin[0]['actual_volume_percent'];
                $log->response                         =     $response;
                $log->save();
                return response()->json(['msg' => 'Full_empty Successful'], 200);
            }
            else if($request->empty_type == "PARTIAL_EMPTY")
            {
                $uuid                                  =     Str::uuid();
                $userAction                            =     new UserAction;
                $userAction->uuid                      =     $uuid;
                $userAction->user_id                   =     $user['id'];
                $userAction->bin_id                    =     $bin_id;
                $userAction->type                      =     'empty';
                $userAction->old_bag_id                =     $request['bag_id'];
                $userAction->remark                    =     $request['note'];
                $userAction->disposable_bottles        =     $request['no_of_bottels'];
                $userAction->save();

                $log                                   =     new Log;
                $log->bin_id                           =     $bin_id;
                $log->uuid                             =     $uuid;
                $log->battery                          =     $bin[0]['battery'];
                $log->actual_volume                    =     $bin[0]['actual_volume'];
                $log->actual_volume_percent            =     $bin[0]['actual_volume_percent'];
                $log->response                         =     $response;
                $log->save();
                return response()->json(['msg' => 'Partial_empty Successfull'], 200);
            }
            else 
            {
                return response()->json(['msg' => 'Please describe empty_type'], 200);
            }        
        }
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg]);
        }
       
    }
    public function reportAmountStore(Request $request, $bin_id)
    {
        $user = $request->user();
        if(isset($user))
        {
            $uuid                                  =     Str::uuid();
            $userAction                            =     new UserAction;
            $userAction->uuid                      =     $uuid;
            $userAction->user_id                   =     $user['id'];
            $userAction->bin_id                    =     $bin_id;
            $userAction->old_bag_id                =     $request['bag_id'];
            $userAction->type                      =     'report_amount';
            $userAction->remark                    =     $request['remark'];
            $userAction->disposable_bottles        =     $request['disposable_bottles'];
            $userAction->returnable_bottles        =     $request['returnable_bottles'];
            $userAction->no_deposite_bottles       =     $request['no_deposite_bottles'];
            $userAction->save();

            foreach($request['images'] as $image)
            {
                $data = $this->uploadBase64Image('/public/media/ReportAmount/',$image,800,600);
                $mediaUuid               =     Str::uuid();
                $userAction              =     UserAction::find($userAction->id);
                $media                   =     new Media;
                $media->uuid             =     $mediaUuid;
                $media->file             =     $data;
                $userAction->Media()->save($media);
            }

            return response()->json(['msg' => 'Successfull'], 200);
        }
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg]);
        }
    }
    public function reportProblemStore(Request $request, $bin_id) 
    {
        $problem                               =   new Problem;
        $problem->title                        =   $request['category'];
        $problem->remark                       =   $request['remark'];
        $problem->save();

        foreach($request['images'] as $image)
        {
            $data = $this->uploadBase64Image('/public/media/Problem/',$image,800,600);
            $mediaUuid               =     Str::uuid();
            $problem                 =     Problem::find($problem->id);	
            $media                   =     new Media;
            $media->uuid             =     $mediaUuid;
            $media->file             =     $data;
            $problem->Media()->save($media);
        }
        return response()->json(['msg' => 'Successfull'], 200);
    }

    public function reportLocationStore(Request $request, $bin_id) 
    {
        $reportLocation                               =   new BinReportLocation;
        $reportLocation->bin_id                       =   $bin_id;
        $reportLocation->note                         =   $request['note'];
        
        $reportLocation->save();

        foreach($request['images'] as $image)
        {
            $data = $this->uploadBase64Image('/public/media/Location/',$image,800,600);
            $mediaUuid               =     Str::uuid();
            $reportLocation          =     BinReportLocation::find($reportLocation->id);
            $media                   =     new Media;
            $media->uuid             =     $mediaUuid;
            $media->file             =     $data;
            $reportLocation->Media()->save($media);
        }
        return response()->json(['msg' => 'Successfull'], 200);
    }

    public function uploadBase64Image($path, $img, $w, $h)
    {
        try { 
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $filename = bin2hex(random_bytes(8)) . '.' . $image_type;
            $image = Image::make($image_base64);
            $image->fit($w, $h);
            $image->stream();
            Storage::disk('local')->put($path . $filename, $image->__toString());
            return $filename;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}