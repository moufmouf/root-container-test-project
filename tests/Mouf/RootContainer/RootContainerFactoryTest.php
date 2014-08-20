<?php
namespace Mouf\RootContainer;


/**
 * This class extends the Pimple class.
 * It adds compatibility with the container-interop APIs.
 * In particular, it adds the capability for Pimple to accept fallback DI containers.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class RootContainerFactoryTest extends \PHPUnit_Framework_TestCase {

	public function testGet() {
		$rootContainer = RootContainerFactory::get();
		$a = $rootContainer->get('a');
		$this->assertInstanceOf('stdClass', $a);
		$this->assertEquals("world", $a->b->c->hello);
	}	
}