<?php 

// Countable and JsonSerializable is a php interface *I didn't add JsonSerializable in this tutorial*
// user , to add another interface example Countable, JsonSerializable
// add implements Countable and count method so we can count the items inside json
// add Countable without count method will get an error telling you to create a count method
class Collection implements Countable {

	protected $items = [];

	/*
	*** adds value into the array key for array is set by default
 	 */
	public function add($value)
	{
		$this->items[] = $value;
	}

	/*
	*** sets the key and value by ourselves
	 */
	public function set($key, $value)
	{
		$this->items[$key] = $value;
	}

	/*
	***Json Serialize the items array
	 */
	public function toJson()
	{
		return json_encode($this->items);
	}

	/*
	***counts the items array
	 */
	public function count()
	{
		return count($this->items);
	}

	/*
	***returns the items array
	 */
	public function all()
	{
		return $this->items;
	}
}

 ?>