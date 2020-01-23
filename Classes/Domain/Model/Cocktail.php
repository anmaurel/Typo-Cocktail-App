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
 * Cocktail
 */
class Cocktail extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Alcoolise
     *
     * @var bool
     * @validate NotEmpty
     */
    protected $alcoholised = false;

    /**
     * Description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';

    /**
     * Photos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $photos = null;

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
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
}
