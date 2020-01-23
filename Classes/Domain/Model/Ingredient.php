<?php
namespace Amaurel\CocktailAm\Domain\Model;

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
 * Ingredient
 */
class Ingredient extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Alcoholise
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $alcoholised = false;

    /**
     * allergenFree
     *
     * @var string
     * @validate NotEmpty
     */
    protected $allergenFree = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the alcoholised
     *
     * @return bool $alcoholised
     */
    public function getAlcoholised()
    {
        return $this->alcoholised;
    }

    /**
     * Sets the alcoholised
     *
     * @param bool $alcoholised
     * @return void
     */
    public function setAlcoholised($alcoholised)
    {
        $this->alcoholised = $alcoholised;
    }

    /**
     * Returns the boolean state of alcoholised
     *
     * @return bool
     */
    public function isAlcoholised()
    {
        return $this->alcoholised;
    }

    /**
     * Returns the allergenFree
     *
     * @return string $allergenFree
     */
    public function getAllergenFree()
    {
        return $this->allergenFree;
    }

    /**
     * Sets the allergenFree
     *
     * @param string $allergenFree
     * @return void
     */
    public function setAllergenFree($allergenFree)
    {
        $this->allergenFree = $allergenFree;
    }
}
