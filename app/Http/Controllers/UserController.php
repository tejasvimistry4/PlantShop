<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ps_user;
use App\Models\Ps_admin;
use App\Models\Ps_categories;
use App\Models\Ps_product;
use App\Models\Ps_branch;
use App\Models\Ps_product_image;
use App\Models\Ps_product_feature;
use App\Models\Ps_product_review;

class UserController extends Controller
{
    public function UserLogin(){
        return view('user_login');
    }


    public function UserRegister(){
        return view('user_register');
    }

    
    public function PostUser(Request $req){
        $reg = new Ps_user();

        $user_name = $req->user_name;
        $user_email = $req->user_email;
        $user_moblie = $req->user_moblie;
        $user_pass = $req->user_pass;
      
        $reg->user_name = $user_name;
        $reg->user_email = $user_email;
        $reg->user_moblie = $user_moblie;
        $reg->user_pass = $user_pass;
        $reg->save();

        return back();
    }


    public function Index(){
        return view('index');
    }

    public function About(){
        return view('about');
    }

    public function Contact(){
        return view('contact');
    }

    public function Shop(Request $request){
        $plant = Ps_product::get();
        $category = Ps_categories::get();

       
        
        return view('shop', compact('plant','category'));
    
    }



    public function SingleProduct($id){ 
        $plt = Ps_product::find($id);
        $features = Ps_product_feature::get();
         
        return view('single_product', compact('plt','features'));
    
    }

    public function PostReviews(Request $rew){
        $rwv = new Ps_product_review();
       
        $prod_review_star = $rew->prod_review_star;
        $prod_review_date = $rew->prod_review_date;
        $prod_review_msg = $rew->prod_review_msg;

      
        $rwv->prod_review_star = $prod_review_star;
        $rwv->prod_review_date = $prod_review_date;
        $rwv->prod_review_msg = $prod_review_msg;

        $rwv->save();
        return back();

    }


    

    public function Cart(){
        return view('cart');
    }

    public function CheckOut(){
        return view('checkout');
    }

    public function Portfolio(){
        return view('portfolio');
    }



}

