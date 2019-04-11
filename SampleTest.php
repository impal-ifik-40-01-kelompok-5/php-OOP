<?php
	class SampleTest extends \PHPUnit_Framwork_TestCase
	{
		public function testThatCanGetNamaBarang()
		{
			$user=new Model_satu;
			
			$this->assertEquals($user->getAllBarang());
		}
	}
?>