<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReadsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReadsTable Test Case
 */
class ReadsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReadsTable
     */
    public $Reads;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.reads',
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
        $config = TableRegistry::exists('Reads') ? [] : ['className' => 'App\Model\Table\ReadsTable'];
        $this->Reads = TableRegistry::get('Reads', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Reads);

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
