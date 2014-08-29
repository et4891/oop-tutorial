<?php 

class Collection implements Countable, JsonSerializable {

	protected $items = [];

	// __set()
	// __get()
	// __call()
	// __toString()
	
	/*
	***faster way to create the key and value --> $c->baz = 'qux';
	 */
	public function __set($key, $value)
	{
		$this->set($key, $value);
	}

	/*
	***faster way to get the value by inputting the key
	 */
	public function __get($value)
	{
		return $this->get($value);
	}

	/*
	***this function is called when the method does not exist
	 */
	// example echo $c->foo();  foo will then equal to $func
	// $args is an array
	public function __call($func, $args)
	{
		echo $func . ' has been called with arguments: ' . implode(', ', $args);
	}

	/*
	***Converts the object to a string
	 */
	public function __toString()
	{
		return $this->jsonSerialize();
	}

	/*
	*** adds value into the array key for array is set by default
 	 */
	public function add($value)
	{
		$this->items[] = $value;
	}

	public function get($key)
	{
		// if key exists get the value of the key or else null
		return array_key_exists($key, $this->items) ? $this->items[$key] : null;
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
	public function jsonSerialize()
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