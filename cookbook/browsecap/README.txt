INTRODUCTION
============
This is the README.txt documentation for the PmWiki Cookbook recipe BrowseCap. BrowseCap utilizes the phpbrowscap php class module (obtainable from https://github.com/GaretJax/phpbrowscap) to provide detection for various web browsers and determining their capability. Rather than use the php get_browser() function, in which you have to maintain your own local copy of the browsercap.ini file, phpbrowscap provides an .ini-free and server-maintenance-free way of accomplishing the same thing, plus more.


INSTALLATION
============
Place the following command somewhere in your local/config.php
configuration file:

  @include_once("$FarmD/cookbook/browsecap/browsecap.php");

Make sure the directory $FarmD/cookbook/browsecap/browscap.cache is server-writeable and -readable.


USAGE
=====
BrowseCap creates a global array, $bc_browser, which contains information about the current user's browser obtained from the user agent string and the browsecap database. The structure of the array is:





CHANGELOG
=========
2011-07-13 - first version

TODO
====
* Provide markup to use some of the information in the $bc_browser array.



