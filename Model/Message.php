<?php

class Message extends AppModel {
	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
	  'word'=>array('type' => 'query','method'=>'orConditions'),

		//'body'=>array('type'=>'like'),
	);


	public function orConditions($data, $field){
		$filter=$data['word'];
		$cond=array(
			'OR'=>array(
				$this->alias.'.name like'=>'%'.$filter.'%',
				$this->alias.'.body like'=>'%'.$filter.'%',
			));
		return $cond;
	}

	public $validate = array (
		'title'=>array(
			'rule'=>'notEmpty',
			'message'=>'空じゃダメ'
			),
		'body'=>array(
			'rule'=>'notEmpty'
			)
		);

}
