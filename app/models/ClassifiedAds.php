<?php

class ClassifiedAd extends Eloquent
{
	protected $table = 'classified_ads';

	public function classified_ads()
	{
		return $this->belongsTo('classified_ads_images');
	}
	
	


}
