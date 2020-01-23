<?php
namespace Amaurel\CocktailAm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Amaurel\CocktailAm\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMarkReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMark()
        );
    }

    /**
     * @test
     */
    public function setMarkForIntSetsMark()
    {
        $this->subject->setMark(12);

        self::assertAttributeEquals(
            12,
            'mark',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }
}
