<?php

namespace Test\Package\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index(){
        return ['a','b','c'];
    }
}
