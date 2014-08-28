<?php 

// public
// protected   --inhertited classes can access and use it in its class BUT can not access it directly
// private     --only THIS class can use/access the properties

class Bird {

	protected $canFly;
	protected $legCount;

	public function __construct($canFly, $legCount) {

		$this->canFly = $canFly;
		$this->legCount = $legCount;

	}

	public function canFly()
	{
		return $this->canFly;
	}

	public function getLegCount()
	{
		return $this->legCount . ' legs';
	}
}
 ?>