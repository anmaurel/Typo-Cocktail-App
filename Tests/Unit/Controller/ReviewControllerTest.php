<?php
namespace Amaurel\CocktailAm\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class ReviewControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Controller\ReviewController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Amaurel\CocktailAm\Controller\ReviewController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenReviewToReviewRepository()
    {
        $review = new \Amaurel\CocktailAm\Domain\Model\Review();

        $reviewRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewRepository->expects(self::once())->method('add')->with($review);
        $this->inject($this->subject, 'reviewRepository', $reviewRepository);

        $this->subject->createAction($review);
    }
}
