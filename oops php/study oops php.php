#OOPS
#class =it is group of properties with set of methods to manipulate that properties.
Rules=>
1)It can be started from letter Or _
2)we cannot start it by number Or special char
3)First letter should be written in Capital 
4)we cannot use reserved word
Syntax=>
Old                              New
<?php                          
class Mobile{                    class Mobile{
 var $a;                         public $a;
 function say(){                 function say(){
  	global $a;                  $this->a="tushar";
  	$a="tushar";                echo $this->a;
  	echo $a;                     }
  }								}								 
}
$obj1 = new Mobile;          $obj1 = new Mobile;
 $obj1->say();                  $obj1->say();
?> 
#Object = It is a class Type variable 
each time when we create object of a class 
a copy of each variable is defined in the class is created
in brief we called it as a instance of a class
    Syntax:- $obj1= new class_name;  
		<?php
		class Mobile{
		 public $a;
		 function say(){
			echo "The Model no is ".$this->a."<br/>";
		 }
		}
		$sam = new Mobile();
		$sam->a="d5";
		 $sam->say();

		?>
Access class member using object
       $obj->variable_name;
       $obj->method_name;
       $obj->method_name("arguments");	   
#this keyword = it is used for reference purpose and it is point to current object
#const vs define = it is a constant variable.once we initial it we cannot reinitialize it.
<?php
define("abc","this is define");
echo abc;
?>
<?
const a="tushar";
echo a;
?>
we can not define const at runtime and we usually use with class
access inside class using self keyword.  e.g= self::variable_name;
access outside class using classname.   e.g= classname::variable_name;
<?php
class Stud{
	const mark=232;
         function show(){
	   echo self::mark;
    }
}
$obj =new Stud;
$obj->Stud;
?>
#constructor method = this method automatically call itself when an object create.
syntax:- function __construct(){}
there are two type of constructor
1)defualt constructor
<?php
class Stud{
 public function __construct(){
	echo "fuck you";
  }	
}
$tushar = new Stud;
?>
2)parameterize constructor  
<?php
class Stud{
 public function __construct($name){
	echo "fuck you ".$name;
  }	
}
$tushar = new Stud("tushar");
?>
#destructor = it explicitly destroy an object
syntax:- 
function __destruct(){
 	echo "go to hell";
 }
#inheritance=The mechanism of deriving a child class from parent class 
	<?php
	class Parent{
		
	}
	class Child extends Parent{
		
	}
	?>
Note:-child class inherits parent class constructor if child class dont have it
if we want both the constructor
use= parent::__construct(); in child constructor
Both the constructor with parameter 

		<?php
		class Teacher{
			public $a;
		  function __construct($x){
			$this->a =$x;
			echo "parent constructor".$this->a."<br/>";
		  }
		}
		class Stud extends Teacher{
			public $b;
		   function __construct($x,$y){
			parent::__construct($x);
			$this->b = $y;
			echo "child constructor".$this->b;
		  } 
		 }	

		$tushar = new Stud(10,20);
		?>
Type of inheritance that PHP supports
1)single level = child class derived from single base class
<?php
class Teacher{
	public $a,$b;
	function getvalue($x,$y){
       $this->a = $x;
       $this->b = $y;
	}

}
class Stud extends Teacher{
  function display(){
 	echo $this->a." ".$this->b;
 }	

}
$tushar = new Stud;
$tushar->getvalue(4,5);
$tushar->display();
?>
2)Muilti level = child derived from another parent class
3)herarchical
#Access Modifier
1)public/default =if we define a property public then it can be accessed from anywhere
  <?php
		class Mobile{
		 public $a;
		 function say(){
			echo "The Model no is ".$this->a."<br/>";
		 }
		}
		$sam = new Mobile();
		$sam->a="d5";
		 $sam->say();

	?>
2)private = private property can be accessed only within the same class
even we cannot access it in child class by using interitance
3)protected = protected property or method cannot be accessed outside of that class
but it can be accessed from its child class as private modifier.
<?php
class Teacher{
	protected $a = 4;
}
class Stud extends Teacher{
	function display(){
		echo $this->a;
	}
 }	

$tushar = new Stud();
$tushar->display();
?>
#abstract method or class =In abstract class child class will have to implement parent class method. 
abstract keyword is used to define abstract class/method
if a class contains abstract method than it is abstract class.
we cannot make an object of abstract class
abstract method does not have implementation but can be inherited
<?php
abstract class Teacher{
  abstract function say();
}
class Stud extends Teacher{
  function say(){
  	echo "hello tushar";
  }
}
$obj1 = new Stud;
$obj1->say();
?>
#interface = it is used to acheive multiple inheritance.
1)All method of an interface is an abstract
2)All method of an interface are of public
3)we cannot use private and protected access modefier for properties
4)we cannot create an instance of a class
5)more than one interface can be implemented in a single class
6)a class implements uses implements keywords
7)if a class is implementing an interface.it has to define all the method given in that interface
OR class should be abstract 
8)any class can use the interface constant like
classname::variablename
9)classess that implement an interface can treat the constant like as they inherited
10)one interface can extends more than one interface by using extends keywords and ,
11)an interface cannot extends class
syntax:-
<?php
interface Father{
	const a;
	function say();
}
?>
Extending interface
<?php
interface Father{
	const a=23;
	function say();
}
interface Son extends Father{
	const b=43;
	function getdata();
}
?>
one interface can be implemented by the single class
<?php
interface Father{
	const a=23;
	function say();
}
class Son implements Father{
	public function say(){
		echo Father::a;
	}
}
?>
more than one interface can be implemented by the single class
<?php
interface Father{
  const a=54;
  function getdata();
  function showdata();
}
interface Mother{
  const b=323;
}
class Son implements Father,Mother{
   public function getdata(){
   	echo Father::a."<br/>";
   	echo Mother::b;
   }
    function showdata(){}
}
$ob = new Son;
$ob->getdata();
?>
Multiple inheritance by interface
<?php
class Father{
  public $a=23;
}
interface Mother{
  const b=323;
  function showdata();
  function say();
}
class Son extends Father implements Mother{
	public function showdata(){
		echo $this->a."<br/>";
		echo Mother::b;
	}
	public function say(){}
}
$obj = new Son;
$obj->showdata();
?>
#difference between abstract and interface
1)an abstracts class can have only abstract method or non-abstract method or both
but in interface all method  are abstract
2)an abstract class can declare property/method with access modefier
while in interface property/method are public by dafault
3)in abstract class we cannot acheive multiple inheritance
where as in interface we can acheive multiple inheritance

#method overriden = define the same function which is alreary define in child class
#method overloading =same function with different argument //cannot avil in php
#final =final keyword is used to create final method or final class
final method cannot be overridden in child class
final class cannnot be inherited by the child class
<?php
final class Teacher{
   final function say(){
   	echo "sdf";
   }
}
class Stud extends Teacher{
   function say(){
   	echo "fuck you";
   }
}
$tus = new Stud;
$tus->say();
?>
