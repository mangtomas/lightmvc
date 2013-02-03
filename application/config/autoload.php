<?php

/*
* Autoloading models class and helpers
* 
*/

/*loading models automatically e.g. array('db','model1');
*default models
*	-db
*	-session
*/
$config['models'] = array('session','db','validate','user','crud','compute','reportsmodel');

//Helpers
//e.g. array('default','helper1');
$config['helpers'] = array('default','islogin','isequal');

//Libararies
$config['libraries'] = array();