<?php
require_once dirname(__FILE__) . '/../../lib/XSTokenizer.class.php';
require_once dirname(__FILE__) . '/../../lib/XSDocument.class.php';

/**
 * Test class for XSTokenizerXstep.
 * Generated by PHPUnit on 2011-09-14 at 16:32:59.
 */
class XSTokenizerXstepTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var XSTokenizerXstep
	 */
	protected $object;

	/** 	 
	 * @var XSDocument
	 */
	protected $doc;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp(): void
	{
		$this->object = new XSTokenizerXstep;
		$this->doc = new XSDocument;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown(): void
	{
		$this->doc = null;
	}

	/**
	 * @dataProvider provider
	 */
	public function testGetTokens($res, $str)
	{
		$this->assertEquals($res, $this->object->getTokens($str, $this->doc));
	}

	/**
	 * @dataProvider provider2
	 */
	public function testGetTokens2($res, $str)
	{
		$this->object = new XSTokenizerXstep('6');
		$this->assertEquals($res, $this->object->getTokens($str, $this->doc));
	}

	public function provider()
	{
		return array(
			array(
				array('he', 'hell', 'hello'),
				'hello'
			),
			array(
				array('he', 'hell', 'hello ', 'hello wo', 'hello worl', 'hello world'),
				'hello world'
			),
		);
	}

	public function provider2()
	{
		return array(
			array(
				array('hello'),
				'hello'
			),
			array(
				array('hello ', 'hello world'),
				'hello world'
			),
			array(
				array('测试', '测试一下'),
				'测试一下'
			)
		);
	}
}
