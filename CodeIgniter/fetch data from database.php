#result();=return the array of objects
if u break the array by using foreach loop then only you can use it using ->
operator 
#result_array();=return the array of arrays
#row();=this give only one object so do not  write num_rows() to check number of record
#row_array();=this give only one array
##########Settings#############
load model in controller/autoload
load database library in autoload
############In controller########
<?php
public function index(){
  $this->load->modal('modalname','alias');
  
  $data=$this->alias->fetch();
  $this->load->view('welcome_msg',['result'=>$data]);
  
       OR
	$data['result']=$this->alias->fetch(); 
   $this->load->view('welcome_msg',$data);	
}

?>
##############In Modal##############
<?php
public function fetch(){
   return  $q=$this->db->query("select fname,lname from demo")->result();  //for mysqli
   }
   OR
 public function fetch(){
     $q=$this->db->select('fname,lname')->get('demo');
     if($q->num_rows()>0){
         return $q->result();
     }else{
      return false;
     }
  } 
}
?>


##############In view##############
<table class="table table-bordered">
  <tr>
    <th>Fname</th>
    <th>Lname</th>
  </tr>

<?php foreach($result as $v): ?>
<tr>
  <td><?= $v->fname; ?></td>
  <td><?= $v->lname; ?></td>
</tr>
<?php endforeach; ?>
</table>
