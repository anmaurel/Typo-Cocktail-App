<?php
namespace Amaurel\CocktailAm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class CocktailTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Domain\Model\Cocktail
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Amaurel\CocktailAm\Domain\Model\Cocktail();
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
    public function getAlcoholisedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAlcoholised()
        );
    }

    /**
     * @test
     */
    public function setAlcoholisedForBoolSetsAlcoholised()
    {
        $this->subject->setAlcoholised(true);

        self::assertAttributeEquals(
            true,
            'alcoholised',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
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
}
