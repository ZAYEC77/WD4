<?php 
/**
 * 
 */
 class Model
 {
 	protected $params;
 	protected $records;
 	protected $filename = 'data.txt'; 
 	protected static $instanse = null;
 	
 	private function __construct()
 	{
 		$this->params = array();
 		$this->readFromFile();
 	}

 	public static function getInstance()
 	{
 		if (is_null(self::$instanse)) {
 			self::$instanse = new self;
 		}
 		return self::$instanse;
 	}

 	protected function readFromFile()
 	{
		$lines = file_get_contents($this->filename); 
		$this->records = array(); 
		foreach(explode('\n', $lines) as $line) { 
		    $this->records[] = unserialize($line);
		} 
 	}

 	public function save()
 	{
 		$list = array();
 		foreach ($this->records  as $value) {
 			$list[] = serialize($value);
 		}
 		$string = implode('\n', $list); 
		file_put_contents($this->filename, $string); 
 	}

 	public function findByPk($pk)
	{
		return $this->records[$pk];
	}

	public function addNew($record)
	{
		$this->records[] = $record;
		return $this;
	}

	public function findAll()
	{
		return $this->records;
	}

	public function removeByPk($pk) 
	{
		unset($this->records[$pk]);
		return $this;
	}

	public function findByCode($code)
	{
		$list = array();
		foreach ($this->records as $value) {
			if ($value->code == $code) {
				$list []= $value;
			}
		}
		return $list;
	}

 } ?>