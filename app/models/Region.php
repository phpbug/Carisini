<?php

class Region extends Eloquent
{
	protected $table = 'regions';

	public function province()
	{
		return $this->hasMany('Province');
	}
	
}
