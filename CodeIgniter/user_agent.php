1)first thing we need to load user_agent library in our codeigniter


example=>###########In Controller#############
public function __construct(){
     parent::__construct();
     $this->load->library('user_agent');
     }

	public function demo(){
        $data['browser']=$this->agent->browser();
        $data['version']=$this->agent->version();
        $data['operating_system']=$this->agent->platform();
        $data['language']=$this->agent->accept_lang();
        $data['ip']=$this->input->ip_address();
		$this->load->view('demo',$data);
	}
	##########In View###########
<?= $browser; ?><br/>
<?= $version; ?><br/>
<?= $operating_system; ?><br/>
<?= $language; ?><br>
<?= $ip; ?>