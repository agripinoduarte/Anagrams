<?php
class Anagram
{
	public $words = array();
	public $letters = array();
	public $used = array();
	public $maxWord = 3;

	public function __construct($word)
	{
		for($i = 0; $i < strlen($word); $i++)
		{
			$this->letters[] = $word[$i];
		}
	}

	public function exec()
	{
		if(count($this->letters) > $this->maxWord)
			return false;
		
		foreach($this->letters as $k => $l)
		{
			$this->used[$k] = 1;
			$this->deep($l, 0);
			unset($this->used[$k]);
		}

		return $this->words;
	}

	public function deep($word, $pos)
	{
		if($pos >= $this->maxWord-1)
		{
			if(!in_array($word, $this->words))
			{
				$this->words[] = $word;
			}

			return;
		}

		for($n = 0; $n < $this->maxWord; $n++)
		{
			if(!isset($this->used[$n]))
			{
				$this->used[$n] = 1;
				$this->deep($word . $this->letters[$n], $pos+1);
				unset($this->used[$n]);
			}
		}
	}
}





