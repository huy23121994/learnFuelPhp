<?php

class Controller_Admin_Users extends Controller_Template
{

	public $template = 'layouts/layout_backend';

	public function action_index()
	{
		$data['users'] = Model_User::find('all');
		$this->template->title = 'Admin | Users';
		$this->template->content = View::forge('admin/users/index',$data);	
	}

	public function action_update($id = null)
	{	
		
	}

	public function action_destroy($id = null)
	{
		
	}

}