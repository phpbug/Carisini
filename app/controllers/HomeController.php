<?php

class HomeController extends BaseController
{
	//First landing page
	public function home()
	{	
	
		return View::make('home.home')
				   ->with( 'regions', Region::all()->toArray() )
				   ->with( 'provinces', Province::all()->toArray() );
	}	

	public function search()
	{
		return View::make('home.search');
	}
}
