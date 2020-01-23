<?php
namespace Amaurel\CocktailAm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class IngredientTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Domain\Model\Ingredient
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Amaurel\CocktailAm\Domain\Model\Ingredient();
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
    public function getAllergenFreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAllergenFree()
        );
    }

    /**
     * @test
     */
    public function setAllergenFreeForStringSetsAllergenFree()
    {
        $this->subject->setAllergenFree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'allergenFree',
            $this->subject
        );
    }
}
