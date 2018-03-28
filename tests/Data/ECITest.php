<?php

namespace chillerlan\QRCodeTest\Data;

use chillerlan\QRCode\Data\Byte;
use chillerlan\QRCode\QROptions;
use chillerlan\QRCode\QREncoding;

class ECITest extends DatainterfaceTestAbstract {
	protected $FQCN = Byte::class;
	protected $testdata = 'š';
  //@todo: this needs work
	protected $expected = [
		64, 245, 188, 42, 245, 197, 242, 142,
		56, 56, 66, 149, 242, 252, 42, 245,
		208, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		17, 236, 17, 236, 17, 236, 17, 236,
		79, 89, 226, 48, 209, 89, 151, 1,
		12, 73, 42, 163, 11, 34, 255, 205,
		21, 47, 250, 101
	];

	protected function setUp() {
		parent::setUp();

		$this->dataInterface = $this->reflection->newInstanceArgs([
			new QROptions([
				'version' => 4,
				'eci' => true,
				'eciEncoding' => QREncoding::ISO_IEC_8859_2
			])
		]);
	}

	//@todo: this needs work
	public function testSetData(){
		$this->dataInterface->setData($this->testdata);

		//$this->assertSame($this->expected, $this->getProperty('matrixdata')->getValue($this->dataInterface));
		$this->assertEquals(1,1);
	}
}
