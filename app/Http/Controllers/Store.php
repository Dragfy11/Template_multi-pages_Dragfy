<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Store extends Controller
{
    public function d(){

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
        $store=[
            (object)[
                "titre"=>"Come On In",
                "subtitre"=>"We're Open",
                "adress"=>"1116 Orchard Street",
                "etat"=>"Golden Valley, Minnesota",
                "appel"=>"Call Anytime",
                "num"=>"(317) 585-8468"
            ],
            (object)[
                    "Sunday"=>"Closed",
                    "Monday"=>"7:00 AM to 8:00 PM",
                    "Tuesday"=>"7:00 AM to 8:00 PM",
                    "Wednesday"=>"7:00 AM to 8:00 PM",
                    "Thursday"=>"7:00 AM to 8:00 PM",
                    "Friday"=>"7:00 AM to 8:00 PM",
                    "Saturday"=>"9:00 AM to 5:00 PM"
                ]
            
        ];


        return view('pages.store', compact('about','store'));
    }
}
