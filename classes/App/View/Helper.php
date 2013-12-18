<?php
namespace App\View;
class Helper extends \PHPixie\View\Helper {
	protected $aliases = array(
	'_' => 'output',
	'_u' => 'url'
	);
	
	public function url($url) {
		echo $this->pixie->basepath.$url;
	}
	
}