<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index (){
        $about= (object)['title'=>'Strong Coffee, Strong Roots','subtitle'=>'About Our Cafe','text'=>['Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.',['We guarantee that you will fall in',' lust ','with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.']]];
        $open=[
            (object)['title1'=>'Come On In','title2'=>"We're Open",'address1'=>'1116 Orchard Street','address2'=>'Golden Valley, Minnesota','call1'=>'Call Anytime','call2'=>'(317) 585-8468'],
            (object)[
                (object)['day'=>'Sunday','hours'=>'Closed'],
                (object)['day'=>'Monday','hours'=>'7:00 AM to 8:00 PM'],
                (object)['day'=>'Tuesday','hours'=>'7:00 AM to 8:00 PM'],
                (object)['day'=>'Wednesday','hours'=>'7:00 AM to 8:00 PM'],
                (object)['day'=>'Thursday','hours'=>'7:00 AM to 8:00 PM'],
                (object)['day'=>'Friday','hours'=>'7:00 AM to 8:00 PM'],
                (object)['day'=>'Saturday','hours'=>'9:00 AM to 5:00 PM']
            ],
        ];
        return view('pages.store',compact('about','open'));
    }
}
