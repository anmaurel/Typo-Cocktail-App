<?php
namespace Amaurel\CocktailAm\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class QuantityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Domain\Model\Quantity
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Amaurel\CocktailAm\Domain\Model\Quantity();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getValue()
        );
    }

    /**
     * @test
     */
    public function setValueForFloatSetsValue()
    {
        $this->subject->setValue(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'value',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getUnitReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUnit()
        );
    }

    /**
     * @test
     */
    public function setUnitForIntSetsUnit()
    {
        $this->subject->setUnit(12);

        self::assertAttributeEquals(
            12,
            'unit',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIngredientReturnsInitialValueForIngredient()
    {
        self::assertEquals(
            null,
            $this->subject->getIngredient()
        );
    }

    /**
     * @test
     */
    public function setIngredientForIngredientSetsIngredient()
    {
        $ingredientFixture = new \Amaurel\CocktailAm\Domain\Model\Ingredient();
        $this->subject->setIngredient($ingredientFixture);

        self::assertAttributeEquals(
            $ingredientFixture,
            'ingredient',
            $this->subject
        );
    }
}
