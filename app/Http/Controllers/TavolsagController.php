<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tavolsagok;
use Illuminate\Support\Facades\Validator;


class TavolsagController extends Controller
{
    public function index(){

        $tavolsag = Tavolsagok::orderby('t_id','DESC')->paginate(10);

        return view('tavolsag',['tavolsag' => $tavolsag]);

    }

    //api
    public function create(Request $req){
        //$req->validate();
    
        $validatlas = Validator::make(
            $req->all(),
            [
                "tav"=>"required"
    
            ],
            [
                "tav.required"=>" kotelezo tavolsag"
            ]
    
        );
    
            if($validatlas->fails()){
                $data['message'] = "Hibás adatok";
                $adat['errorList'] = $validatlas->messages();
                return response()->json($data,400);
            }else{
                $tavolsag = new Tavolsagok;
                $tavolsag->tav = $req->input('tav');
                $tavolsag->meres_ideje = date('Y-m-d H:i:s');
                $tavolsag->save();
                return response()->json($tavolsag,201);
            }
    
    
    }

}
