<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use Illuminate\Support\Facades\DB;

use App\Models\Seller;
use App\Models\SellerProduct;
use App\Models\SellerType;
use App\Models\SellerOrder;
use App\Models\SellerOrderDetail;
use App\Models\SellerVoucher;


class SellerController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerRequest  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerRequest $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }

    //Middleware
    public function __construct(){
        $this->middleware('ValidSeller');
    }

    //All Seller List
    public function sellerList(){
        $sellers = Seller::where('s_approve', 'yes')->get();
        return view('pages.seller.sellerList')->with('sellers', $sellers);
    }

    //Seller Info Edit
    public function sellerEdit(){
        $id=session()->get('seller');
        $seller = Seller::where('id', $id)->first();
        return view('pages.seller.sellerEdit')->with('seller', $seller);
    }
    public function sellerEditSubmitted(Request $request){
        $validate = $request->validate([
            's_name'=>'required|min:3|max:20',
            's_phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            's_email'=>'email',
            's_address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $seller = Seller::where('id', $request->id)->first();
        $seller->id = $request->id;
        $seller->s_name = $request->s_name;
        $seller->s_phone = $request->s_phone;
        $seller->s_email = $request->s_email;
        $seller->s_address = $request->s_address;
        
        if($request->hasFile('image')){
            $imageName = time()."_".$request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $seller->image=$imageName;
            $seller->save();
        }
        else{            
            $seller->image=$seller->image;
        }

        $seller->save();
        return redirect()->route('sellerList');
    }

    //Seller Dashboard
    public function sellerDashboard(){
        $id=session()->get('seller');
        $seller = Seller::where('id', $id)->first();
        return view('pages.seller.sellerDashboard')->with('seller', $seller);
    }

    //Seller Product
    public function sellerProduct(){
        $id = session()->get('seller');
        $products = SellerProduct::where('s_id',$id)->get();
        return view('pages.seller.sellerProduct')->with('products',$products);
    }
    public function sellerAProduct(){
        $id = session()->get('seller');
        $products = SellerProduct::where('s_id',$id)->where('p_approve',1)->get();
        return view('pages.seller.sellerProduct')->with('products',$products);
    }
    public function sellerDProduct(){
        $id = session()->get('seller');
        $products = SellerProduct::where('s_id',$id)->where('p_approve',0)->get();
        return view('pages.seller.sellerProduct')->with('products',$products);
    }

    //Seller Order
    public function sellerOrders(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }
    public function sellerOrderDetails(Request $request){
        $id = $request->id;
        $order = SellerOrder::where('id',$id)->first();
        //return $order->sellerOrderBelongsToSeller;
        // {"id":1,"s_name":"Mr. X","s_phone":"01222222222","phone_verified_at":null,"rememberPhoneToken":null,"s_email":"mrx@gmail.com","email_verified_at":null,"rememberEmailToken":null,"s_password":"133631788e68ce51eb65eac86bc93753","s_password_confirm":"133631788e68ce51eb65eac86bc93753","s_address":"Bashundhara, Dhaka","image":"1647032919_pngtree-businessman-user-avatar-free-vector-png-image_1538405.jpg","remember_token":null,"s_approve":"yes","created_at":"2022-03-11T19:00:00.000000Z","updated_at":"2022-03-11T19:00:00.000000Z"}
        // return $order->sellerOrderHasManySellerOrderDetails;
        // [{"id":1,"o_id":1,"p_id":1,"qty":1,"unit_price":"800.000","created_at":"2022-03-11T20:00:00.000000Z","updated_at":"2022-03-11T20:00:00.000000Z"}]
        //XXXXXreturn $order->sellerOrderHasManySellerOrderDetails;
        return view('pages.seller.sellerOrderDetails')->with('order',$order);
    }
    public function sellerOrdersDeliveredPaid(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->where('order_status', 'Delivered')->where('payment_status', 'Paid')->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }
    public function sellerOrdersOrderedAdvanced(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->where('order_status', 'Ordered')->where('payment_status', 'Advanced')->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }
    public function sellerOrdersOrderedNotPaid(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->where('order_status', 'Ordered')->where('payment_status', 'Not Paid')->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }
    public function sellerOrdersDeliveredError(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->where('order_status', 'Error')->where('payment_status', 'Paid')->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }
    public function sellerOrdersDeliveredReturned(){
        $id = session()->get('seller');
        $orders = SellerOrder::where('s_id',$id)->where('order_status', 'Returned')->where('payment_status', 'Not Paid')->get();
        return view('pages.seller.sellerOrders')->with('orders',$orders);
    }

    //Seller Vouchers
    public function sellerOrdersBadOrders(){
        $id = session()->get('seller');
        //return $id;
        $ordersa = SellerOrder::where('order_status', 'Error')->orWhere('order_status', 'Returned')->get();
        //where('s_id',$id)->
        //$order->where('s_id',$id)->where('order_status', 'Error')->orWhere(function ($query) {$query->where('s_id',$id)->where('order_status', 'Returned');})->get();
        //return $orders->id; first() dile ashbe but ekhane multiple value ashte pare tai get() dite hobe
        //return $ordersa->s_id;
        //$bad=collect($ordersa);
        //return $order;
        //session()->push('bad',$bad);
        //return session('bad');
        // while($orders->s_id == $id){
        //     return "yes";
        // }
        //$orders = SellerOrder::where($ordersa->s_id, 's_id', $id)->get();
        //return $orders;
        $orders = SellerOrder::where('s_id',$id)
        ->where(function ($query){
            $query->where('order_status', 'Error');
            $query->orWhere('order_status', 'Returned');
        })->get();
        return view('pages.seller.sellerBadOrders')->with('orders',$orders);
    }
}
