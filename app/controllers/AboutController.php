<?php

class AboutController extends BaseController{
    
    public function showAbout()
    {
        // return View::make('about');
        return 'about';
    }

    public function showSubject($theSubject)
    {
        return $theSubject;
    }

    public function showDirections()
    {
        $theURL = URL::route('directions');
	    return "DIRECTIONS go to: $theURL";
    }
}