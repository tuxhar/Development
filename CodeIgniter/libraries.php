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

#########FORM VALIDATION########
$this->load->library('form_validation'); //load library

$this->form_validation->set_rules("name","user defined name","rules seperated from pipeline");

$this->form_validation->run();  //to check validation

validation_errors(); //to print errors in controller
form_error("name"); //to print error in view page

$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>'); //to set delimiters in all errors

##########SESSION######
$this->session->set_userdata('admin',$data); //set session
$this->session->userdata('admin'); //get session
$this->session->unset_userdata('admin'); //unset session


$this->session->set_flashdata('response_msg','<div class="alert alert-danger">Wrong details have been inserted by you</div>');  //to set flashdata
$this->session->flashadata('response_msg'); //to get flashdata
<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>
########EMAIL########
$this->email->from('tuac1994@gmail.com',set_value('tushar company'));
           $this->email->to(set_value('tuac1994@gmail.com'));
           $this->email->message("Thanx for registration");
           $this->email->send();
if(!$this->email->send()){
    show_error($this->email->print_debugger())
            }else{
               echo "you have been got email";
           }           