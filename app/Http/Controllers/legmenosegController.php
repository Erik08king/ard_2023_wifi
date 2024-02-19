<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legminosegek;
use Illuminate\Support\Facades\Validator;

class legmenosegController extends Controller
{
    
    public function index(){

        $legmenoseg = Legminosegek::orderby('l_id','DESC')->paginate(10);

        return view('legmenoseg',['legmenoseg' => $legmenoseg]);

    }

    //api
    public function create(Request $req){
    //$req->validate();

    $validatlas = Validator::make(
        $req->all(),
        [
            "levego"=>"required"

        ],
        [
            "levego.required"=>" kotelezo levegomenoseg"
        ]

    );

        if($validatlas->fails()){
            $data['message'] = "Hibás adatok";
            $adat['errorList'] = $validatlas->messages();
            return response()->json($data,400);
        }else{
            $legmenoseg = new Legminosegek;
            $legmenoseg->levego = $req->input('levego');
            $legmenoseg->meres_ideje = date('Y-m-d H:i:s');
            $legmenoseg->save();
            return response()->json($legmenoseg,201);
        }


}

}
