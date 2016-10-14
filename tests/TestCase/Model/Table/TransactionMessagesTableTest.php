<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransactionMessagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransactionMessagesTable Test Case
 */
class TransactionMessagesTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\TransactionMessagesTable     */
    public $TransactionMessages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transaction_messages',
        'app.transactions',
        'app.vendors',
        'app.menu_add_ons',
        'app.menu_categories',
        'app.menus',
        'app.menu_images',
        'app.menu_ratings',
        'app.transaction_items',
        'app.transaction_promos',
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
        $config = TableRegistry::exists('TransactionMessages') ? [] : ['className' => 'App\Model\Table\TransactionMessagesTable'];        $this->TransactionMessages = TableRegistry::get('TransactionMessages', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransactionMessages);

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
