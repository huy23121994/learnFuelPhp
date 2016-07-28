<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'sign-in' => 'session/sign_in',
	'sign-out' => 'session/sign_out',
	'sign-up' => 'users/new',
);
