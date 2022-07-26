<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\SellerType;
use Mail;
use Session;


use Illuminate\Support\Facades\DB;

class RegistrationAPIController extends Controller
{
    //
    function register(Request $request)
    {
        $seller = new Seller();
        $seller->id = $request->id;
        $seller->s_name = $request->s_name;
        $seller->s_phone = $request->s_phone;
        $seller->s_email = $request->s_email;
        $seller->s_password = md5($request->s_password);
        $seller->s_password_confirm = md5($request->s_password_confirm);
        $seller->s_address = $request->s_address;
        $seller->s_approve = 'yes';
        $seller->save();

        //Admin will do this part after approval. For now doing like this.
        $type = new SellerType();
        $type->s_id = $request->id;
        $type->st_type = 'Regular';
        $type->amount = 10;
        $type->save();

        if ($seller->save()) return "Successful";
    }

    public function mail(Request $request)
    {
        $data = ['name' => "User", 'data' => 'Hello Seller'];

        $emailAddress = $request->email;

        $user['to'] = $emailAddress;


        Mail::send('mail', $data, function ($messages) use ($user) {

            $otp = rand(1000, 9999);

            Session::put('otp', $otp);

            // $user = user::where('email','=',$emailAddress)->update(['otp' => $otp]);

            $messages->to($user['to']);

            $messages->subject('Your OTP is : ' . $otp);

            // $messages->body('Your OTP is : '. $otp);

        });

        $OTPFromSession = Session::get('otp');

        return Session::get('otp');
    }
}
