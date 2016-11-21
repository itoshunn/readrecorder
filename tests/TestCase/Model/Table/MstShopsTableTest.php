<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MstShopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MstShopsTable Test Case
 */
class MstShopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MstShopsTable
     */
    public $MstShops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mst_shops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MstShops') ? [] : ['className' => 'App\Model\Table\MstShopsTable'];
        $this->MstShops = TableRegistry::get('MstShops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MstShops);

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
