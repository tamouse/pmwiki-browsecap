<?php if (!defined('PmWiki')) exit();
/* Copyright (C) 2012 by Tamara Temple Web Development */
/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
+----------------------------------------------------------------------+
| See cookbook/browsecap/README.txt for information.
| See cookbook/browsecap/LICENSE.txt for licence.
+----------------------------------------------------------------------+
*/


$RecipeInfo['BrowseCap']['Version'] = '2011-07-13';

require_once("$FarmD/cookbook/sms.php"); // for debugging stuff
require_once("$FarmD/cookbook/browsecap/Browscap.php");	// import the browser capability class

$bc_obj = new Browscap("$FarmD/cookbook/browsecap/browscap.cache");
@sms("Created browsecap object",$bc_obj,__FILE__,__LINE__);
$bc_browser = $bc_obj->getBrowser(null, true); // return array

if (!is_array($bc_browser)) {
	$errmsg = __FILE__.'@'.__LINE__.": return from bc_obj->getBrowser() is not an array!!!".PHP_EOL;
	error_log($errmsg);
	die($errmsg);
}
@sms("bc_browser: ",$bc_browser, __FILE__,__LINE__);





