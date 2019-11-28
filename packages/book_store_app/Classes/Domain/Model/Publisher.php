<?php
namespace SGPhule\BookStoreApp\Domain\Model;


/***
 *
 * This file is part of the "Book Store App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Sudarshan Phule <sudarshan.phule@hof-university.de>
 *
 ***/
/**
 * Publisher
 */
class Publisher extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * country
     * 
     * @var \SGPhule\BookStoreApp\Domain\Model\Country
     */
    protected $country = null;

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
     * Returns the country
     * 
     * @return \SGPhule\BookStoreApp\Domain\Model\Country $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the country
     * 
     * @param \SGPhule\BookStoreApp\Domain\Model\Country $country
     * @return void
     */
    public function setCountry(\SGPhule\BookStoreApp\Domain\Model\Country $country)
    {
        $this->country = $country;
    }
}
