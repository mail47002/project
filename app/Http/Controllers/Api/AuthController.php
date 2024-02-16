<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDevice;
use Illuminate\Support\Facades\Hash;
use Storage;
use Mail;
use App\Models\PasswordReset;


class AuthController extends Controller
{
   public function login(Request $request)
   {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user=User::where(['email'=>$request->input('email'), 'role_id' => 3])
        ->get();
        if(isset($user[0]))
        {
            $user = [
                'email' => $request->email,
                'password' => $request->password    
            ];
            if (auth()->attempt($user)) 
            { 
                $user = User::where(['email' => $request->input('email')])->update(
                    [
                        'status' => 1,
                    ]
                );
                $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
                $userdata = $request->user();
                $userdevice = new UserDevice;
                $userdevice->user_id = $userdata['id'];
                $userdevice->device_name = $request->device_name;
                $userdevice->device_token = $request->device_token;
                $userdevice->device_type = $request->device_type;
                $userdevice->save();
                return response()->json(['user' => auth()->user(),'token' => $token], 200);
            } 
            else
            {
                return response()->json(['message' => 'Invalid password'], 401);
            }
        }
        else
        {
            return response()->json(['message' => 'user does not exist'], 401);
        }
    }

   public function forgotPassword(Request $request)
   {
        $user=User::where(['email'=>$request->input('email'), 'role_id' => 3])
        ->get();
        if(isset($user[0]))
        {
            $randomNumber = random_int(100000, 999999);
            $resetPassword = PasswordReset::where(['email' => $request->email])->get();
            if(isset($resetPassword[0]))
            {
                $data = PasswordReset::where(['email' =>$request->email])->update(['token'=> $randomNumber]);
            }
            else
            {
                $data = new PasswordReset();
                $data->email = $request['email'];
                $data->token = $randomNumber;
                $data->save();
            }
            $otp['otp']= $randomNumber;
            $user['to']=$request['email'];
            Mail::send('resetpassword',$otp,function($messages) use ($user) {
                $messages->to($user['to']);
                $messages->subject('Reset Password');
            });
            return response()->json(['message'=> 'OTP Sent Successfully'], 200);
        }
        else
        {
            return response()->json(['error'=> 'this User does not exists'], 401);
        }
   }

   public function verify(Request $request)
   {
        $request->validate([
            'otp' => 'required',
            'email' => 'required',
        ]);
        $data = PasswordReset::where(['email' => $request->email, 'token' => $request->otp])->first();
        if(isset($data))
        {
            return response()->json(['message' => "OTP verified successfully!"]);
        }
        else
        {
            return response()->json(['message' => "Invalid OTP"], 400);
        }
   }

   public function resetPassword(Request $request)
   {
        $request->validate([
            'email' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);

        $user = User::where(['email' => $request->email])->first();
        if(Hash::check($request->input('newpassword'),$user->password))
        {
            return response()->json(['message' => 'New password must be different from old password.']);
        }
        else
        {
            $data = User::where(['email' => $request['email']])->update(
                [
                    'password' => Hash::make($request->newpassword),
                ]
            );
            return response()->json(['message' => 'Password updated successfully']);
        }
   }
   public function Profile(Request $request)
   {
        $user = $request->user();
        if(isset($user))
        {
            $profile= ['email' => $user['email'], 'phone' => $user['phone'], 'name' => $user['name'],'profile_image' => asset('storage/media/Profile/'.$user['profile_image'])];
            return response()->json(['user' => $profile],200);
        }
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg], 401);
        }
   }
   public function updateProfile(Request $request)
   {    
        $user = $request->user();
        if(isset($user))
        {
            $profile = User::where(['id' => $user['id']])->update(['name' => $request->name, 'email' => $request->email]);
            $updateprofile = User::where(['email' => $request->email])->get();
            $msg = "Profile updated Successfully";
            return response()->json(['user' => $updateprofile, 'msg' => $msg],200);
        }
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg], 401);
        }
   }
   public function updateProfilePicture(Request $request)
    {
        $user = $request->user();
        $request->validate([
            'profile_image'=>"required|mimes:jpeg,jpg,png",
        ]);
        if(isset($user))
        {
            if($request->hasfile('profile_image'))
            {  
                if($user['id']>0)
                {
                    $profile_Image=User::where(['id'=>$user['id']])->get();
                    Storage::delete('/public/media/Profile/'.$profile_Image[0]->profile_image);
                }
                $image=$request->file('profile_image');
                $ext=$image->extension();
                $image_name=time().'.'.$ext;
                $image->storeAs('/public/media/Profile',$image_name);
            }

            $profilePicture = User::where(['id' => $user['id']])->update(['profile_image' => $image_name]);
            $msg = "Profile Picture updated Successfully";
            return response()->json(['msg' => $msg],200);
        }
        else
        {
            $msg = "User does not exists";
            return response()->json(['msg' =>$msg], 401);
        }
    }
    public function ChangePassword(Request $request)
    {
        $request->validate([
            'oldpassword'=> 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);
        $user = $request->user();
        if(isset($user))
        {
            if(Hash::check($request->input('oldpassword'),$user->password))
            {
                if(Hash::check($request->input('newpassword'),$user->password))
                {
                    return response()->json(['message' => 'Current Password can not use'], 400);
                }
                else
                {
                    $data = User::where(['id' => $user['id']])->update(
                        [
                            'password' => Hash::make($request->newpassword),
                        ]
                    );
                    return response()->json(['message' => 'Password updated successfully']);
                }
            }
            else 
            {
                return response()->json(['message' => 'Please Enter Valid Current Password'], 400);
            }
        }
        else
        {
            return response()->json(['message' => 'User does not exists'], 401);
        }
    }
    public function Notification(Request $request)
    {
        $user = $request->user();
        if(isset($user))
        {
            $data = User::where(['id' => $user['id']])->update(
                [
                    'alert_notification' => $request->alert_notification,
                    'alert_email' => $request->alert_via_mail,
                    'alert_sound' => $request->notification_sound,
                ]
            );
            return response()->json(['message' => 'Notification Update Successfully']);
        }
        else
        {
            return response()->json(['message' => 'User does not exists'], 401);
        }
    }
    public function logout(Request $request)
    {

        if (Auth::check()) 
        {
            $user = $request->user();
            $data = User::where(['id' => $user['id']])->update(
                [
                    'status' => 0,
                ]
            );
            Auth::user()->token()->revoke();
            return response()->json(['success' =>'logout success'],200); 
        }
        else
        {
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }
}
