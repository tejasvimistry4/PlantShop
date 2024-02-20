<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ps_admin;
use App\Models\Ps_categories;
use App\Models\Ps_product;
use App\Models\Ps_branch;
use App\Models\Ps_product_box;
use App\Models\Ps_product_image;
use App\Models\Ps_product_feature;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin_login');
    }

    public function AdminLog(Request $adm){
        $adel = $adm->admin_email;
        $adpd = ($adm->admin_pass);

        $ad = Ps_admin::where('admin_email',$adel)->where('admin_pass', $adpd)->get();

        if (count($ad)==1) {
            $adm->session()->put('admin',$ad);
            return redirect('addcategory');
        }else{
            return back();
        }
       
    }

    public function AdMaster(){
        return view('master');
    }

//----Category----//

    public function AddCategory(Request $adm){
        if ($adm->session()->has('admin')) {
            $sessdata = $adm->session()->get('admin');

            $admin = Ps_admin::get();
            return view('add_category',compact('sessdata','admin'));
        }else{
            return redirect('admin_login');
        }
      
    }

    public function PostCategory(Request $req){
        $ctg = new Ps_categories();

        $category_name = $req->category_name;
        $admin_id = $req->admin_id;

      
        $ctg->category_name = $category_name;
        $ctg->admin_id = $admin_id;
        $ctg->save();


        return back();
    }

//----Product----//

    public function AddProduct(Request $adm){
        if ($adm->session()->has('admin')) {
           $sessdata = $adm->session()->get('admin');

        $branch = Ps_branch::get();
        $category = Ps_categories::get();
        return view('add_product',compact('sessdata','branch','category'));
    }
    }

    public function PostProduct(Request $req){
        $pdt = new Ps_product();

        $product_name = $req->product_name;
        $product_price = $req->product_price;       
        $product_sale_price = $req->product_sale_price;
        $product_size = $req->product_size;
        $tExt = $req->file('product_tumb_img')->getClientOriginalExtension();
        $product_tumb_img = uniqid().".".$tExt;
        $req->file('product_tumb_img')->move(public_path('img/plantimg'),$product_tumb_img);
        $product_description = $req->product_description;
        $product_quantity = $req->product_quantity;
        $branch_id = $req->branch_id;
        $category_id = $req->category_id;
      
        $pdt->product_name = $product_name;
        $pdt->product_price = $product_price;
        $pdt->product_sale_price = $product_sale_price;
        $pdt->product_size = implode("-", $product_size);
        $pdt->product_tumb_img = $product_tumb_img;
        $pdt->product_description = $product_description;
        $pdt->product_quantity = $product_quantity;
        $pdt->branch_id = $branch_id;
        $pdt->category_id = $category_id;

        $pdt->save();

        return back();
    }

//----Product-Image----//

    public function ProductImage(Request $adm){
        if ($adm->session()->has('admin')) {
            $sessdata = $adm->session()->get('admin');

            $product = Ps_product::get();
            
          
            
        return view('addproduct_image',compact('sessdata','product'));
    }

}

    public function PostProductImg(Request $pim){  
        $pimg = new Ps_product_image();

        $product_id = $pim->product_id;
        $tExt = $pim->file('product_image')->getClientOriginalExtension();
        $product_image = uniqid().".".$tExt;
        $pim->file('product_image')->move(public_path('img/prodimg'),$product_image);
  
        $pimg->product_id = $product_id;
        $pimg->product_image = $product_image;

        $pimg->save();
        return back();

    }

//----Product-Features----//

    public function ProductFeatures(Request $adm){
        if ($adm->session()->has('admin')) {
            $sessdata = $adm->session()->get('admin');

            $product = Ps_product::get();

        return view('addproduct_feature',compact('sessdata','product'));
    }
}

    public function PostProductFeatures(Request $feat){
        $pdfeat = new Ps_product_feature();

        $product_id = $feat->product_id;
        $prod_feature_title = $feat->prod_feature_title;
        $prod_feature_description = $feat->prod_feature_description;

      
        $pdfeat->product_id = $product_id;
        $pdfeat->prod_feature_title = $prod_feature_title;
        $pdfeat->prod_feature_description = $prod_feature_description;

        $pdfeat->save();


        return back();

        
}

//----Product-box----//
    public function ProductBox(Request $adm){
        if ($adm->session()->has('admin')) {
            $sessdata = $adm->session()->get('admin');

            $product = Ps_product::get();

        return view('addproduct_box',compact('sessdata','product'));
    }
}

    public function PostProductBox(Request $box){
        $pbox = new Ps_product_box();

        $product_id = $box->product_id;
        $product_box_pot = $box->product_box_pot;
        $product_box_size = $box->product_box_size;      
        $product_box_soil = $box->product_box_soil;
        $tExt = $box->file('product_box_img')->getClientOriginalExtension();
        $product_box_img = uniqid().".".$tExt;
        $box->file('product_box_img')->move(public_path('img/prod-boximg'),$product_box_img);
             
        $pbox->product_id = $product_id;
        $pbox->product_box_pot = $product_box_pot;
        $pbox->product_box_size = $product_box_size;
        $pbox->product_box_soil = $product_box_soil;
        $pbox->product_box_img = $product_box_img;

        $pbox->save();

        return back();
    }
}
