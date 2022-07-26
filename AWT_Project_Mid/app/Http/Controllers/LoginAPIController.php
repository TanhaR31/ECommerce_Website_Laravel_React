<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Token;
use Illuminate\Support\Str;
use DateTime;

class LoginAPIController extends Controller
{
    public function login(Request $req)
    {
        $c = Seller::where('id', $req->id)
            ->where('s_password', md5($req->s_password))
            ->where('s_approve', "yes")
            ->first();

        if ($c) {
            $api_token = Str::random(64);
            $token = new Token();
            $token->user_id = $c->id;
            $token->token = $api_token;
            $token->created_at = new DateTime();
            $token->save();
            return $token->token;
        }
    }

    public function logout(Request $req)
    {
        Token::where('token', $req->Token)->delete();

        $tok = Token::where('token', $req->Token)->first();
        if(!$tok){
            return "Token Deleted";
        }
        return "Nope";
    }
}
