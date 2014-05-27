<?php

class SubCategory extends Eloquent
{
	protected $table = 'sub_categories';

	public function sub_categories()
	{
		return $this->hasMany('SubCategory');
	}
	

}
