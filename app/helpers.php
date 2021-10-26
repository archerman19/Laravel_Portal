<?php

class Helpers {

	public static function  _user($userId) {
		$userModel = App\User::find($userId);
		if (!$userModel) {
			return abort(404);
		}
		return $userModel;
	}

	public static function  _category($categoryId) {
		$categoryModel = App\Models\Category::find($categoryId);
		if (!$categoryModel) {
			return abort(404);
		}
		return $categoryModel;
	}
}