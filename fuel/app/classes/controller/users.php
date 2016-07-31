<?php

class Controller_Users extends Controller_Template {

    public $template = 'layouts/layout_sign_in';

    public function action_index() {
        
    }

    public function action_new() {
        $this->template->title = "HTube | Sign Up";
        $this->template->content = View::forge('users/new');
    }

    public function action_create() {
        if (Input::method() == 'POST') {
            $val = Model_User::validate('create');
            if ($val->run()) {
                try {
                    $created = Auth::create_user(
                        $val->validated('username'),
                        $val->validated('password'),
                        $val->validated('email'),
                        100,
                        array(
                            'fullname' => '',
                            'address' => '',
                        )
                    );
                    if ($created) {
                        Response::redirect('/sign-in');
                    } else {
                        Session::set_flash('error', 'Fail');
                    }
                } catch (\SimpleUserUpdateException $e) {
                    // duplicate email address
                    if ($e->getCode() == 2) {
                        Session::set_flash('error', 'This Email already exists');
                    }
                    // duplicate username
                    elseif ($e->getCode() == 3) {
                        Session::set_flash('error', 'This Username already exists');
                    } else {
                        Session::set_flash('error', $e->getMessage());
                    }
                }
            }
            Session::set_flash('error', $val->error_message());
            Response::redirect_back();
        }
    }

    public function action_update($id = null) {
        
    }

    public function action_destroy($id = null) {
        
    }

}
