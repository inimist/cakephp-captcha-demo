<?php
namespace CaptchaDemo\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use CaptchaDemo\Model\Table\DemoTable;

/**
 * CaptchaDemo\Model\Table\DemoTable Test Case
 */
class DemoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CaptchaDemo\Model\Table\DemoTable
     */
    public $Demo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.CaptchaDemo.Demo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Demo') ? [] : ['className' => DemoTable::class];
        $this->Demo = TableRegistry::getTableLocator()->get('Demo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Demo);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
