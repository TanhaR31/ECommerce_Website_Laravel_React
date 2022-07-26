<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AWT PROJECT MID</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="Refresh:0" class="navbar-brand">Project</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('sellerDashboard')}}" class="nav-item nav-link">Dashboard</a>

                    @if(Session::has('seller'))
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Seller</a>
                        <div class="dropdown-menu">
                            <a href="{{route('sellerList')}}" class="dropdown-item">All Seller List</a>
                            <a href="{{route('sellerEdit')}}" class="dropdown-item">Edit Information</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu">
                            <a href="{{route('sellerProduct')}}" class="dropdown-item">All Products List</a>
                            <a href="{{route('sellerAProduct')}}" class="dropdown-item">Approved Products</a>
                            <a href="{{route('sellerDProduct')}}" class="dropdown-item">Disapproved Products</a>
                            <a href="{{route('sellerProductCreate')}}" class="dropdown-item">Product Create</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Order</a>
                        <div class="dropdown-menu">
                            <a href="{{route('sellerOrders')}}" class="dropdown-item">All Orders</a>
                            <a href="{{route('sellerOrdersDeliveredPaid')}}" class="dropdown-item">Delivered & Paid</a>
                            <a href="{{route('sellerOrdersOrderedAdvanced')}}" class="dropdown-item">Ordered & Advanced</a>
                            <a href="{{route('sellerOrdersOrderedNotPaid')}}" class="dropdown-item">Ordered & Due</a>
                            <a href="{{route('sellerOrdersDeliveredError')}}" class="dropdown-item">Error & Paid</a>
                            <a href="{{route('sellerOrdersDeliveredReturned')}}" class="dropdown-item">Returned & Not Paid</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Voucher</a>
                        <div class="dropdown-menu">
                            <a href="{{route('sellerOrdersBadOrders')}}" class="dropdown-item">Error & Returned Orders</a>
                            <a href="{{route('sellerVoucherList')}}" class="dropdown-item">Voucher List</a>
                            <a href="{{route('sellerVoucherCreate')}}" class="dropdown-item">Voucher Create</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profit Check</a>
                        <div class="dropdown-menu">
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Credit Check</a>
                        <div class="dropdown-menu">
                        </div>

                    </div><div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Customer Review</a>
                        <div class="dropdown-menu">
                        </div>

                    </div><div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Message Admin</a>
                        <div class="dropdown-menu">
                        </div>
                    </div>
                    @endif
                    <!-- <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a> -->
                </div>
                    @if(!Session::has('seller'))
                    <div class="navbar-nav ms-auto">
                        <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    </div>
                    @else
                    <div class="navbar-nav ms-auto">
                        <p></p>
                        <a href="" class="nav-item nav-link">{{Session::get('sellername')}}</a>
                        <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                    </div>
                    @endif
            </div>
        </div>
    </nav>
</div>
</body>
</html>