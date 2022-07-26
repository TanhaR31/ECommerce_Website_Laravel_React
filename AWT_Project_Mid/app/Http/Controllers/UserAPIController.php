<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\Validator;

class UserAPIController extends Controller
{
    private $status_code    =        200;

    public function userSignUp(Request $request)
    {
        $validator              =        Validator::make($request->all(), [
            "s_name"              =>          "required",
            "s_email"             =>          "required|email",
            "s_password"          =>          "required",
            "s_password_confirm"          =>          "required",
            "s_phone"             =>          "required"
        ]);

        if ($validator->fails()) {
            return response()->json(["status" => "failed", "message" => "validation_error", "errors" => $validator->errors()]);
        }

        // $name                   =       $request->name;
        // $name                   =       explode(" ", $name);
        // $first_name             =       $name[0];
        // $last_name              =       "";

        // if(isset($name[1])) {
        //     $last_name          =       $name[1];
        // }

        $userDataArray          =       array(
            "s_name"          =>          $request->s_name,
            "s_email"              =>          $request->s_email,
            "s_password"           =>          md5($request->s_password),
            "s_password_confirm"           =>          md5($request->s_password_confirm),
            "s_phone"              =>          $request->s_phone,
            "s_address" => "a",
            "s_approve" => "no"
        );

        $user_status            =           Seller::where("s_email", $request->s_email)->first();

        if (!is_null($user_status)) {
            return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! email already registered"]);
        }

        $user                   =           Seller::create($userDataArray);

        if (!is_null($user)) {
            return response()->json(["status" => $this->status_code, "success" => true, "message" => "Registration completed successfully", "data" => $user]);
        } else {
            return response()->json(["status" => "failed", "success" => false, "message" => "failed to register"]);
        }
    }


    // ------------ [ User Login ] -------------------
    public function userLogin(Request $request)
    {

        $validator          =       Validator::make(
            $request->all(),
            [
                "s_email"             =>          "required|email",
                "s_password"          =>          "required"
            ]
        );

        if ($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }


        // check if entered email exists in db
        $email_status       =       Seller::where("s_email", $request->s_email)->first();


        // if email exists then we will check password for the same email

        if (!is_null($email_status)) {
            $password_status    =   Seller::where("s_email", $request->s_email)->where("s_password", md5($request->s_password))->first();

            // if password is correct
            if (!is_null($password_status)) {
                $user           =       $this->userDetail($request->s_email);

                return response()->json(["status" => $this->status_code, "success" => true, "message" => "You have logged in successfully", "data" => $user]);
            } else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Incorrect password."]);
            }
        } else {
            return response()->json(["status" => "failed", "success" => false, "message" => "Unable to login. Email doesn't exist."]);
        }
    }

    // ------------------ [ User Detail ] ---------------------
    public function userDetail($email)
    {
        $user               =       array();
        if ($email != "") {
            $user           =       Seller::where("s_email", $email)->first();
            return $user;
        }
    }
}
