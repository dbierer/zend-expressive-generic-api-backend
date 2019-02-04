<?php
namespace CommonTest\Adapter\Factory;

use Common\Adapter\CommonAdapter;
use Common\Adapter\Factory\CommonAdapterFactory;
use PHPUnit\Framework\TestCase;

class CommonAdapterFactoryTest extends TestCase
{
    protected $container;
    public function setup()
    {
        global $container;      // ServiceManager container created by test bootstrap
        $this->container = $container;
    }
    public function testFactoryReturnsAdapterInstance()
    {
        $factory = new CommonAdapterFactory();
        $adapter = $factory->__invoke($this->container, CommonAdapter::class);
        $this->assertInstanceOf(CommonAdapter::class, $adapter);
    }
    public function testContainerHasAdapterKey()
    {
        $this->assertEquals(TRUE, $this->container->has(CommonAdapter::class));
    }
    public function testContainerHasDbConfigKey()
    {
        $this->assertEquals(TRUE, $this->container->has('db-config'));
    }
    public function testContainerReturnsAdapterConfig()
    {
        $this->assertEquals(TRUE, is_array($this->container->get('db-config')));
        $this->assertArrayHasKey('driver', $this->container->get('db-config'));
    }
    public function testContainerReturnsAdapterInstance()
    {
        $adapter = $this->container->get(CommonAdapter::class);
        $this->assertInstanceOf(CommonAdapter::class, $adapter);
    }
}
