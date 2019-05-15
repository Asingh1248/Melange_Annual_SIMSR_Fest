<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use Hash;
session_start();

class Event extends Controller
{
    public function display($i)
    {
    	$event=DB::table('event_details_2017')->where('event_name','=',$i)->orwhere('event_code','=',$i)->get();
		return view('event')->with('event',$event);
    }
	

	public function home()
    {
    	
		$sponsor=DB::table('sponsor_2018')->orderBy('sponsor_priority','ASC')->get();
		$data=array(
			'sponsor' => $sponsor 
		);
		return view('home')->with($data); 
    }

    public function hometemp()
    {
    	
		$sponsor=DB::table('sponsor_2018')->orderBy('sponsor_priority','ASC')->get();
		$data=array(
			'sponsor' => $sponsor 
		);
		return view('home_temp')->with($data); 
    }
	
    public function sponsors()
    {
    	/* */	
		$sponsor=DB::table('sponsor_2018')->orderBy('sponsor_priority','ASC')->get();
		$data=array(
			'sponsor' => $sponsor 
		);
		return view('sponsors')->with($data); 
    }
	
    public function home2016()
    {
    	$event=DB::table('event_details')->select('event_code','event_name','long_desc','status','image')->where('status','=','active')->get();
		$sponsor=DB::table('sponsor')->orderBy('sponsor_priority','ASC')->get();
		$data=array(
			'sponsor' => $sponsor 
		);
		return view('home_2016')->with($data); 
    }
	
    public function home2017()
    {	
		$event=DB::table('event_details_2017')->select('event_code','event_name','long_desc','status','image')->where('status','=','active')->get();
    	$sponsor=DB::table('sponsor_2017')->orderBy('sponsor_priority','ASC')->get();
		$data=array(
			'sponsor' => $sponsor 
		);
		return view('home_2017')->with($data);  
    }
	
    public function home2()
    {
    	$event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
		return view('events_2016')->with('event',$event); 
    }
	
    public function home3()
    {
    	$event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
		return view('events')->with('event',$event); 
    }
    public function gallery()
    {
    	$event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
		return view('gallery')->with('event',$event); 
    }
    public function flash()
    {
    	$event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
		return view('flash')->with('event',$event); 
    }
    public function quizzard()
    {
    	$event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
		return view('quizzard')->with('event',$event); 
    }

    public function coming_soon()
    {
            $event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
            return view('landingpage.coming_soon')->with('event',$event); 
    }

    public function temporary()
    {
            $event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
            return view('new_pages.new_homepage')->with('event',$event);
            /* 

            */
    }
    
    public function all_sponsors() {
        $event=DB::table('event_details_2017')->select('event_code','event_cat','event_name','long_desc','status','image')->get();
        return view('new_pages.all_sponsors')->with($data); 
    }
}
