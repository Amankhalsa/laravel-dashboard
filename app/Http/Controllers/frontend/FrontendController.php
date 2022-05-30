<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // frontend
    public function frontend_page(){
        return view('frontend.index');
    }
    // eyeglasses

        public function frontend_eyeglass(){
            return view('frontend.eyeglass');
        }
    // sunglasses

        public function frontend_sunglass(){
            return view('frontend.sunglass');
        }

        // brands 
        public function frontend_brands(){
            return view('frontend.brands');

        }
}
