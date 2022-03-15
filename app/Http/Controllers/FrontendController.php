<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\OurAchievement;
use App\Models\OurService;
use App\Models\OurWork;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $carousels = Carousel::all();
        $our_services = OurService::all();
        $our_achievements = OurAchievement::all();
        $our_works = OurWork::all();

        return view('frontend.home', compact('carousels', 'our_services', 'our_achievements', 'our_works'));
    }
}
