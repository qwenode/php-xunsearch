<?php
require_once dirname(__FILE__) . '/../../lib/XSTokenizer.class.php';
require_once dirname(__FILE__) . '/../../lib/XSDocument.class.php';

/**
 * Test class for XSTokenizerFull.
 * Generated by PHPUnit on 2011-09-14 at 16:32:59.
 */
class XSTokenizerFullTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var XSTokenizerFull
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
		$this->object = new XSTokenizerFull;
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

	public function provider()
	{
		return array(
			array(
				array('hello'),
				'hello'
			),
			array(
				array('hello world'),
				'hello world'
			),
			array(
				array('测试一下'),
				'测试一下'
			),
			array(
				array('测试|一下'),
				'测试|一下'
			)
		);
	}
}
