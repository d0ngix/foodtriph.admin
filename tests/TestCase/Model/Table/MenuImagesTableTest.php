<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuImagesTable Test Case
 */
class MenuImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuImagesTable
     */
    public $MenuImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menu_images',
        'app.menus',
        'app.vendors',
        'app.menu_add_ons',
        'app.menu_categories',
        'app.transaction_messages',
        'app.transaction_promos',
        'app.transactions',
        'app.vendor_addresses',
        'app.menu_ratings',
        'app.transaction_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MenuImages') ? [] : ['className' => 'App\Model\Table\MenuImagesTable'];
        $this->MenuImages = TableRegistry::get('MenuImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenuImages);

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
