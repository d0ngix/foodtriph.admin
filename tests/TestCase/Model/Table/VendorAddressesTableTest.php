<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendorAddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendorAddressesTable Test Case
 */
class VendorAddressesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VendorAddressesTable
     */
    public $VendorAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vendor_addresses',
        'app.vendors',
        'app.menu_add_ons',
        'app.menu_categories',
        'app.menus',
        'app.menu_images',
        'app.menu_ratings',
        'app.transaction_items',
        'app.transaction_promos',
        'app.transaction_messages',
        'app.transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VendorAddresses') ? [] : ['className' => 'App\Model\Table\VendorAddressesTable'];
        $this->VendorAddresses = TableRegistry::get('VendorAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VendorAddresses);

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
