<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MstBooksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MstBooksTable Test Case
 */
class MstBooksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MstBooksTable
     */
    public $MstBooks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mst_books'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MstBooks') ? [] : ['className' => 'App\Model\Table\MstBooksTable'];
        $this->MstBooks = TableRegistry::get('MstBooks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MstBooks);

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
