<?php
namespace Amaurel\CocktailAm\Controller;

/***
 *
 * This file is part of the "cocktail am" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Antoine Maurel <antoinemaurel6@gmail.com>
 *
 ***/

/**
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * recipeRepository
     *
     * @var \Amaurel\CocktailAm\Domain\Repository\RecipeRepository
     * @inject
     */
    protected $recipeRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $recipes = $this->recipeRepository->findAll();
        $this->view->assign('recipes', $recipes);
    }

    /**
     * action show
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Recipe $recipe
     * @return void
     */
    public function showAction(\Amaurel\CocktailAm\Domain\Model\Recipe $recipe)
    {
        $this->view->assign('recipe', $recipe);
    }

    /**
     * action highlight
     *
     * @return void
     */
    public function highlightAction()
    {

    }

    /**
     * action random
     *
     * @return void
     */
    public function randomAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
