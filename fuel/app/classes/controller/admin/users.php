<?php

class Controller_Admin_Users extends Controller_Hybrid
{
    public $template = 'layouts/layout_backend';

    public function before() {
        parent::before();
        \Helper\MyHelper::check_auth();
    }

    public function action_index() {
        $data['users'] = Model_User::find('all');
        $this->template->title = 'Admin | User';
        $this->template->content = View::forge('admin/users/index', $data, false);
        $this->template->custom_js = View::forge('admin/users/_js_index');
    }
    
    public function action_show($id = null) {
        is_null($id) and Response::redirect('admin/users');
        $data['user'] = Model_User::find($id);
        $data['profile_fields'] = @unserialize($data['user']->profile_fields) ;
        $this->template->set_global('profile_fields', $data['profile_fields'], false);
        $this->template->set_global('user', $data['user'], false);
        $this->template->title = 'Admin | User | '.$data['user']->username;
        $this->template->content = View::forge('admin/users/show');
        $this->template->custom_js = View::forge('admin/users/_js_show');
    }
}

