<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function b(){
        $about=[
            (object)[
                "titre"=>"Strong Coffee, Strong Roots",
                "subtitre"=>"About Our Cafe",
                "text1"=>"Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.",
                "text2"=>"We guarantee that you will fall in",
                "text3"=>"lust",
                "text4"=>"with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.",
                "image"=> 'img/about.jpg'
            ]
        ];
        
        return view('pages.about', compact('about'));
    }
}
