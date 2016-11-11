<?php
namespace AngularBake\Test\TestCase\Shell\Task;

use AngularBake\Shell\Task\AngularBakeTask;
use Cake\TestSuite\TestCase;

/**
 * AngularBake\Shell\Task\AngularBakeTask Test Case
 */
class AngularBakeTaskTest extends TestCase
{

    /**
     * ConsoleIo mock
     *
     * @var \Cake\Console\ConsoleIo|\PHPUnit_Framework_MockObject_MockObject
     */
    public $io;

    /**
     * Test subject
     *
     * @var \AngularBake\Shell\Task\AngularBakeTask
     */
    public $AngularBake;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->io = $this->getMockBuilder('Cake\Console\ConsoleIo')->getMock();

        $this->AngularBake = $this->getMockBuilder('AngularBake\Shell\Task\AngularBakeTask')
            ->setConstructorArgs([$this->io])
            ->getMock();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AngularBake);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
