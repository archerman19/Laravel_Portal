<?php

class Helpers {

	public static function  _user($userId) {
		$userModel = App\User::find($userId);
		if (!$userModel) {
			return abort(404);
		}
		return $userModel;
	}
}