<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function productdetails(){
        return view('frontend.productdetails');
    }
    public function vendors(){
        return view('frontend.vendors');
    }
    public function about(){
        return view('frontend.vendorsdetails');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function account(){
        return view('frontend.account');
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function wishlist(){
        return view('frontend.wishlist');
    }
    public function checkout(){
        return view('frontend.checkout');
    }
}
