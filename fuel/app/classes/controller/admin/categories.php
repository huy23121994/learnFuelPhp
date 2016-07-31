<?php

class Controller_Admin_Categories extends Controller_Hybrid
{

	public $template = 'layouts/layout_backend';

	public function before()
	{
		parent::before();
		\Helper\MyHelper::check_auth();
	}

	public function action_index()
	{
		$data['categories'] = Model_Category::find('all');
		$this->template->title = 'Admin | Category';
		$this->template->content = View::forge('admin/categories/index', $data);
		$this->template->custom_js = View::forge('admin/categories/_js_index');
	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('admin/categories');

		$data['category'] = Model_Category::find($id);
		$this->template->set_global('category', $data['category']);
		$this->template->title = "Admin | Category | ".$data['category']->category_name;
		$this->template->content = View::forge('admin/categories/edit');
		$this->template->custom_js = View::forge('admin/categories/_js_edit');

	}

	public function action_update($id = null)
	{	
		is_null($id) and Response::redirect('admin/categories');
		$category = Model_Category::find($id);
		if ($category) {
			if (Input::method() == 'POST') {
				$val = Model_Category::validate('create');
				if ($val->run()) {

					$category->category_name = Input::post('category_name');
					if (Input::post('slug') == null) {
						$category->slug = Input::post('category_name');
					}else{
						$category->slug = Input::post('slug');
					}

					if ($category and $category->save()) {
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
			$val = Model_Category::validate('create');
			if ($val->run()) {

				$category = new Model_Category;
				$category->category_name = Input::post('category_name');
				if (Input::post('slug') == null) {
					$category->slug = Input::post('category_name');
				}else{
					$category->slug = Input::post('slug');
				}

				if ($category and $category->save()) {
					Session::set_flash('success', 'Tag successfully created');
				}else{
					Session::set_flash('error', 'Could not create category.');
				}

			}else{
				Session::set_flash('error', $val->error_message());
			}
		}
		Response::redirect('/admin/categories');
	}

	public function action_destroy($id = null)
	{
		is_null($id) and Response::redirect('admin/categories');
		if ($tag = Model_Category::find($id)){
			$tag->delete();
			Session::set_flash('success', 'Tag successfully deleted');
		}else{
			Session::set_flash('error', 'Could not delete this tag');
		}
		Response::redirect('/admin/categories');
	}

}
