<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Bin;
use App\Models\BinUser;
use App\Models\UserDevice;
use Kawankoding\Fcm\Fcm;

class PushNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PushNotification:check';

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
        $bin_id = Bin::where('actual_volume_percent','>=',80)->pluck('id')->toArray();
        $binUsers = BinUser::whereIn('bin_id',$bin_id)->pluck('user_id')->toArray();
        $userDevice = UserDevice::whereIn('userid',$binUsers)->pluck('device_token')->toArray();

        $fcm1 = new Fcm;
        $fcm1->to($userDevice)
        ->data([
            'title' => 'Test FCM 1',
            'body' => 'This is a test of FCM 1',
        ])
        ->send();
    }
}
