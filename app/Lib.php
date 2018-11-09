<?php 

class Lib {

	public static function error () {
		if (Session::has('error')) {
			echo '<div class="alert alert-danger">' . Session::get("error") . '</div>';
			Session::forget('error');
		}
		return;
	}

 }
 ?>
