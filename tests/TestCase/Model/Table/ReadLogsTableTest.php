<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReadLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReadLogsTable Test Case
 */
class ReadLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReadLogsTable
     */
    public $ReadLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.read_logs',
        'app.books',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReadLogs') ? [] : ['className' => 'App\Model\Table\ReadLogsTable'];
        $this->ReadLogs = TableRegistry::get('ReadLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReadLogs);

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
