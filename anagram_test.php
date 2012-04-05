<?php 
require("anagram.php");

Class AnagramTest extends PHPUnit_Framework_TestCase
{

	public function testCeu()
	{
		$obj = new Anagram("ceu");
		$resultado = $obj->exec();
		$expected = array('ceu', 'cue', 'ecu', 'euc', 'uce', 'uec');

		$this->assertEquals($expected, $resultado);
	}

	public function testMal()
	{
		$obj = new Anagram("mal");
		$resultado = $obj->exec();
		$expected = array('mal', 'mla', 'aml', 'alm', 'lma', 'lam');

		$this->assertEquals($expected, $resultado);
	}

	public function testAna()
	{
		$obj = new Anagram("ana");
		$resultado = $obj->exec();
		$expected = array('ana', 'aan', 'naa');

		$this->assertEquals($expected, $resultado);
	}

	public function testEle()
	{
		$obj = new Anagram("ele");
		$resultado = $obj->exec();
		$expected = array('ele', 'eel', 'lee');

		$this->assertEquals($expected, $resultado);
	}

	public function testDojo()
	{
		$obj = new Anagram("dojo");
		$resultado = $obj->exec();
		$expected = false;
		
		$this->assertEquals($expected, $resultado);
	}
}
	
