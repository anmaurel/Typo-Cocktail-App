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
 * Tag
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Titre
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
