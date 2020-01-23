<?php
namespace Amaurel\CocktailAm\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Antoine Maurel <antoinemaurel6@gmail.com>
 */
class RecipeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Amaurel\CocktailAm\Controller\RecipeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Amaurel\CocktailAm\Controller\RecipeController::class)
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
    public function listActionFetchesAllRecipesFromRepositoryAndAssignsThemToView()
    {

        $allRecipes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $recipeRepository = $this->getMockBuilder(\Amaurel\CocktailAm\Domain\Repository\RecipeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $recipeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRecipes));
        $this->inject($this->subject, 'recipeRepository', $recipeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('recipes', $allRecipes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenRecipeToView()
    {
        $recipe = new \Amaurel\CocktailAm\Domain\Model\Recipe();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('recipe', $recipe);

        $this->subject->showAction($recipe);
    }
}
