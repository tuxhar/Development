NOTE=>1.index.php file open by default in server without mentioning it
2.Every statement ends with ;
3.when you assign string value put quote around it
4.syntax:- <?php echo "tushar"; ?>
<?= "tushar"; ?>
5.localhost=127.0.0.1/look back address
6.extention=.php/.php3/phtml
7.port number:-80
XAMPP = extended apache mariaDb php perl
Current Version = 7.3

#What is PHP
		PHP = hypertext preprocessor
		Or it was earlier called as personel home page
		Php is a server side scripting language used for development of dynamic webpages
		It was developed by rasmus lerdroff in 1994
		
#Advantages of php =>
1)open source(freely available code)
2)platform independent(runs on any OS)
3)loosely typed language
4)it's supports oops concepts

#what can php do?
	it can generate dynamic webpages
	it can collect form data
	it can send and recieve cookies
	it can add,delete,modify database
	can create,open,close file on a server
	can be secured and Encrepted user data
#difference between php4 vs php5
	oops concepts does not support in php4 and it runs on zend engine 1 while
	oops concept support in php5 and it runs on zend engine 2,it introduces try and catch exception
	php7 runs on a zend NG(next generation)
#static vs dynamic 
	The static website display the same content each time when someone visits it,
	 whereas in dynamic website the page content changes according to the user.	
#what is scripting language?
	it is a set of instruction that interpret on runtime
	it usually  use to enhance the performance of webpages
#difference between scripting language vs programming language
	1.scripting language is used to develope dynamic webpages whereas 
	programming language is used to develop complete application
	2.programming language complies on runtime
	but scripting language interpret on runtime
	3.scripting language is loosely typed languge
	programming language is strongly typed language
	4.scripting language can embeded with other language
	
#variable =Container of value
	1)it begins with $ symbol
	2)we cannot use keyword as a variable
	3)it does not contain spaces
	4)it does not begin with numbers Or Special Symbol
	5)case-sensitive
	6)it doesnt provide data type(loosely typed language) 
#echo vs print
	1.echo is comparatively faster than print
	2.echo has no return value while print like a php function and it's return 1 value
	3.echo can take multiple parameter where as print can take single parameter	
#heredoc = it is used to display multiple line statement
	echo <<< MYDATA
	this is first line
	this is second line
	MYDATA;
#comment -it is human readable text that are ingored by php
 there are three types of comments
    1)//single line comment            one liner
    2)#shell comment                   one liner
    3)/*multiline comment */           multi liner
#erros in php 
	1.notice = when variable not found and program will execute successfully
	2.warning = when we are trying to include a php file by using include() and program will execute successfully
	3.parser = when syntax wrong and program will stop
	4.fatal	= when undefined method and we are trying to include require() program will stop
#function = it is block of code that can be used repeadedly
	  1)predefined 
	  2)user defined
	 syntax=> 
	 function name(parameter){
	   //block of code
	 } 
	 name(argument); //calling function 
Example=>function with parameter
	   <h1><?php say(4,5); ?></h1>
	   <?php
		  function say($a,$b){
		  	echo "hello tushar ".$a+$b;
		  }
	  ?>
Example=>function with return value //if we dont want to print output in function
    <?php
    $ans = say(5,6);
    echo $ans;
   ?>
<?php
  function say($a,$b){
  	$c = $a+$b;
  	return $c;
  }
?>

NOTE:=>1)parameter and argument must be in same number
       2)you can return only single value
#array = It is a dataType in Php which stores multiple values in a single variable
In php There are three types of array
		1)Indexed array = It stores numeric key
		    <?php  $arr = array('red','green','blue');
			
			  echo $arr[0];  // red
			  for($i=0; $i < count($arr); $i++){   
			     echo $arr[$i].'<br/>';
			  }
			  OR
			  foreach($arr as $value){
				  echo $value.'<br/>';
			  }
            ?>			  
		2)associative array = It stores named key
		    <?php 
			  $arr = ['a'=>'red','b'=>'green','c'=>'blue'];
			  
			  echo $arr['b'];  //green
			  foreach($arr as $key => $value){
				  echo $key.'='.$value;
			  }
			?>
		3)multidimensional array = array contains one or more array
Note:=>1)You can define array by using array(); OR []
       2)print_r($arr);  //for debugging

#loops
 1)for = loop through a block of code for a specific number of time
 2)while = loop through a block of code as long as condition is true
 3)do while = loop through a block of code atleast once and then repeat it as long as condition is true
 4)foreach = loop througn a block of code for each element of associative array 
#include/require=to include one php file into another
	<?php include('demo.php'); ?>
	<?php require('demo.php'); ?>
#Difference between include and require
   eventually both are used to include one php file into another but an error acquire
   include show only warning and execute the current script where as require show fatal error
   and does not execute current script
#include_once();/require_once();
   file is ignored by the php if already included
#Scope of variable 
  1.local:-a variable declared within a function and can only be accessed within that function
  2.global:-it is refer to any variable that is defined outside of any function and can be accessed from any part of the script
  NOTE:-we can make local variable to  global variable by using global keyword & $GLOBALS['key'] superglobal
	  <?php
	$firstname = "tushar";
	function say(){
	  echo $GLOBALS['firstname'];
	}
	say();
	?>
	<?php
	$firstname = "tushar";
	function say(){
		global $firstname;
	  echo $firstname;
	}
	say();
	?>
#superglobal array=>It is predefined variable which are always accessible regardless of its scope
There are several superglobal arrays in php
	$GLOBALS['key'];
	$_SERVER['key'];
	$_GET['key'];
	$_POST['key'];
	$_REQUEST['key'];
	$_SESSION['key'];
	$_COOKIES['key'];
	$_FILES['key'];
1)$_SERVER['key'];=which hold information about header,User,IP,path,and script location	    	$_SERVER['HTTP_HOST']; //which return host name
    $_SERVER['HTTP_USER_AGENT']; //which return browser details of user
    $_SERVER['SERVER_NAME']; //which return server name
    $_SEREVR['REMOTE_ADDR']; //which return IP
    $_SERVER['SERVER_PORT']; //which reuturn port number
    $_SERVER['PHP_SELF']; //which find directory
2)$_GET['']	and $_POST[''] =>it is used to send user information to the server.
	1)get method send data by URL where POST method send data by http request
	2)get method cannot use to send binary data like images OR document while
	post method can use to send binary data.
	3)get method is restricted upto 1024 characher but in case of post method
	there is no such restriction.
3)$_REQUEST[''] = it is used to fetch information of user no matter what the method is.
4)$_FILES[''] = to upload file.
form(entype=multipart/form-data); use this
	

*array_change_key_case(array,option[optional]); It changes case of key in uppercase OR lowercase
    <?php 
	   $arr = ['a'=>'red','b'=>'green','c'=>'blue'];
	   echo "<pre>";
	   print_r(array_change_key_case($arr,1));
	?>
0/CASE_LOWER for lowercase
1/CASE_UPPER for uppercase
by default it is in lowercase
*array_chunk(array,size,preserve[optional]); This function divide an array into different block of array
    <?php 
       $arr = ['a'=>'red','b'=>'green','c'=>'blue'];
	   echo "<pre>";
	   print_r(array_chunk($arr,2,true));
Note:preserve=>true for reindexed	   
	?>
*array_flip() = It exchanges all the keys with its  respective values
<?php
$fruit = ['mango'=>'yellow','apple'=>'red','custurdapple'=>'green'];
echo '<pre>';
echo(array_flip($fruit));
?>	