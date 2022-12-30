<?php

// namespace Helpers;

// class HTTP{
//     static function redirect(){
//         echo "HTTP Redirect";
//     }
// }

// =====================================================================

namespace Helpers;

class HTTP
{
	static $baseUrl = "http://localhost/fair/project1";

	static function redirect($path, $query = "")
	{
		$url = static::$baseUrl . $path;
		if($query) $url .= "?$query";

		header("location: $url");
		exit();
	}
}
