//////pass to demo.html/////

In Controller=>public function demo(){
		$a['data']="tushar";
		$this->load->view('demo.html',$a);
	}

In View=>	<?php echo $data; ?>

///pass to demo.php///
In Controller=>public function demo(){
		$a['data']="tushar";
		$this->load->view('demo',$a);
	}


In View=>	<?php echo $data; ?>