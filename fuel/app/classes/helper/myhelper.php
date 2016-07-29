<?php

namespace Helper;

class MyHelper 
{
	
	public static function check_auth()
	{
		if (!\Auth::check()){
			\Session::set_flash('error', 'Please Sign in');
	        \Response::redirect_back('sign-in');
	    }
	}
}

?>