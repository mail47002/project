<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bin;
use App\Models\BinUser;
use App\Models\Predict;
use App\Models\UserAction;


class DashboardController extends Controller
{
    public function Dashboard(Request $request)
    {
        $user = $request->user();
 
        if(isset($user))
        {
            $day = $request->day;
            $belowCount = 0;
            $avgCount = 0;
            $aboveCount = 0;

            $total_assign_bin = BinUser::where(['user_id' => $user['id']])->count();
            $total_collected_bin = UserAction::where(['user_id'=>$user['id']])->pluck('no_deposite_bottles')->sum();
            $data = BinUser::where(['user_id' => $user['id']])->pluck('bin_id')->toArray();
            $bins = Bin::whereIn('id', $data)->get();
            
            if(!empty($day))
            {
                foreach($bins as $bin)
                {
                    $bin->inc_percent = $bin->actual_volume_percent + ($bin->daily_increment_bottle * $day);
                    if($bin->inc_percent < 40)
                        $belowCount += 1;
                    else if($bin->inc_percent >= 40 && $bin->inc_percent < 80)
                        $avgCount += 1;
                    else
                        $aboveCount += 1;
                }
                
            }
            else
            {
                foreach($bins as $bin)
                {
                    if($bin->actual_volume_percent < 40)
                        $belowCount += 1;
                    else if($bin->actual_volume_percent >= 40 && $bin->actual_volume_percent < 80)
                        $avgCount += 1;
                    else
                        $aboveCount += 1;
                }
            }
            return response()->json(['total_assign_bin' => $total_assign_bin,'total_collected_bin' => $total_collected_bin,'below' => $belowCount,'average' => $avgCount, 'above' => $aboveCount]);
        }   
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg]);
        }
    }
}

