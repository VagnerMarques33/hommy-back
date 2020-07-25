<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Republic;

class RepublicController extends Controller{     
}

public function showrepublics($id){
    $republics = republics::findOrFail($id);
    return response()->json($republics);
}

public function listrepublics(){
    $republics = republics::all();
    return response()->json([$republics]);
}