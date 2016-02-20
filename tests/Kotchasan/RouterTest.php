<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-02-19 at 08:21:29.
 */
class RouterTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Router
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Router;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{

	}

	/**
	 * Generated from @assert ('/index.php/css/view', array()) [==] array( 'type' => 'view', 'module' => 'css').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes()
	{

		$this->assertEquals(
		array('type' => 'view', 'module' => 'css'), $this->object->parseRoutes('/index.php/css/view', array())
		);
	}

	/**
	 * Generated from @assert ('/print.php/css/view/index', array()) [==] array( 'type' => 'view', 'page' => 'index', 'module' => 'css').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes2()
	{

		$this->assertEquals(
		array('type' => 'view', 'page' => 'index', 'module' => 'css'), $this->object->parseRoutes('/print.php/css/view/index', array())
		);
	}

	/**
	 * Generated from @assert ('/xhr.php/css/view/index/inint', array()) [==] array( 'type' => 'view', 'page' => 'index', 'module' => 'css', 'method' => 'inint').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes3()
	{

		$this->assertEquals(
		array('type' => 'view', 'page' => 'index', 'module' => 'css', 'method' => 'inint'), $this->object->parseRoutes('/xhr.php/css/view/index/inint', array())
		);
	}

	/**
	 * Generated from @assert ('/index/model/updateprofile.php', array()) [==] array( 'type' => 'model', 'page' => 'updateprofile', 'module' => 'index').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes4()
	{

		$this->assertEquals(
		array('type' => 'model', 'page' => 'updateprofile', 'module' => 'index'), $this->object->parseRoutes('/index/model/updateprofile.php', array())
		);
	}

	/**
	 * Generated from @assert ('/css/view/index.php', array()) [==] array('module' => 'css', 'type' => 'view', 'page' => 'index').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes5()
	{

		$this->assertEquals(
		array('module' => 'css', 'type' => 'view', 'page' => 'index'), $this->object->parseRoutes('/css/view/index.php', array())
		);
	}

	/**
	 * Generated from @assert ('/module/action/1/2', array()) [==] array('module' => 'module', 'action' => 'action', 'cat' => 1, 'id' => 2).
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes6()
	{

		$this->assertEquals(
		array('module' => 'module', 'action' => 'action', 'cat' => 1, 'id' => 2), $this->object->parseRoutes('/module/action/1/2', array())
		);
	}

	/**
	 * Generated from @assert ('/module/action/1/2.html', array()) [==] array('module' => 'module', 'action' => 'action', 'cat' => 1, 'id' => 2).
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes7()
	{

		$this->assertEquals(
		array('module' => 'module', 'action' => 'action', 'cat' => 1, 'id' => 2), $this->object->parseRoutes('/module/action/1/2.html', array())
		);
	}

	/**
	 * Generated from @assert ('/module/action/1.html', array()) [==] array('module' => 'module', 'action' => 'action', 'cat' => 1).
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes8()
	{

		$this->assertEquals(
		array('module' => 'module', 'action' => 'action', 'cat' => 1), $this->object->parseRoutes('/module/action/1.html', array())
		);
	}

	/**
	 * Generated from @assert ('/module/1/2.html', array()) [==] array('module' => 'module', 'cat' => 1, 'id' => 2).
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes9()
	{

		$this->assertEquals(
		array('module' => 'module', 'cat' => 1, 'id' => 2), $this->object->parseRoutes('/module/1/2.html', array())
		);
	}

	/**
	 * Generated from @assert ('/module/1.html', array()) [==] array('module' => 'module', 'cat' => 1).
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes10()
	{

		$this->assertEquals(
		array('module' => 'module', 'cat' => 1), $this->object->parseRoutes('/module/1.html', array())
		);
	}

	/**
	 * Generated from @assert ('/module/ทดสอบ.html', array()) [==] array('document' => 'ทดสอบ', 'module' => 'module').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes11()
	{

		$this->assertEquals(
		array('document' => 'ทดสอบ', 'module' => 'module'), $this->object->parseRoutes('/module/ทดสอบ.html', array())
		);
	}

	/**
	 * Generated from @assert ('/module.html', array()) [==] array('module' => 'module').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes12()
	{

		$this->assertEquals(
		array('module' => 'module'), $this->object->parseRoutes('/module.html', array())
		);
	}

	/**
	 * Generated from @assert ('/ทดสอบ.html', array()) [==] array('document' => 'ทดสอบ').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes13()
	{

		$this->assertEquals(
		array('document' => 'ทดสอบ'), $this->object->parseRoutes('/ทดสอบ.html', array())
		);
	}

	/**
	 * Generated from @assert ('/ทดสอบ.html', array('module' => 'test')) [==] array('document' => 'ทดสอบ', 'module' => 'test').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes14()
	{

		$this->assertEquals(
		array('document' => 'ทดสอบ', 'module' => 'test'), $this->object->parseRoutes('/ทดสอบ.html', array('module' => 'test'))
		);
	}

	/**
	 * Generated from @assert ('/index.php', array('action' => 'one')) [==] array('action' => 'one').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes15()
	{

		$this->assertEquals(
		array('action' => 'one'), $this->object->parseRoutes('/index.php', array('action' => 'one'))
		);
	}

	/**
	 * Generated from @assert ('/admin_index.php', array('action' => 'one')) [==] array('action' => 'one', 'module' => 'admin_index').
	 *
	 * @covers Kotchasan\Router::parseRoutes
	 */
	public function testParseRoutes16()
	{

		$this->assertEquals(
		array('action' => 'one', 'module' => 'admin_index'), $this->object->parseRoutes('/admin_index.php', array('action' => 'one'))
		);
	}

	/**
	 * @covers Kotchasan\Router::inint
	 * @todo   Implement testInint().
	 */
	public function testInint()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		'This test has not been implemented yet.'
		);
	}
}