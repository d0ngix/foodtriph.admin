<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuAddOnsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuAddOnsTable Test Case
 */
class MenuAddOnsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuAddOnsTable
     */
    public $MenuAddOns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menu_add_ons',
        'app.vendors',
        'app.menu_categories',
        'app.menus',
        'app.menu_images',
        'app.menu_ratings',
        'app.transaction_items',
        'app.transaction_promos',
        'app.transaction_messages',
        'app.transactions',
        'app.vendor_addresses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MenuAddOns') ? [] : ['className' => 'App\Model\Table\MenuAddOnsTable'];
        $this->MenuAddOns = TableRegistry::get('MenuAddOns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenuAddOns);

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
