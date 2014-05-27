<?php

class MainCategory extends Eloquent
{
	protected $table = 'main_categories';

	public function main_categories()
	{
		return $this->belongsTo('SubCategory');
	}
	

}
