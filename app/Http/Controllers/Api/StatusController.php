<?php

namespace App\Http\Controllers\Api;

use App\Models\Lamp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index() 
    {
        $lamps = Lamp::all();
        
        $lamp_status = [];

        foreach ($lamps as $lamp) {
            $lamp_status[$lamp->id] = $lamp->status;
        }

        return response()->json($lamp_status);
    }
}
