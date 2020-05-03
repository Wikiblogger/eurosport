<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
        public  function aboutus(){
            return view('eurosport.aboutus');
        }

    public  function products(){
        return view('eurosport.products');
    }

    public  function contactus(){
        return view('eurosport.contact');
    }

    public  function football(){
        return view('eurosport.football');
    }

    public  function tennis(){
        return view('eurosport.tennis');
    }

    public  function world(){
        return view('eurosport.world');
    }
}
