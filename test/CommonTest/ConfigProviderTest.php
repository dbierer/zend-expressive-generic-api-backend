<?php
namespace CommonTest\Adapter\Factory;

use Common\ConfigProvider;
use Common\Adapter\CommonAdapter;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    protected $provider;
    public function setup()
    {
        $this->provider = new ConfigProvider();
    }
    public function testProviderReturnsDependencies()
    {
        $config = $this->provider->__invoke();
        $this->assertEquals(TRUE, is_array($config));
        $this->assertArrayHasKey('dependencies', $config);
        $this->assertArrayHasKey('factories', $config['dependencies']);
        $this->assertArrayHasKey(CommonAdapter::class, $config['dependencies']['factories']);
    }
}
