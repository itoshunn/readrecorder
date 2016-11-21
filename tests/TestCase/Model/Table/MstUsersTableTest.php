<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MstUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MstUsersTable Test Case
 */
class MstUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MstUsersTable
     */
    public $MstUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mst_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MstUsers') ? [] : ['className' => 'App\Model\Table\MstUsersTable'];
        $this->MstUsers = TableRegistry::get('MstUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MstUsers);

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
}
