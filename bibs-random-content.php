<?php
/*
Plugin Name: Bibs Random Content
Plugin URI: http://www.wp-plugin-archive.de/unsere-plugins/
Description: Takes a random quote, picture or adcode from a text file and displays it anywhere in a WordPress Template
Version: 1.0
Author URI: http://www.wp-plugin-archive.de
Author: Karl-Heinz Klug und Birgit Hoffmann
License: GPL
*/
/*	
Copyright 2009  Karl-Heinz Klug
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
//  Use <?php randomcontent();> anywhere in the template. 

function randomcontent()
{
 srand ((double) microtime() * 1000000);
 $randomit = file(dirname(__FILE__).'/random.dat');
 $e = count($randomit)-1;
 echo $randomit[rand(0,$e)];
}
?>