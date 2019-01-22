Helper consists of a independent functions and we can use it anywhere in controller,view,model.
$this->load->helper('HelperName');  //manually load the helper in __construct() function
OR
//load it by using autoload

###########Custom Helper#########
1)we can define our userdefine helper in Application/Helpers as abc_helper.php
2)make a function in it function fun(){
	echo "hello tushar";
}
3)load that helper in controller
$this->load->helper('abc');
4)call fun();
#########Get the reference of existing helper in custom library###########
we cannot access helpers and libraries in custom library
so we need to get reference of it
$ci=&get_instance();
$ci->load->helper('');
##########Extending Helper########
1)we can define our extending helper in Application/Helpers as MY_existingHelper_Name.php
Note:=>it's not Mandatory to use MY_ keyword ,codeigniter set this keyword in $config['subclass_prefix'] = 'MY_';
2)write a function in it
3)load existingHelper in controller
4)call function
Note:=>Overriding Helper=>give the same name to Userdefine function as existing function then use it