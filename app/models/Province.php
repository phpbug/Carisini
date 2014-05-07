<?php

class Province extends Eloquent
{
	protected $table = 'provinces';

	public function region()
	{
		return $this->belongsTo('Region');
	}
	

}
