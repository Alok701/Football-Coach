<?php

namespace App\Http\Controllers\Frontend\Trail;

use App\Http\Controllers\Controller;
use App\Mail\Frontend\UserRegistration;
use App\Mail\Frontend\ThankYou;
use App\Models\UserDetails;
use App\Models\Users;
use App\Models\VerifyUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail;

class AuthController extends Controller
{
    function register(Request $data)
    {

        $data->validate(
            [
                'plan' => 'required',
                'position' => 'required',
                'full_name' => 'required',
                'email' => 'required|email|unique:users',
                'mobile' => 'required|max:10|min:10',
                'password' => 'required|min:6',
                'cnfpassword' => 'required|same:password'
            ],
            [
                'plan.required' => 'Please select plan',
                'position.required' => 'Please select position',
                'full_name.required' => 'Please Enter Full Name',
                'email.unique' => 'Already Taken This Email ID',
                'email.required' => 'Please Enter Email',
                'mobile.required' => 'Please Enter Mobile Number',
                'mobile.min' => 'Please Enter 10 Digit Mobile Number',
                'mobile.max' => 'Please Enter 10 Digit Mobile Number',
                'password.required' => 'Please Enter Password',
                'password.min' => 'Atleast 6 Digit Password',
                'cnfpassword.same' => 'The Confirm password and password must match.'
            ]
        );
        // dd($data->all());

        $model = new Users();
        $model->full_name = $data->full_name;
        $model->email = $data->email;
        $model->mobile = $data->mobile;
        $model->password = Hash::make($data->password);
        $model->plan = $data->plan;
        $model->position = $data->position;
        $model->club_details = $data->club_details;

        $model->save();

        $userDetails = new UserDetails();
        $userDetails->user_id = $model->id;
        $userDetails->save();

        $verifyuser = new VerifyUsers();
        $verifyuser->user_id = $model->id;
        $verifyuser->token = Str::random(64);
        $verifyuser->save();

        $email = $data->email;

        Mail::to('info@iamfootballcoach.in')->send(new UserRegistration($data));

        Mail::to($email)->send(new ThankYou($model, $verifyuser));

        return redirect('/login')->with("success", "Register Successfully as $data->position Please Check Your Mail & Verify");
    }

    function login(Request $data)
    {
        // dd($data->all());
        $userModel = Users::where('position', $data->position)
            ->where('email', $data->email)->first();
        if ($userModel) {
            if (Hash::check($data->password, $userModel->password)) {
                if ($userModel->status == "on") {
                    $data->session()->put("USER_LOGIN", true);
                    $data->SESSION()->PUT("USER_ID", $userModel->id);
                    $data->SESSION()->PUT("USER_EMAIL", $userModel->email);
                    $data->SESSION()->PUT("USER_PLAN", $userModel->plan);
                    if ($userModel->plan == "Premium") {
                        $data->session()->put("USER_Premium", true);
                    }
                    $data->SESSION()->PUT("USER_POSITION", $userModel->position);
                    if ($userModel->position == "Coach") {
                        $data->session()->put("COACH_LOGIN", true);
                         if ($userModel['plan'] == "Free") {
                        return redirect('/trial')->with("loginsuccess", "success");
                         }
                        if ($userModel->flag  == 1) {
                            return redirect('/coach-index');
                        } else {
                            $userModel->flag = 1;
                            $userModel->update();
                            return redirect('/coach-index')->with("loginsuccess", "Wrong Password Entered");
                        }
                        // return redirect('/coach/coach-dashboard')->with("loginsuccess", "success");
                    }
                    if ($userModel['plan'] == "Free") {
                        return redirect('/trial')->with("loginsuccess", "success");
                    } elseif ($userModel['plan'] == "Premium") {
                        if ($userModel->flag  == 1) {
                            return redirect('/coach-index');
                        } else {
                            $userModel->flag = 1;
                            $userModel->update();
                            return redirect('/coach-index')->with("loginsuccess", "Wrong Password Entered");
                        }
                    }
                } else {
                    $verifyuser = VerifyUsers::WHERE("user_id", $userModel->id)->FIRST();

                    Mail::to($userModel->email)->send(new ThankYou($userModel, $verifyuser));

                    return REDIRECT()->BACK()->WITH("error", "Account Is Not Active, Check Your Mail");
                }
            } else {
                return REDIRECT()->BACK()->WITH("error", "Wrong Password Entered");
            }
        } else {
            return REDIRECT('/register')->WITH("error", "Your Email Not Register. Please Register");
        }
    }

    function VerifyUser(Request $Token)
    {
        $VerifyUserModel = VerifyUsers::WHERE("token", $Token->token)->FIRST();

        if (isset($VerifyUserModel)) {
            $CustomerModel =  Users::WHERE("id", $VerifyUserModel->user_id)->FIRST();

            if ($CustomerModel->status == "off") {
                $CustomerModel->status = "on";
                $CustomerModel->SAVE();

                return REDIRECT()->BACK()->WITH("success", "Your e-mail is verified,Plz Login");
            } else {
                return REDIRECT()->BACK()->WITH("success", "Your e-mail is already verified,Plz Login");
            }
        }

        return REDIRECT()->BACK()->WITH("error", "Sorry your email cannot be identified");
    }
}
