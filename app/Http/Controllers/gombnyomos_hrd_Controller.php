<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\gombnyomos_hrd_MOdel;

class gombnyomos_hrd_Controller extends Controller
{
    
    public function index(){
        $nyomogombosok_hrd = gombnyomos_hrd_MOdel::orderby('ny_id','DESC')->paginate(10);

        return view('gombnyomos_hrd',['nyomogombosok_hrd' => $nyomogombosok_hrd]);
    
    }


        //api
        public function create(Request $req){
            //$req->validate();
    
            $validatlas = Validator::make(
                $req->all(),
                [
                    "tipus"=>"required",
                    "homerseklet"=>"required",
                    "paratartalom"=>"required",
                    "legminoseg"=>"required"
    
                ],
                [
                    "tipus.required"=>" kotelezo tipus megadasa",
                    "homerseklet.required"=>" kotelezo homerseklet megadasa",
                    "paratartalom.required"=>" kotelezo paratartalom megadasa",
                    "legminoseg.required"=>" kotelezo paratartalom megadasa"
                ]
    
            );
    
                if($validatlas->fails()){
                    $data['message'] = "Hibás adatok";
                    $adat['errorList'] = $validatlas->messages();
                    return response()->json($data,400);
                }else{
                    $adatok_new = new gombnyomos_hrd_MOdel;
                    $adatok_new->tipus = $req->input('tipus');
                    $adatok_new->homerseklet = $req->input("homerseklet");
                    $adatok_new->paratartalom = $req->input("paratartalom");
                    $adatok_new->legminoseg = $req->input("legminoseg");
                    $adatok_new->rogzetesideje = date('Y-m-d H:i:s');
                    $adatok_new->save();
                    return response()->json($adatok_new,201);
                }
        }

}
