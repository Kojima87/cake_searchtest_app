<?php

class MessagesController extends AppController {
	// public $scaffold;

	public $helpers = array('Html','Form');
	public $components = array('Search.Prg');

	public $presetVars = true;
	public $paginate = array();

	public function index(){
		$this->paginate=array(
			'limit'=>3,
			);
		$this->Prg->commonProcess();
		$this->paginate['conditions']=$this->Message->parseCriteria($this->passedArgs);
//debug($this->paginate);
		$messages=$this->paginate();
		$this->set(compact('messages'));
	}

}
