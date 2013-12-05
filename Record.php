<?php 
/**
* 
*/
class Record
{
	public $code;
	public $name;
	public $price;
	public $amount;
	public $weight;

	public function setAttributes($array=array())
	{
		foreach ($array as $key => $value) {
			$this->$key = $value;
		}
	}
	public function isValid()
	{
		foreach (get_object_vars($this) as $key => $value) {
			if (empty($this->$key)) return false;
		}
		return true;
	}
}
 ?>