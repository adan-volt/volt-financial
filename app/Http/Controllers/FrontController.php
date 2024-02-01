<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\ImageSlider;
use App\Models\TokenGoogleCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function about_us()
    {
        return view('/about-us');
    }

}
