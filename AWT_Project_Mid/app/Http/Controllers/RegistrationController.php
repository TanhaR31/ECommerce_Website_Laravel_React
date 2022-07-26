<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\SellerType;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
        //New Seller Create
        public function sellerCreate(){
            $last = DB::table('sellers')
                    ->orderBy('id', 'desc')
                    ->first();
            if($last){
                $data = $last->id+1;
                return view('pages.seller.sellerCreate')->with('data',$data);
            }
            else
            return view('pages.seller.sellerCreate');
        }
        public function sellerCreateSubmitted(Request $request){
        //     return $request;
                $validate = $request->validate([
                's_name'=>'required|min:3|max:20',
                's_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
                's_email'=>'email',
                's_password'=>'required|min:5|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                's_password_confirm'=>'required|same:s_password',
                's_address' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                's_password.regex'=>'English uppercase characters (A - Z),
                English lowercase characters (a - z),
                Base 10 digits (0 - 9),
                Non-alphanumeric (For example: !, $, #, or %),
                Unicode characters',
            ]
        );
            $phone = Seller::where('s_phone', '=', $request->s_phone)->first();
            $email = Seller::where('s_email', '=', $request->s_email)->first();
            if($phone){
                //return "This Phone Number Already Exists. Use Another Number Please";
                return redirect()->back()->with('exist', 'This Phone Number Already Exists. Use Another Number Please');
            }
            elseif($email){
                //return "This Email Address Already Exists. Use Another Email Please";
                return redirect()->back()->with('exist', 'This Email Address Already Exists. Use Another Email Please');
            }
            else{
                $seller = new Seller();
                $seller->id = $request->id;
                $seller->s_name = $request->s_name;
                $seller->s_phone = $request->s_phone;
                $seller->s_email = $request->s_email;
                $seller->s_password = md5($request->s_password);
                $seller->s_password_confirm = md5($request->s_password_confirm);
                $seller->s_address = $request->s_address;
                $seller->s_approve = 'no';
                $imageName = time()."_".$request->file('image')->getClientOriginalName();
                $request->image->move(public_path('images'), $imageName);
                $seller->image=$imageName;
                $seller->save();
    
                //Admin will do this part after approval. For now doing like this.
                $type=new SellerType();
                $type->s_id=$request->id;
                $type->st_type='Regular';
                $type->amount=10;
                $type->save();
                
                return redirect(route('sellerList'));}
        }
}
