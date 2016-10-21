<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendorUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendorUsersTable Test Case
 */
class VendorUsersTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\VendorUsersTable     */
    public $VendorUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vendor_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VendorUsers') ? [] : ['className' => 'App\Model\Table\VendorUsersTable'];        $this->VendorUsers = TableRegistry::get('VendorUsers', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VendorUsers);

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
