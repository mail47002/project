<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\BinUser;
use App\Models\UserAction;
use App\Models\Bin;
use App\Models\Log;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Password;
use Mail;

class ClubController extends Controller
{
    
    public function index() 
    {
        $admin = User::where(['role_id' => 1])->get();
        $clubs = User::where(['role_id' => 2])->get();
        return Inertia::render('Club/Club',['club' => $clubs, 'data' =>$admin[0]]);
    }
    public function create(Request $request)
    {
       
        $admin = User::where(['role_id' => 1])->get();
        return Inertia::render('Club/AddClub',['data' => $admin[0]]);
       
    }
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',    
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            ]);
        $club                     =     new User();
        $club->role_id            =     2;
        $club->name               =     $request['name'];
        $club->email              =     $request['email'];
        $club->phone              =     $request['phone'];
        $club->status             =     0;

        $club->save();

        $status = Password::sendResetLink(
            $request->only('email')
        );
        return redirect('/admin/clubs');
    }
    public function dashboard(Request $request)
    {
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        return Inertia::render('Club/Dashboard',['club' => $club[0]]);
    }
    public function edit(Request $request, $id)
    {
        $admin = User::where(['role_id' => 1])->get();
        $club = User::where(['id' => $id])->get();
        return Inertia::render('Club/EditClub',['club' => $club[0], 'data' => $admin[0]]);   
    }
    public function update(Request $request, $id)
    {
        $club = User::where(['id' => $id])->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]
        );
        return redirect('/admin/clubs');
    }
    public function delete(Request $request, $id)
    {
        
        $result=User::where(['id'=>$id])->delete();
        return redirect('/admin/clubs');
        
    }
    public function bin(Request $request)
    {
        
        $bins = Bin::all();
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();

        return Inertia::render('Club/Bin',['bins' => $bins, 'club' => $club]);
    }
    public function binDetail(Request $request,$id)
    {
        $bin = Bin::where(['id' => $id])->get();
        $userId = BinUser::where(['bin_id' => $id])->pluck('user_id');
        $tonkeepers = User::whereIn('id',$userId)->get()->map(function($data) {
            return [
                    'id' => $data->id,
                    'name' =>$data->name,
                    'profile_image' => asset('storage/media/Profile/'.$data->profile_image),
            ];
        });
        $binMedia = Bin::find($id);
        $media = $binMedia->Media->map(function($data) {
            return [
                'id' => $data->id,
                'file' => asset('storage/media/Bin/'.$data->file),
            ];
        });
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        return Inertia::render('Club/BinDetail',['bin' => $bin[0],'club' => $club,'media' => $media,'tonkeepers' => $tonkeepers]);
    }
    public function binHistory(Request $request,$id)
    {
        $bin = Bin::where(['id' => $id])->get();
        //$history = Log::where(['bin_id' => $id])->get();
        //$historydata = json_decode($history[0]['response']);
        $history = Log::where(['bin_id' => $id])->pluck('response');
        $historydata = json_decode($history[0]);
      
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        return Inertia::render('Club/BinHistory',['bin' => $bin[0],'club' => $club,'historydata' => $historydata]);

    }
    public function binUserAction(Request $request,$id)
    {
        $bin = Bin::where(['id' => $id])->get();
        $useraction = UserAction::where(['bin_id' => $id])->get();
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        return Inertia::render('Club/BinUserAction',['bin' => $bin[0],'club' => $club,'useraction' => $useraction]);

    }
    public function userAction(Request $request)
    {
        $users = User::where(['club_id' => $request->session()->get('CLUB_ID')])->pluck('id')->toArray();
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        $userAction = UserAction::whereIn('user_id',$users)->get()->toArray();

        return Inertia::render('Club/UserAction',['userAction' => $userAction, 'club' => $club]);
    }
    public function binTonKeeperRemove(Request $request,$user_id,$bin_id)
    {
        echo $bin_id;
        exit();
       $tonkeeper = BinUser::where(["bin_id" => $bin_id])
       ->where(['user_id' => $user_id]) 
       ->delete();
    }
    
}
