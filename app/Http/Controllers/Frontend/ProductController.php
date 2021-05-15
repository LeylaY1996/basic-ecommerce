<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::all();

        $notifications = Notification::all();

        $sliders = Slider::all();

        $videos = Video::all();

        $informations = Information::all();

        return view('index',compact("products","notifications","sliders","videos","informations"));
    }
}
