<?php

// Load MT Lib
include('<mt:CGIServerPath/>/php/mt.php');

// Load config
$mt = new MT(<mt:BlogID/>, '<mt:ConfigFile/>'); // For MT 4
//$mt = MT::get_instance(<mt:BlogID/>, '<mt:ConfigFile/>'); // For MT 5

// Set ID for template module
$mt->display("mt:123");

?>
