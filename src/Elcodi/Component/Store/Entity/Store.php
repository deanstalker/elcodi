<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */
 
namespace Elcodi\Component\Store\Entity;

use Elcodi\Component\Core\Entity\Traits\DateTimeTrait;
use Elcodi\Component\Core\Entity\Traits\EnabledTrait;
use Elcodi\Component\Core\Entity\Traits\IdentifiableTrait;
use Elcodi\Component\Currency\Entity\Interfaces\CurrencyInterface;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Language\Entity\Interfaces\LanguageInterface;
use Elcodi\Component\Media\Entity\Interfaces\ImageInterface;
use Elcodi\Component\Store\Entity\Interfaces\StoreInterface;

/**
 * Class Store
 */
class Store implements StoreInterface
{
    use
        IdentifiableTrait,
        DateTimeTrait,
        EnabledTrait;

    /**
     * @var string
     *
     * Name
     */
    protected $name;

    /**
     * @var string
     *
     * Leitmotiv
     */
    protected $leitmotiv;

    /**
     * @var string
     *
     * Phone
     */
    protected $phone;

    /**
     * @var string
     *
     * Email
     */
    protected $email;

    /**
     * @var boolean
     *
     * Is company
     */
    protected $isCompany;

    /**
     * @var string
     *
     * NIF/CIF
     */
    protected $cif;

    /**
     * @var string
     *
     * Tracker
     */
    protected $tracker;

    /**
     * @var string
     *
     * Template
     */
    protected $template;

    /**
     * @var boolean
     *
     * Under construction
     */
    protected $underConstruction;

    /**
     * @var boolean
     *
     * Use stock
     */
    protected $useStock;

    /**
     * @var AddressInterface
     *
     * tax Address
     */
    protected $taxAddress;

    /**
     * @var AddressInterface
     *
     * Physical address
     */
    protected $physicalAddress;

    /**
     * @var LanguageInterface
     *
     * Default language
     */
    protected $defaultLanguage;

    /**
     * @var CurrencyInterface
     *
     * Default currency
     */
    protected $defaultCurrency;

    /**
     * @var ImageInterface
     *
     * Identity Image
     */
    protected $identityImage;

    /**
     * @var ImageInterface
     *
     * Identity logo
     */
    protected $identityLogo;

    /**
     * @var ImageInterface
     *
     * Identity secondary logo
     */
    protected $identitySecondaryLogo;

    /**
     * @var ImageInterface
     *
     * Identity logo for mobile
     */
    protected $identityMobileLogo;

    /**
     * @var string
     *
     * Store color
     */
    protected $color;

    /**
     * Get Name
     *
     * @return string Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets Name
     *
     * @param string $name Name
     *
     * @return $this Self object
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Leitmotiv
     *
     * @return string Leitmotiv
     */
    public function getLeitmotiv()
    {
        return $this->leitmotiv;
    }

    /**
     * Sets Leitmotiv
     *
     * @param string $leitmotiv Leitmotiv
     *
     * @return $this Self object
     */
    public function setLeitmotiv($leitmotiv)
    {
        $this->leitmotiv = $leitmotiv;

        return $this;
    }

    /**
     * Get Phone
     *
     * @return string Phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets Phone
     *
     * @param string $phone Phone
     *
     * @return $this Self object
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get Email
     *
     * @return string Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets Email
     *
     * @param string $email Email
     *
     * @return $this Self object
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get IsCompany
     *
     * @return boolean IsCompany
     */
    public function getIsCompany()
    {
        return $this->isCompany;
    }

    /**
     * Sets IsCompany
     *
     * @param boolean $isCompany IsCompany
     *
     * @return $this Self object
     */
    public function setIsCompany($isCompany)
    {
        $this->isCompany = $isCompany;

        return $this;
    }

    /**
     * Get Cif
     *
     * @return string Cif
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Sets Cif
     *
     * @param string $cif Cif
     *
     * @return $this Self object
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get Tracker
     *
     * @return string Tracker
     */
    public function getTracker()
    {
        return $this->tracker;
    }

    /**
     * Sets Tracker
     *
     * @param string $tracker Tracker
     *
     * @return $this Self object
     */
    public function setTracker($tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get Template
     *
     * @return string Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets Template
     *
     * @param string $template Template
     *
     * @return $this Self object
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Is UnderConstruction
     *
     * @return boolean UnderConstruction
     */
    public function isUnderConstruction()
    {
        return $this->underConstruction;
    }

    /**
     * Sets UnderConstruction
     *
     * @param boolean $underConstruction UnderConstruction
     *
     * @return $this Self object
     */
    public function setUnderConstruction($underConstruction)
    {
        $this->underConstruction = $underConstruction;

        return $this;
    }

    /**
     * Get UseStock
     *
     * @return boolean UseStock
     */
    public function getUseStock()
    {
        return $this->useStock;
    }

    /**
     * Sets UseStock
     *
     * @param boolean $useStock UseStock
     *
     * @return $this Self object
     */
    public function setUseStock($useStock)
    {
        $this->useStock = $useStock;

        return $this;
    }

    /**
     * Get TaxAddress
     *
     * @return AddressInterface TaxAddress
     */
    public function getTaxAddress()
    {
        return $this->taxAddress;
    }

    /**
     * Sets TaxAddress
     *
     * @param AddressInterface $taxAddress TaxAddress
     *
     * @return $this Self object
     */
    public function setTaxAddress($taxAddress)
    {
        $this->taxAddress = $taxAddress;

        return $this;
    }

    /**
     * Get PhysicalAddress
     *
     * @return AddressInterface PhysicalAddress
     */
    public function getPhysicalAddress()
    {
        return $this->physicalAddress;
    }

    /**
     * Sets PhysicalAddress
     *
     * @param AddressInterface $physicalAddress PhysicalAddress
     *
     * @return $this Self object
     */
    public function setPhysicalAddress($physicalAddress)
    {
        $this->physicalAddress = $physicalAddress;

        return $this;
    }

    /**
     * Get DefaultLanguage
     *
     * @return LanguageInterface DefaultLanguage
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * Sets DefaultLanguage
     *
     * @param LanguageInterface $defaultLanguage DefaultLanguage
     *
     * @return $this Self object
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;

        return $this;
    }

    /**
     * Get DefaultCurrency
     *
     * @return CurrencyInterface DefaultCurrency
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Sets DefaultCurrency
     *
     * @param CurrencyInterface $defaultCurrency DefaultCurrency
     *
     * @return $this Self object
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * Get IdentityImage
     *
     * @return ImageInterface IdentityImage
     */
    public function getIdentityImage()
    {
        return $this->identityImage;
    }

    /**
     * Sets IdentityImage
     *
     * @param ImageInterface $identityImage IdentityImage
     *
     * @return $this Self object
     */
    public function setIdentityImage($identityImage = null)
    {
        $this->identityImage = $identityImage;

        return $this;
    }

    /**
     * Get IdentityLogo
     *
     * @return ImageInterface IdentityLogo
     */
    public function getIdentityLogo()
    {
        return $this->identityLogo;
    }

    /**
     * Sets IdentityLogo
     *
     * @param ImageInterface $identityLogo IdentityLogo
     *
     * @return $this Self object
     */
    public function setIdentityLogo($identityLogo = null)
    {
        $this->identityLogo = $identityLogo;

        return $this;
    }

    /**
     * Get IdentitySecondaryLogo
     *
     * @return ImageInterface IdentitySecondaryLogo
     */
    public function getIdentitySecondaryLogo()
    {
        return $this->identitySecondaryLogo;
    }

    /**
     * Sets IdentitySecondaryLogo
     *
     * @param ImageInterface $identitySecondaryLogo IdentitySecondaryLogo
     *
     * @return $this Self object
     */
    public function setIdentitySecondaryLogo($identitySecondaryLogo = null)
    {
        $this->identitySecondaryLogo = $identitySecondaryLogo;

        return $this;
    }

    /**
     * Get IdentityMobileLogo
     *
     * @return mixed IdentityMobileLogo
     */
    public function getIdentityMobileLogo()
    {
        return $this->identityMobileLogo;
    }

    /**
     * Sets IdentityMobileLogo
     *
     * @param mixed $identityMobileLogo IdentityMobileLogo
     *
     * @return $this Self object
     */
    public function setIdentityMobileLogo($identityMobileLogo = null)
    {
        $this->identityMobileLogo = $identityMobileLogo;

        return $this;
    }

    /**
     * Get Color
     *
     * @return string Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets Color
     *
     * @param string $color Color
     *
     * @return $this Self object
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
