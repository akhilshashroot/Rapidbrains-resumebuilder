<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
use App\Models\Admin;
use App\Models\Recruiter;
use Password;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    public function forgotpassword(Request $request) {
        return view('auth.passwords.forgotpassword');
    }
    public function forgot(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required',
           
        ]);
        //dd("hi");
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }
        $token = Str::random(60);
        $email=$request->email;
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $admin = Admin::where('email', $request->email)->first();
            if(!$admin) {
                $recruiter = Recruiter::where('email', $request->email)->first();
                if(!$recruiter) {
                    return response()->json(['error' => 'Email is not registered.'], 200);
                } else {
                    $recruiter->token = $token;
                    $recruiter->save();
                    Mail::to($email)->send(new ResetPassword($recruiter->name, $token));
                }
            } else {
                $admin->token = $token;
                $admin->save();
                Mail::to($email)->send(new ResetPassword($admin->name, $token));
            }
            //return response()->json(['error' => 'Email is not registered.'], 200);
        } else {
            $user->token = $token;
            $user->save();
            Mail::to($email)->send(new ResetPassword($user->name, $token));
        }
        //$user['token'] = $token;
        // $user['is_verified'] = 0;
        //$user->save();
            
        

        if(Mail::failures() != 0) {
            return response()->json([
                'status' => true,
                'message' => 'Reset password link sent on your email id.'
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'There is some issue with email provider.'
        ], 200);
    }
    public function resetpassword(Request $request,$token) {
        //dd($token);
        return view('auth.passwords.resetpassword',compact('token'));
    }
    public function updatePassword(Request $request,$token) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
           
        ]);
        
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()->all()]);
        }
        $user = User::where('email', $request->email)->where('token',$token)->first();
        if (!$user) {
            $admin = Admin::where('email', $request->email)->where('token',$token)->first();
            if(!$admin) {
                $recruiter = Recruiter::where('email', $request->email)->where('token',$token)->first();
                if(!$recruiter) {
                    return response()->json([
                        'status' => false,
                        'error' => 'Invalid token.'
                    ], 200);
                } else {
                    $recruiter->token = null;
                    $recruiter->password = Hash::make($request->password);
                    $recruiter->save();
                    return response()->json([
                        'status' => true,
                        'message' => 'password has been changed.'
                    ], 200);
                }
            } else {
                $admin->token = null;
                $admin->password = Hash::make($request->password);
                $admin->save();
                return response()->json([
                    'status' => true,
                    'message' => 'password has been changed.'
                ], 200);
            }
            //return response()->json(['error' => 'Email is not registered.'], 200);
        } else {
            $user->token = null;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'status' => true,
                'message' => 'password has been changed.'
            ], 200);
        }
    }
}
