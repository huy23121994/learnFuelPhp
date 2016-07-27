<?php

class Controller_Admin_Tags extends Controller_Hybrid
{
	public $template = 'layouts/layout_backend';

	public function action_index()
	{
		$data['tags'] = Model_Tag::find('all');
		$this->template->title = 'Admin | Tag';
		$this->template->content = View::forge('admin/tags/index', $data);
		$this->template->add_css = View::forge('layouts/include_css/dataTable');
		$this->template->add_js = View::forge('layouts/include_js/dataTable');
		$this->template->custom_js = View::forge('admin/tags/_js_index');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('users');

		$data['tag'] = Model_Tag::find($id);
		$this->template->set_global('tag', $data['tag']);
		$this->template->title = "Admin | Tag | ".$data['tag']->tag_name;
		$this->template->content = View::forge('admin/tags/edit', $data);
		$this->template->add_css = View::forge('layouts/include_css/pnotify');
		$this->template->add_js = View::forge('layouts/include_js/pnotify');
		$this->template->custom_js = View::forge('admin/tags/_js_edit');

	}

	public function action_update($id = null)
	{	
		is_null($id) and Response::redirect('users');
		$tag = Model_Tag::find($id);
		if ($tag) {
			if (Input::method() == 'POST') {
				$val = Model_Tag::validate('create');
				if ($val->run()) {

					$tag->tag_name = Input::post('tag_name');
					if (Input::post('slug') == null) {
						$tag->slug = Input::post('tag_name');
					}else{
						$tag->slug = Input::post('slug');
					}

					if ($tag and $tag->save()) {
						Session::set_flash('success', 'Tag successfully updated');
					}else{
						Session::set_flash('error', 'Could not save.');
					}
				}else{
					Session::set_flash('error', $val->error_message());
				}
			}
		}
		Response::redirect_back();
	}

	public function action_create()
	{
		if (Input::method() == 'POST') {
			$val = Model_Tag::validate('create');
			if ($val->run()) {

				$tag = new Model_Tag;
				$tag->tag_name = Input::post('tag_name');
				if (Input::post('slug') == null) {
					$tag->slug = Input::post('tag_name');
				}else{
					$tag->slug = Input::post('slug');
				}

				if ($tag and $tag->save()) {
					Session::set_flash('success', 'Tag successfully created');
				}else{
					Session::set_flash('error', 'Could not create tag.');
				}

			}else{
				Session::set_flash('error', $val->error_message());
			}
		}
		Response::redirect('/admin/tags');
	}

	public function action_destroy($id = null)
	{
		is_null($id) and Response::redirect('users');
		if ($tag = Model_Tag::find($id)){
			$tag->delete();
			Session::set_flash('success', 'Tag successfully deleted');
		}else{
			Session::set_flash('error', 'Could not delete this tag');
		}
		Response::redirect('/admin/tags');
	}

}
