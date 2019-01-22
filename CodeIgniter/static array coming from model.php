*******In controller*********
<?php
public function demo(){
        $data['var'] = $this->welcome_model->demo();
		$this->load->view('demo',$data);
	}
?>
*******In Model*********
<?php
public function demo(){
   return [
          ['name'=>'tushar' ,'class'=>'1st'],
          ['name'=>'sumit','class'=>'2nd']
       ];
  }
  ?>
 ********In View******
 <table>
	<tr>
		<th>Name</th>
		<th>Class</th>
	</tr>

<?php 
foreach($var as $v){
?>
<tr>
  <td><?= $v['name']; ?></td>
  <td><?= $v['class']; ?></td>
</tr>
<?php
}
?>
</table> 