<?php

class Helpers {

	/**
	 * Получить пользователя
	 *
	 * @param int $userId
	 * @return mixed|object
	 */
	public static function  _user($userId) {
		$userModel = App\User::find($userId);
		if (!$userModel) {
			return abort(404);
		}
		return $userModel;
	}

	/**
	 * Получить категорию
	 *
	 * @param int $categoryId
	 * @return mixed|object
	 */
	public static function  _category($categoryId) {
		$categoryModel = App\Models\Category::find($categoryId);
		if (!$categoryModel) {
			return abort(404);
		}
		return $categoryModel;
	}
}