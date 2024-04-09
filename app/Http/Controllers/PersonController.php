<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    //
    public function getInfo(){
        return DB::table('people')->find(10);
    }
}
