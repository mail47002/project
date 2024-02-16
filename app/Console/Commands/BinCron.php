<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Bin;
use App\Models\Log;
use Carbon;

class BinCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bin:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $bins = Bin::all();
        foreach($bins as $list)
        {
            $request_data = array();
            $request_data['DeviceRequest'] = ['Username' => '22593', 'Email' => 'co@flexconsult.de', 'SecurityStamp' => '9b9f3811-45ba-4d0e-b4e7-8dd70db09c25','DeviceID' => $list['device_id']];
            $data = json_encode($request_data);
            $response = Http::withHeaders(['Content-Type' => 'application/json'])
            ->send('POST', 'http://aes-gate-ecofrog.azurewebsites.net/Api/FuncDevice', [
                'body' => $data
            ])->json();
            $data = json_decode($response);
            $bin = Bin::where(['device_id' => $data->DeviceResponse[0]->DeviceID])->update(
                [
                    'device_id' => $data->DeviceResponse[0]->DeviceID,
                    'name' => $data->DeviceResponse[0]->DeviceName,
                    'medium' => $data->DeviceResponse[0]->Medium,
                    'last_updated_at' => Carbon::parse($data->DeviceResponse[0]->LastUpdate)->format('Y-m-d H:i:s'),
                    'max_volume' => $data->DeviceResponse[0]->MaxVolume,
                    'actual_volume' => $data->DeviceResponse[0]->ActualVolume,
                    'actual_volume_percent' => $data->DeviceResponse[0]->ActualVolumePercent,
                    'battery' => $data->DeviceResponse[0]->Battery,
                    'temperature' => $data->DeviceResponse[0]->Temperature,
                    'mess_data' => $data->DeviceResponse[0]->MessData,
                ]
            );

                $log                                   =     new Log;
                $log->bin_id                           =     $list['id'];
                $log->uuid                             =     $list['uuid'];
                $log->battery                          =     $data->DeviceResponse[0]->Battery;
                $log->actual_volume                    =     $data->DeviceResponse[0]->ActualVolume;
                $log->actual_volume_percent            =     $data->DeviceResponse[0]->ActualVolumePercent;
                $log->response                         =     $response;
                $log->save();
        }
    }
}
