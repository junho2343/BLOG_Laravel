<?php 
namespace app\Lib;

use Session;

class Lib {

	public static function error () {
		if (Session::has('error')) {
			echo '<div class="alert alert-danger">' . Session::get("error") . '</div>';
			Session::forget('error');
		}
		return;
	}
	public static function mark_lang ($text) {
		$text_arr = explode("\n", htmlspecialchars($text));

        // ``` 구별
        $i = 0;
        foreach ($text_arr as $key => $value) {
            if (trim($value) == "```") {
                if ($i % 2 == 0) {
                    $text_arr[$key] = "<pre class='pre'>";
                }else {
                    $text_arr[$key] = "</pre>";
                }
                $i++;
            }
        }

        // # 구별
        foreach ($text_arr as $key => $value) {
            $space_temp = explode(" ", $value);

            if ($space_temp[0] == "#"){
                unset($space_temp[0]);
                $text_arr[$key] = "<h1>" . join(" ", $space_temp) . "</h1>";
            }else if ($space_temp[0] == "##") {
                unset($space_temp[0]);
                $text_arr[$key] = "<h2>" . join(" ", $space_temp) . "</h2>";
            }else if ($space_temp[0] == "###") {
                unset($space_temp[0]);
                $text_arr[$key] = "<h3>" . join(" ", $space_temp) . "</h3>";
            }else if ($space_temp[0] == "####") {
                unset($space_temp[0]);
                $text_arr[$key] = "<h4>" . join(" ", $space_temp) . "</h4>";
            }else if ($space_temp[0] == "#####") {
                unset($space_temp[0]);
                $text_arr[$key] = "<h5>" . join(" ", $space_temp) . "</h5>";
            }else if ($space_temp[0] == "######") {
                unset($space_temp[0]);
                $text_arr[$key] = "<h6>" . join(" ", $space_temp) . "</h6>";
            }else {
                $text_arr[$key] = "<p>" . join(" ", $space_temp) . "</p>";
            }
        }

     	return htmlspecialchars(join($text_arr));
	}

 }

