<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionItemsTable Test Case
 */
class TransactionItemsTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\TransactionItemsTable     */
    public $TransactionItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transaction_items',
        'app.transactions',
        'app.vendors',
        'app.menu_add_ons',
        'app.menu_categories',
        'app.menus',
        'app.menu_images',
        'app.menu_ratings',
        'app.transaction_promos',
        'app.transaction_messages',
        'app.vendor_addresses',
        'app.users',
        'app.addresses',
        'app.delivery_men'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TransactionItems') ? [] : ['className' => 'App\Model\Table\TransactionItemsTable'];        $this->TransactionItems = TableRegistry::get('TransactionItems', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransactionItems);

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
