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
 * Review
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $mark = 0;

    /**
     * Commentaire
     *
     * @var string
     */
    protected $comment = '';

    /**
     * Returns the mark
     *
     * @return int $mark
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets the mark
     *
     * @param int $mark
     * @return void
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}
