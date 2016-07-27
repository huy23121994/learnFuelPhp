<?php

class Controller_Admin_Tags extends Controller_Hybrid
{
	public $template = 'layouts/layout_backend';

	public function action_index()
	{
		$data['tags'] = Model_Tag::find('all');
		$this->template->title = 'Admin | Tag';
		$this->template->content = View::forge('tag/index', $data);
		$this->template->add_css = View::forge('layouts/include_css/dataTable');
		$this->template->add_js = View::forge('layouts/include_js/dataTable');
		$this->template->custom_js = View::forge('tag/_js_index');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users');
		if ($data['tag'] = Model_Tag::find($id)) {
			//Session
		}
		$this->template->set_global('tag', $data['tag']);
		$this->template->title = "Admin | Tag | ".$data['tag']->tag_name;
		$this->template->content = View::forge('tag/edit', $data);

	}

	public function action_update()
	{

	}

	public function action_create()
	{
		if (Input::method() == 'POST') {
			$val = Model_Tag::validate('create');
			if ($val->run()) {
				$tag = Model_Tag::forge(array(
					'tag_name' => Input::post('tag_name'),
					'slug' => Input::post('slug'),
				));
				if ($tag and $tag->save()) {
					Session::set_flash('success', 'Added user #'.$tag->id.'.');
				}else{
					Session::set_flash('error', 'Could not save user.');
				}
			}else{
				Session::set_flash('error', $val->error_message());
			}
		}
		Response::redirect('/admin/tags');
	}

	public function action_destroy()
	{

	}

}
