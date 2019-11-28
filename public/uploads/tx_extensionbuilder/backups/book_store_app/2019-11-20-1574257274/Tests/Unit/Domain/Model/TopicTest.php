<?php
namespace SGPhule\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Sudarshan Phule <sudarshan.phule@hof-university.de>
 */
class TopicTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \SGPhule\BookStoreApp\Domain\Model\Topic
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \SGPhule\BookStoreApp\Domain\Model\Topic();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
