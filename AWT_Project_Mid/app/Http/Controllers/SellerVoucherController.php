<?php

namespace App\Http\Controllers;

use App\Models\SellerVoucher;
use App\Http\Requests\StoreSellerVoucherRequest;
use App\Http\Requests\UpdateSellerVoucherRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SellerCustomer;
use App\Models\CustomerVoucher;
use App\Models\SellerOrder;
use DateTime;

class SellerVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellerVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerVoucherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerVoucher  $sellerVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(SellerVoucher $sellerVoucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerVoucher  $sellerVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerVoucher $sellerVoucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerVoucherRequest  $request
     * @param  \App\Models\SellerVoucher  $sellerVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerVoucherRequest $request, SellerVoucher $sellerVoucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerVoucher  $sellerVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerVoucher $sellerVoucher)
    {
        //
    }

        //Middleware
        public function __construct(){
            $this->middleware('ValidSeller');
        }
    
        //All Voucher List
        public function sellerVoucherList(){
            $id=session()->get('seller');
            $sellers = SellerVoucher::where('s_id', $id)->get();
            return view('pages.seller.sellerVoucherList')->with('sellers', $sellers);
        }

        //New Seller Voucher Create
        public function sellerVoucherCreate(){
            $last = DB::table('seller_vouchers')
                    ->orderBy('id', 'desc')
                    ->first();
            if($last){
                $data = $last->id+1;
                return view('pages.seller.sellerVoucherCreate')->with('data',$data);
            }
            else
            return view('pages.seller.sellerVoucherCreate');
        }
        public function sellerVoucherCreateSubmitted(Request $request){
        //     return $request;
                $validate = $request->validate([
            ],
            [
            ]
        );
            $id=session()->get('seller');
            $code = SellerVoucher::where('sv_code', '=', $request->sv_code)->first();
            if($code){
                return redirect()->back()->with('exist', 'This Voucher Code Already Exists. Use Another Code Please');
            }
            else{
                $seller = new SellerVoucher();
                $seller->id = $request->id;
                $seller->s_id = $id;
                $seller->sv_req_amount = 0;
                $seller->sv_price = $request->sv_price;
                $seller->sv_code = $request->sv_code;
                $seller->save();
                
                return redirect(route('sellerVoucherList'));}
        }
    
        //Seller Voucher Info Edit
        public function sellerVoucherEdit(Request $request){
            $id=session()->get('seller');
            $seller = SellerVoucher::where('id', $id)->first();
            return view('pages.seller.sellerVoucherEdit')->with('seller', $seller);
        }
        public function sellerVoucherEditSubmitted(Request $request){
            $validate = $request->validate([
            ]);

            $seller = SellerVoucher::where('id', $request->id)->first();
            $seller->id = $request->id;
            $seller->sv_price = $request->sv_price;
            $seller->sv_code = $request->sv_code;

            $seller->save();
            return redirect()->route('sellerVoucherList');
        }

        //Seller Voucher Info Edit
        public function sellerGiveVoucher(Request $request){
            //return $request;
            $id=session()->get('seller');
            $vc = SellerVoucher::where('s_id', $id)->get();
            $oid = SellerOrder::where('id', $request->id)->first();
            //$vc=SellerVoucher::latest()->get();
            //return $vc;
            return view('pages.seller.sellerGiveVoucher', compact('oid', 'vc'));
        }
        public function sellerGiveVoucherSubmitted(Request $request){
            //return $request->starts;
            // $validate = $request->validate([
            //     // 'starts'=>'date',
            //     // 'expires'=>'date|after:starts',
            // ],
            // [
            //     // 'expires.after'=>'no',
            // ]);

            // //$date=new Carbon;
            $s=new DateTime($request->starts);
            $e=new DateTime($request->expires);

            //return $s;

            if($s<$e){

                //return "yes";

                $sv_code = SellerVoucher::where('id', $request->vc)->first();
                // //return $sv_code->sv_code;
                $c = new CustomerVoucher();
                $c->c_id=$request->c_id;
                $c->sv_id=$request->vc;
                $c->sv_code=$sv_code->sv_code;
                $c->starts=$request->starts;
                $c->expires=$request->expires;
                $c->sv_status="not used";
                $c->save();

                $order = SellerOrder::where('id', $request->o_id)->first();
                //return $order;
                $order->order_status="Gave Voucher";
                $order->save();

                return redirect()->route('sellerOrdersBadOrders');
                
            }
            else return redirect()->back()->with('date', 'Expire Date cannot be less than Start Date');
        }

}
