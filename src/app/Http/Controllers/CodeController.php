<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CodeController extends Controller
{
    public function showSuppliers() {

        $data=array();

        if (Storage::disk('local')->exists('supplier_data.json')) {
            $data = json_decode(Storage::get('supplier_data.json'));
        }

        return view('supplier',[
            'data'=>$data,
            'num'=>1
        ]);

    }

    public function showProducts() {
        $data=array();

        if (Storage::disk('local')->exists('product_data.json')) {
            $data = json_decode(Storage::get('supplier_data.json'));
        }

        return view('product',[
            'data'=>$data,
            'num'=>1
        ]);

    }

    public function storeSuppliers(Request $resourse) {

        $resourse=$resourse->all();
        $resourse['id']=uniqid();
        if (Storage::disk('local')->exists('supplier_data.json')) {
            $data = json_decode(Storage::get('supplier_data.json'));
            array_push($data, json_decode(json_encode($resourse)));
            $relase=json_encode($data);
        }else{
            $data=json_decode(json_encode($resourse));
            $relase='['.json_encode($data).']';
        }

        $data =Storage::disk('local')->put('supplier_data.json',  $relase);

        return back()->withInput();

    }


}
