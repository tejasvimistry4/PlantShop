<?php

namespace App\Http\Controllers;


use App\Models\Ps_product;
use App\Models\Ps_product_image;
use App\Models\Ps_product_feature;
use App\Models\Ps_categories;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function test(){
        return ["Name"=>"Tejashvi","Course"=>"PHP"];
    }

    public function getProduct(Request $req){

        if($req['getProducts']){
            $pro['products'] = Ps_product::all();
            return $pro;
        }
    }

    public function getProduct_Image(Request $img){

        if ($img['getProductImages']) {
             $pimg['productImage'] = Ps_product_image::all();
             return $pimg;
        }
    }

    public function getProduct_Feature(Request $fea){

        if ($fea['getProductFeatures']) {
             $feat['productfeatures'] = Ps_product_feature::all();
             return $feat;
        }
    }

    public function getCategory(Request $cat){

        if($cat['getCategorys']){
            $ctg['categorys'] = Ps_categories::all();
            return $ctg;
        }
    }
}
