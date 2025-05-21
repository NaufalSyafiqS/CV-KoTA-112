<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        $members = [
            
        ];
        return view('about', compact('members'));
    }
}
