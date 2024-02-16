<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Password;
use Mail;


class UserController extends Controller
{
    public function index(Request $request)
    {
       
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        $users = User::where(['role_id' => 3, 'club_id' => $request->session()->get('CLUB_ID')])->get();
        return Inertia::render('User/User',['user' => $users, 'club' =>$club[0]]);
        
    }
    public function create(Request $request)
    {
        $club = User::where(['id' => $request->session()->get('CLUB_ID')])->get();
        
        return Inertia::render('User/AddUser',['club' => $club[0]]);
       
    }
    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required',    
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            ]);
        $randomNumber             =     random_int(100000, 999999);
        $user                     =     new User();
        $user->role_id            =     3;
        $user->club_id            =     $request->session()->get('CLUB_ID');
        $user->name               =     $request['name'];
        $user->email              =     $request['email'];
        $user->phone              =     $request['phone'];
        $user->status             =     0;

        $user->save();

        $status = Password::sendResetLink(
            $request->only('email')
        );
        return redirect('/club/employees');
    }
    public function edit(Request $request, $id)
    {
        $club = User::where(['role_id' => 2])->get();
        $user = User::where(['id' => $id])->get();
        return Inertia::render('User/EditUser',['user' => $user[0], 'club' => $club[0]]);   
    }
    public function update(Request $request, $id)
    {
       
        $user = User::where(['id' => $id])->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]
        );
        return redirect('/club/employees');
    }
    public function delete(Request $request, $id)
    {
        
        $user=User::where(['id'=>$id])->delete();
        return redirect('/admin/employees');
        
    }
    public function employee(Request $request)
    {
        $admin = User::where(['id' => $request->session()->get('ADMIN_ID')])->get();
        $users = User::where(['role_id' => 3])->get();

        return Inertia::render('Admin/User',['user' => $users, 'data' =>$admin[0]]);
    }
}
