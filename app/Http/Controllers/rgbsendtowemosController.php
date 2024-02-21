<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rgbsendtowemosController extends Controller
{
    public function index(){

        return view('rgbsendtowemos');

    }

    public function sendCommand(Request $request)
    {
        // Itt fogjuk megkapni az AJAX kérést
        $command = $request->input('command');

        // Ide írd meg, hogy mit szeretnél csinálni az Arduino-val
        // Például küldj egy üzenetet az Arduino-ra
        // Fontos, hogy az Arduino-nak megfelelően konfigurált szerveren kell futnia

        // Majd visszaküldünk valamilyen választ az AJAX kérésre
        return response()->json(['success' => true]);
    }
}
