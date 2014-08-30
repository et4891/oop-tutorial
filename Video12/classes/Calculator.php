<?php 

class Calculator {
	
	protected $result;
	protected $operation;

	// sets the $operation to Adder / Subtractor / Multiplier / Divider
	public function setOperation(OperatorInterface $operation)
	{
		$this->operation = $operation;
	}

	public function calculate()	//arguments entered here can be seen by using func_get_args()
	{
		// echo '<pre>' . print_r(func_get_args(), true) . '</pre>';  //Will see arguments of the array

		//turn the arguments to $numbers		
		foreach (func_get_args() as $number)
		{
			// $result in default is 0
			// $this->operation->run uses whatever opeartion was set and use the run method
			// then what is returned in run method is then stored in $result
			$this->result = $this->operation->run($number, $this->result);
		}
	}

	public function getResult()
	{
		return $this->result;
	}

}