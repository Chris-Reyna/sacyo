<?php

class Post extends BaseModel{
	//The db table this model relates to
	protected $table = 'posts';
	//Validation rules for our properties
	static public $rules =[
		'title' => 'required | max:100',
		'body' => 'required'
	];

	public function user()
	{							//model name
	    return $this->belongsTo('User');
	}
}