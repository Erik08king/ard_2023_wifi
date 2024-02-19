<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homerseklet;
use Illuminate\Support\Facades\Validator;

class HomesekletController extends Controller
{
    public function index(){

        $homersekletek = Homerseklet::orderby('h_id','DESC')->paginate(10);

        return view('homerseklet',['homersekletek' => $homersekletek]);
    
    
    }

    //api
    public function create(Request $req){
        //$req->validate();

        $validatlas = Validator::make(
            $req->all(),
            [
                "homerseklet"=>"required",
                "paratartalom"=>"required"

            ],
            [
                "homerseklet.required"=>" kotelezo homerseklet",
                "paratartalom.required"=>" kotelezo paratartalom"
            ]

        );

            if($validatlas->fails()){
                $data['message'] = "Hibás adatok";
                $adat['errorList'] = $validatlas->messages();
                return response()->json($data,400);
            }else{
                $hormeseklet = new Homerseklet;
                $hormeseklet->hofok = $req->input('homerseklet');
                $hormeseklet->paratartalom = $req->input("paratartalom");
                $hormeseklet->meres_ideje = date('Y-m-d H:i:s');
                $hormeseklet->save();
                return response()->json($hormeseklet,201);
            }


    }

}
