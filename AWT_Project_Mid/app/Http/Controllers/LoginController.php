<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login.login');
    }
    public function loginSubmit(Request $req){
        $c = Seller::where('s_phone',$req->phone)
                  ->where('s_password',md5($req->password))
                  ->first();
        if($c){
            if($c->s_approve=='yes'){
                session()->put('seller',$c->id);
                session()->put('sellername',$c->s_name);
                if ($req->remember) {
                    setcookie('remember',$req->phone, time()+36000); //36000 sec or 600 min or 10 hours
                }else{
                    setcookie('remember',"");
                }
                return redirect()->route('sellerDashboard');
            }
            return redirect()->back()->with('message', 'Admin Did Not Approve You Yet!!');
        }
        
        return redirect()->back()->with('message', 'Phone & Password Did Not Match');

    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
}
