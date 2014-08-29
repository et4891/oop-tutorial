<?php 

// Countable and JsonSerializable is a php interface *I didn't add JsonSerializable in this tutorial*
// add implements Countable and count method so we can count the items inside json
// add Countable without count method will get an error telling you to create a count method
class Collection implements Countable{

	protected $items = [];

	public function add($value)
	{
		$this->items[] = $value;
	}

	public function set($key, $value)
	{
		$this->items[$key] = $value;
	}

	public function toJson()
	{
		return json_encode($this->items);
	}

	public function count()
	{
		return count($this->items);
	}
}

 ?>