E.g=>
<?php

class Controller extends CI_Controller{
	index function..
	function1..
	function2..
}

?>
Note=>
	1)filename and classname should be same
	2)first letter should be capital in both
	3)controller call function index() by default
	4)controller always takes public/default modifier for functions 
	we cannot use private/protected here

#Custom Controller
  1)make a file  MY_Controller.php in App/Core.
  2)extends this class from CI_Controller.
  3)Now you can extends your controller by MY_Controller 
    and add some functionality in MY_Controller.
  