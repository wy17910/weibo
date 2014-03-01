<?php 
class Common extends Front_Controller{
	public function __construct(){
		parent::__construct();
		$this->uid=$this->session->userdata('uid');
	}
	/**
	 * 获取用户消息提醒队列
	 * @return [type] [description]
	 */
	public function get_msg(){
		if(!$this->input->is_ajax_request()){
			show_404();
		}
		$this->load->driver('cache', array('adapter' => 'file'));
		$arr=array('status'=>1);
		$msg=array();
		if($data=$this->cache->get('usermsg_'.$this->uid)){
			if($data['comment']){
				$msg+=array('1'=>$data['comment']);
			}
			if($data['letter']){
				$msg+=array('2'=>$data['letter']);
			}
			if($data['at']){
				$msg+=array('3'=>$data['at']);
			}
		}
		if(count($msg)) $arr['data']=$msg;
		die(json_encode($arr));
	}
}