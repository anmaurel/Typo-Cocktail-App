<?php
namespace Amaurel\CocktailAm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class RecipeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Domain\Model\Recipe
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Amaurel\CocktailAm\Domain\Model\Recipe();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhotosReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPhotos()
        );
    }

    /**
     * @test
     */
    public function setPhotosForFileReferenceSetsPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOnePhotos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePhotos->attach($photo);
        $this->subject->setPhotos($objectStorageHoldingExactlyOnePhotos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePhotos,
            'photos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPhotoToObjectStorageHoldingPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->addPhoto($photo);
    }

    /**
     * @test
     */
    public function removePhotoFromObjectStorageHoldingPhotos()
    {
        $photo = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->removePhoto($photo);
    }

    /**
     * @test
     */
    public function getNbPersonnesReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getNbPersonnes()
        );
    }

    /**
     * @test
     */
    public function setNbPersonnesForIntSetsNbPersonnes()
    {
        $this->subject->setNbPersonnes(12);

        self::assertAttributeEquals(
            12,
            'nbPersonnes',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptiomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescriptiom()
        );
    }

    /**
     * @test
     */
    public function setDescriptiomForStringSetsDescriptiom()
    {
        $this->subject->setDescriptiom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'descriptiom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDifficultyReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getDifficulty()
        );
    }

    /**
     * @test
     */
    public function setDifficultyForIntSetsDifficulty()
    {
        $this->subject->setDifficulty(12);

        self::assertAttributeEquals(
            12,
            'difficulty',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPrepTImeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrepTIme()
        );
    }

    /**
     * @test
     */
    public function setPrepTImeForStringSetsPrepTIme()
    {
        $this->subject->setPrepTIme('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'prepTIme',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTag()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagSetsTags()
    {
        $tag = new \Amaurel\CocktailAm\Domain\Model\Tag();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \Amaurel\CocktailAm\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \Amaurel\CocktailAm\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }

    /**
     * @test
     */
    public function getStepsReturnsInitialValueForStep()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSteps()
        );
    }

    /**
     * @test
     */
    public function setStepsForObjectStorageContainingStepSetsSteps()
    {
        $step = new \Amaurel\CocktailAm\Domain\Model\Step();
        $objectStorageHoldingExactlyOneSteps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSteps->attach($step);
        $this->subject->setSteps($objectStorageHoldingExactlyOneSteps);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSteps,
            'steps',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addStepToObjectStorageHoldingSteps()
    {
        $step = new \Amaurel\CocktailAm\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($step));
        $this->inject($this->subject, 'steps', $stepsObjectStorageMock);

        $this->subject->addStep($step);
    }

    /**
     * @test
     */
    public function removeStepFromObjectStorageHoldingSteps()
    {
        $step = new \Amaurel\CocktailAm\Domain\Model\Step();
        $stepsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $stepsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($step));
        $this->inject($this->subject, 'steps', $stepsObjectStorageMock);

        $this->subject->removeStep($step);
    }

    /**
     * @test
     */
    public function getReviewsReturnsInitialValueForReview()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReviews()
        );
    }

    /**
     * @test
     */
    public function setReviewsForObjectStorageContainingReviewSetsReviews()
    {
        $review = new \Amaurel\CocktailAm\Domain\Model\Review();
        $objectStorageHoldingExactlyOneReviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReviews->attach($review);
        $this->subject->setReviews($objectStorageHoldingExactlyOneReviews);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneReviews,
            'reviews',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addReviewToObjectStorageHoldingReviews()
    {
        $review = new \Amaurel\CocktailAm\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->addReview($review);
    }

    /**
     * @test
     */
    public function removeReviewFromObjectStorageHoldingReviews()
    {
        $review = new \Amaurel\CocktailAm\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->removeReview($review);
    }

    /**
     * @test
     */
    public function getCocktailReturnsInitialValueForCocktail()
    {
        self::assertEquals(
            null,
            $this->subject->getCocktail()
        );
    }

    /**
     * @test
     */
    public function setCocktailForCocktailSetsCocktail()
    {
        $cocktailFixture = new \Amaurel\CocktailAm\Domain\Model\Cocktail();
        $this->subject->setCocktail($cocktailFixture);

        self::assertAttributeEquals(
            $cocktailFixture,
            'cocktail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUstensilsReturnsInitialValueForUstensil()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUstensils()
        );
    }

    /**
     * @test
     */
    public function setUstensilsForObjectStorageContainingUstensilSetsUstensils()
    {
        $ustensil = new \Amaurel\CocktailAm\Domain\Model\Ustensil();
        $objectStorageHoldingExactlyOneUstensils = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUstensils->attach($ustensil);
        $this->subject->setUstensils($objectStorageHoldingExactlyOneUstensils);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUstensils,
            'ustensils',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addUstensilToObjectStorageHoldingUstensils()
    {
        $ustensil = new \Amaurel\CocktailAm\Domain\Model\Ustensil();
        $ustensilsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($ustensil));
        $this->inject($this->subject, 'ustensils', $ustensilsObjectStorageMock);

        $this->subject->addUstensil($ustensil);
    }

    /**
     * @test
     */
    public function removeUstensilFromObjectStorageHoldingUstensils()
    {
        $ustensil = new \Amaurel\CocktailAm\Domain\Model\Ustensil();
        $ustensilsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ustensilsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($ustensil));
        $this->inject($this->subject, 'ustensils', $ustensilsObjectStorageMock);

        $this->subject->removeUstensil($ustensil);
    }

    /**
     * @test
     */
    public function getQuantityReturnsInitialValueForQuantity()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getQuantity()
        );
    }

    /**
     * @test
     */
    public function setQuantityForObjectStorageContainingQuantitySetsQuantity()
    {
        $quantity = new \Amaurel\CocktailAm\Domain\Model\Quantity();
        $objectStorageHoldingExactlyOneQuantity = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneQuantity->attach($quantity);
        $this->subject->setQuantity($objectStorageHoldingExactlyOneQuantity);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneQuantity,
            'quantity',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addQuantityToObjectStorageHoldingQuantity()
    {
        $quantity = new \Amaurel\CocktailAm\Domain\Model\Quantity();
        $quantityObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quantityObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($quantity));
        $this->inject($this->subject, 'quantity', $quantityObjectStorageMock);

        $this->subject->addQuantity($quantity);
    }

    /**
     * @test
     */
    public function removeQuantityFromObjectStorageHoldingQuantity()
    {
        $quantity = new \Amaurel\CocktailAm\Domain\Model\Quantity();
        $quantityObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $quantityObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($quantity));
        $this->inject($this->subject, 'quantity', $quantityObjectStorageMock);

        $this->subject->removeQuantity($quantity);
    }
}
