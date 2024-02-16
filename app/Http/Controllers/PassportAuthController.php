<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use App\Models\PasswordReset;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class PassportAuthController extends Controller
{
    public function index() 
    {
        return Inertia::render('Auth/Login');
    }
    public function loginAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',    
            'password' => 'required',
        ]);
        
        $admin = User::where(['email' => $request->email,'role_id'=>1 ])->first();
        $club  = User::where(['email' => $request->email,'role_id'=>2 ])->first();

        if(isset($admin))
        {
            $data = [
                'email' => $request->email,
                'password' => $request->password    
            ];

            if (auth()->attempt($data)) 
            { 
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$admin->id);

                $admin = User::where(['role_id' =>1, 'email' => $data['email']])->update(
                    [
                        'status' => 1,
                    ]
                );
                return redirect('/admin/dashboard');
            } 
            else
            { 
                $data = 'Incorrect Password';
                return Inertia::render('Auth/Login',['data'=>$data]);
            }
        }
        else if(isset($club))
        {
            $data = [
                'email' => $request->email,
                'password' => $request->password    
            ];

            if (auth()->attempt($data)) 
            { 
                
                $request->session()->put('CLUB_LOGIN',true);
                $request->session()->put('CLUB_ID',$club->id);

                $data = User::where(['role_id' => 2, 'email' => $data['email']])->update(
                    [
                        'status' => 1,
                    ]
                );
                return redirect('/club/dashboard');
            } 
            else
            {
                $data = 'Incorrect Password';
                return Inertia::render('Auth/Login',['data'=>$data]);
            }
        }
        else
        {
            $data = 'User Does not exist';
            return Inertia::render('Auth/Login',['data'=>$data]);
        } 
    }
    
    public function dashboard(Request $request)
    {
        $data = User::where(['id' => $request->session()->get('ADMIN_ID')])->get();
        return Inertia::render('Admin/Dashboard',['data' => $data[0]]);
    }
    public function forgotPassword(Request $request)
    {
        return Inertia::render('Auth/ForgotPassword');
    }
    public function resetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        $msg = "please check your mail";
        return Inertia('Auth/ForgotPassword',['msg' => $msg]);
    }
    public function resetPasswordView(Request $request, $token)
    {
        return Inertia::render('Auth/ResetPassword',['email' => $request['email'], 'token' => $token]);
    }
    public function ResetPasswordAction(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'confirmpassword' => 'required',
        ]);
        $admin = User::where(['email' => $request['email'],'role_id' => 1])->get();
        $club  = User::where(['email' => $request['email'],'role_id' => 2])->get();
        $user  = User::where(['email' => $request['email'],'role_id' => 3])->get();
        if(isset($data[0]))
        {
            $data = User::where(['email' => $request['email'] ,'role_id' => 1])->update(['password' => Hash::make($request->password)]);
            $msg = "Password Update Successfully";
            return Inertia::render('Auth/Login',['msg' => $msg]);
        }
        else if(isset($club[0]))
        {
            $data = User::where(['email' => $request['email'] ,'role_id' => 2])->update(['password' => Hash::make($request->password)]);
            $msg = "Password Update Successfully";
            return Inertia::render('Auth/Login',['msg' => $msg]);
        }
        else if(isset($user[0]))
        {
            $data = User::where(['email'=> $request['email'] ,'role_id' => 3])->update(['password' => Hash::make($request->password)]);
            $msg = "Password Update Successfully Please login In Application";
            return Inertia::render('Auth/Login',['msg' => $msg]);
        }
        else
        {
            $msg = "User does not exists";
            return Inertia::render('Auth/Login',['msg' => $msg]);
        }
    }
}