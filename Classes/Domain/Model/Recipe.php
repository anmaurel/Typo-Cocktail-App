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
 * Recette
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Photos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $photos = null;

    /**
     * Nombre de personnes
     *
     * @var int
     * @validate NotEmpty
     */
    protected $nbPersonnes = 0;

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $descriptiom = '';

    /**
     * Difficulte
     *
     * @var int
     * @validate NotEmpty
     */
    protected $difficulty = 0;

    /**
     * prepTIme
     *
     * @var string
     * @validate NotEmpty
     */
    protected $prepTIme = '';

    /**
     * Tag
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

    /**
     * Steps
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Step>
     * @cascade remove
     * @lazy
     */
    protected $steps = null;

    /**
     * Notes
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * Cocktail
     *
     * @var \Amaurel\CocktailAm\Domain\Model\Cocktail
     */
    protected $cocktail = null;

    /**
     * Ustensiles
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Ustensil>
     * @lazy
     */
    protected $ustensils = null;

    /**
     * Quantite
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Quantity>
     * @cascade remove
     * @lazy
     */
    protected $quantity = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->steps = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->ustensils = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->quantity = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function addPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photos->attach($photo);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove The FileReference to be removed
     * @return void
     */
    public function removePhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photoToRemove)
    {
        $this->photos->detach($photoToRemove);
    }

    /**
     * Returns the photos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Sets the photos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $photos
     * @return void
     */
    public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos)
    {
        $this->photos = $photos;
    }

    /**
     * Returns the nbPersonnes
     *
     * @return int $nbPersonnes
     */
    public function getNbPersonnes()
    {
        return $this->nbPersonnes;
    }

    /**
     * Sets the nbPersonnes
     *
     * @param int $nbPersonnes
     * @return void
     */
    public function setNbPersonnes($nbPersonnes)
    {
        $this->nbPersonnes = $nbPersonnes;
    }

    /**
     * Returns the descriptiom
     *
     * @return string $descriptiom
     */
    public function getDescriptiom()
    {
        return $this->descriptiom;
    }

    /**
     * Sets the descriptiom
     *
     * @param string $descriptiom
     * @return void
     */
    public function setDescriptiom($descriptiom)
    {
        $this->descriptiom = $descriptiom;
    }

    /**
     * Returns the difficulty
     *
     * @return int $difficulty
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Sets the difficulty
     *
     * @param int $difficulty
     * @return void
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * Returns the prepTIme
     *
     * @return string $prepTIme
     */
    public function getPrepTIme()
    {
        return $this->prepTIme;
    }

    /**
     * Sets the prepTIme
     *
     * @param string $prepTIme
     * @return void
     */
    public function setPrepTIme($prepTIme)
    {
        $this->prepTIme = $prepTIme;
    }

    /**
     * Adds a Tag
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Amaurel\CocktailAm\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Amaurel\CocktailAm\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Step
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Step $step
     * @return void
     */
    public function addStep(\Amaurel\CocktailAm\Domain\Model\Step $step)
    {
        $this->steps->attach($step);
    }

    /**
     * Removes a Step
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Step $stepToRemove The Step to be removed
     * @return void
     */
    public function removeStep(\Amaurel\CocktailAm\Domain\Model\Step $stepToRemove)
    {
        $this->steps->detach($stepToRemove);
    }

    /**
     * Returns the steps
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Step> $steps
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Sets the steps
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Step> $steps
     * @return void
     */
    public function setSteps(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $steps)
    {
        $this->steps = $steps;
    }

    /**
     * Adds a Review
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\Amaurel\CocktailAm\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\Amaurel\CocktailAm\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Returns the cocktail
     *
     * @return \Amaurel\CocktailAm\Domain\Model\Cocktail $cocktail
     */
    public function getCocktail()
    {
        return $this->cocktail;
    }

    /**
     * Sets the cocktail
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Cocktail $cocktail
     * @return void
     */
    public function setCocktail(\Amaurel\CocktailAm\Domain\Model\Cocktail $cocktail)
    {
        $this->cocktail = $cocktail;
    }

    /**
     * Adds a Ustensil
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Ustensil $ustensil
     * @return void
     */
    public function addUstensil(\Amaurel\CocktailAm\Domain\Model\Ustensil $ustensil)
    {
        $this->ustensils->attach($ustensil);
    }

    /**
     * Removes a Ustensil
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Ustensil $ustensilToRemove The Ustensil to be removed
     * @return void
     */
    public function removeUstensil(\Amaurel\CocktailAm\Domain\Model\Ustensil $ustensilToRemove)
    {
        $this->ustensils->detach($ustensilToRemove);
    }

    /**
     * Returns the ustensils
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Ustensil> $ustensils
     */
    public function getUstensils()
    {
        return $this->ustensils;
    }

    /**
     * Sets the ustensils
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Ustensil> $ustensils
     * @return void
     */
    public function setUstensils(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ustensils)
    {
        $this->ustensils = $ustensils;
    }

    /**
     * Adds a Quantity
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Quantity $quantity
     * @return void
     */
    public function addQuantity(\Amaurel\CocktailAm\Domain\Model\Quantity $quantity)
    {
        $this->quantity->attach($quantity);
    }

    /**
     * Removes a Quantity
     *
     * @param \Amaurel\CocktailAm\Domain\Model\Quantity $quantityToRemove The Quantity to be removed
     * @return void
     */
    public function removeQuantity(\Amaurel\CocktailAm\Domain\Model\Quantity $quantityToRemove)
    {
        $this->quantity->detach($quantityToRemove);
    }

    /**
     * Returns the quantity
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Quantity> $quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets the quantity
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Amaurel\CocktailAm\Domain\Model\Quantity> $quantity
     * @return void
     */
    public function setQuantity(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $quantity)
    {
        $this->quantity = $quantity;
    }
}
