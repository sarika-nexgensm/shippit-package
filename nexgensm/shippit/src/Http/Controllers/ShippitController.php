<?php

namespace Nexgensm\Shippit\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
class ShippitController extends Controller
{
    //
    public function index(){
        return view('shippit::shippit');
    }
}
