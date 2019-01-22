#What is PHP
		PHP = hypertext preprocessor
		Or it was earlier called as personel home page
		Php is a server side scripting language used for development of dynamic webpages

#Advantages of php =>
1)open source(freely available code)
2)platform independent(runs on any OS)
3)



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