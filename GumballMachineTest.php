<?php

require 'GumballMachine.php';

use PHPUnit\Framework\TestCase;

//class GumballMachineTest extends PHPUnit_Framework_TestCase{
class GumballMachineTest extends TestCase{

	public $gumballMachineInstamce;

	public function setUp(){
  	$this->gumballMachineInstamce = new GumballMachine();
	}

	public function testIfWhellWorks(){
    $this->gumballMachineInstamce->setGumballs(100);

    $this->gumballMachineInstamce->turnWhell();

    $this->assertEquals(99, $this->gumballMachineInstamce->getGumballs());
	}

}