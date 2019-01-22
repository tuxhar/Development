Library=>it is reusable predefined classes

$this->load->library('form_validation');   //Initialize single Library manually
$this->load->library(array('email','database'));  //Initialize multiple Library manually
OR
load it from autoload


###########custom Library#############
1)Make a UserLibrary.php in Application/Libraries
2)make a class and in that class make some function
3)load that userlibrary class in controller
4)make an object of the class and call function of it.

#########Extending Library###########
1)make a class in Application/Libraries using MY_ keyword
class MY_email extends CI_email{
	//make your function in it
}
2)load that library in controller and call function
Note=>For Overriding Library use this
class CI_email{
	//make the same function name 
}