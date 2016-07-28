<?php

class Controller_Session extends Controller_Template
{
	public $template = 'layouts/layout_sign_in';

	public function action_sign_in()
	{
	    if (Auth::check()){
	        Response::redirect('admin/tags');
	    }

	    if (Input::method() == 'POST')
	    {
	        // check the credentials.
	        if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
	        {
	            if (Input::param('remember', false)){
	                // create the remember-me cookie
	                Auth::remember_me();
	            }else{
	                Auth::dont_remember_me();
	            }
	            Response::redirect('admin/tags');
	        }
	        else{
	            Session::set_flash('error', 'Sign in fail');
	        }
	    }
		$this->template->title = "HTube | Sign In";
		$this->template->content = View::forge('users/sign_in');
	}

	public function action_sign_out()
	{
	    Auth::dont_remember_me();
	    Auth::logout();
	    Response::redirect('sign-in');
	}

}