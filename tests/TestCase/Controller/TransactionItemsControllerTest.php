<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TransactionItemsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TransactionItemsController Test Case
 */
class TransactionItemsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
