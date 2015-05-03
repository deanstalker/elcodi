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

namespace Elcodi\Component\Store\Entity\Interfaces;

use Elcodi\Component\Core\Entity\Interfaces\EnabledInterface;
use Elcodi\Component\Core\Entity\Interfaces\IdentifiableInterface;
use Elcodi\Component\Core\Entity\Interfaces\DateTimeInterface;
use Elcodi\Component\Currency\Entity\Interfaces\CurrencyInterface;
use Elcodi\Component\Geo\Entity\Interfaces\AddressInterface;
use Elcodi\Component\Language\Entity\Interfaces\LanguageInterface;
use Elcodi\Component\Media\Entity\Interfaces\ImageInterface;

/**
 * Interface StoreInterface
 */
interface StoreInterface
    extends
    IdentifiableInterface,
    DateTimeInterface,
    EnabledInterface
{
    /**
     * Get Name
     *
     * @return string Name
     */
    public function getName();

    /**
     * Sets Name
     *
     * @param string $name Name
     *
     * @return $this Self object
     */
    public function setName($name);

    /**
     * Get Leitmotiv
     *
     * @return string Leitmotiv
     */
    public function getLeitmotiv();

    /**
     * Sets Leitmotiv
     *
     * @param string $leitmotiv Leitmotiv
     *
     * @return $this Self object
     */
    public function setLeitmotiv($leitmotiv);

    /**
     * Get Phone
     *
     * @return string Phone
     */
    public function getPhone();

    /**
     * Sets Phone
     *
     * @param string $phone Phone
     *
     * @return $this Self object
     */
    public function setPhone($phone);

    /**
     * Get Email
     *
     * @return string Email
     */
    public function getEmail();

    /**
     * Sets Email
     *
     * @param string $email Email
     *
     * @return $this Self object
     */
    public function setEmail($email);

    /**
     * Get IsCompany
     *
     * @return boolean IsCompany
     */
    public function getIsCompany();

    /**
     * Sets IsCompany
     *
     * @param boolean $isCompany IsCompany
     *
     * @return $this Self object
     */
    public function setIsCompany($isCompany);

    /**
     * Get Cif
     *
     * @return string Cif
     */
    public function getCif();

    /**
     * Sets Cif
     *
     * @param string $cif Cif
     *
     * @return $this Self object
     */
    public function setCif($cif);

    /**
     * Get Tracker
     *
     * @return string Tracker
     */
    public function getTracker();

    /**
     * Sets Tracker
     *
     * @param string $tracker Tracker
     *
     * @return $this Self object
     */
    public function setTracker($tracker);

    /**
     * Get Template
     *
     * @return string Template
     */
    public function getTemplate();

    /**
     * Sets Template
     *
     * @param string $template Template
     *
     * @return $this Self object
     */
    public function setTemplate($template);

    /**
     * Is UnderConstruction
     *
     * @return boolean UnderConstruction
     */
    public function isUnderConstruction();

    /**
     * Sets UnderConstruction
     *
     * @param boolean $underConstruction UnderConstruction
     *
     * @return $this Self object
     */
    public function setUnderConstruction($underConstruction);

    /**
     * Get UseStock
     *
     * @return boolean UseStock
     */
    public function getUseStock();

    /**
     * Sets UseStock
     *
     * @param boolean $useStock UseStock
     *
     * @return $this Self object
     */
    public function setUseStock($useStock);

    /**
     * Get TaxAddress
     *
     * @return AddressInterface TaxAddress
     */
    public function getTaxAddress();

    /**
     * Sets TaxAddress
     *
     * @param AddressInterface $taxAddress TaxAddress
     *
     * @return $this Self object
     */
    public function setTaxAddress($taxAddress);

    /**
     * Get PhysicalAddress
     *
     * @return AddressInterface PhysicalAddress
     */
    public function getPhysicalAddress();

    /**
     * Sets PhysicalAddress
     *
     * @param AddressInterface $physicalAddress PhysicalAddress
     *
     * @return $this Self object
     */
    public function setPhysicalAddress($physicalAddress);

    /**
     * Get DefaultLanguage
     *
     * @return LanguageInterface DefaultLanguage
     */
    public function getDefaultLanguage();

    /**
     * Sets DefaultLanguage
     *
     * @param LanguageInterface $defaultLanguage DefaultLanguage
     *
     * @return $this Self object
     */
    public function setDefaultLanguage($defaultLanguage);

    /**
     * Get DefaultCurrency
     *
     * @return CurrencyInterface DefaultCurrency
     */
    public function getDefaultCurrency();

    /**
     * Sets DefaultCurrency
     *
     * @param CurrencyInterface $defaultCurrency DefaultCurrency
     *
     * @return $this Self object
     */
    public function setDefaultCurrency($defaultCurrency);

    /**
     * Get IdentityImage
     *
     * @return ImageInterface IdentityImage
     */
    public function getIdentityImage();

    /**
     * Sets IdentityImage
     *
     * @param ImageInterface $identityImage IdentityImage
     *
     * @return $this Self object
     */
    public function setIdentityImage($identityImage = null);

    /**
     * Get IdentityLogo
     *
     * @return ImageInterface IdentityLogo
     */
    public function getIdentityLogo();

    /**
     * Sets IdentityLogo
     *
     * @param ImageInterface $identityLogo IdentityLogo
     *
     * @return $this Self object
     */
    public function setIdentityLogo($identityLogo = null);

    /**
     * Get IdentitySecondaryLogo
     *
     * @return ImageInterface IdentitySecondaryLogo
     */
    public function getIdentitySecondaryLogo();

    /**
     * Sets IdentitySecondaryLogo
     *
     * @param ImageInterface $identitySecondaryLogo IdentitySecondaryLogo
     *
     * @return $this Self object
     */
    public function setIdentitySecondaryLogo($identitySecondaryLogo = null);

    /**
     * Get IdentityMobileLogo
     *
     * @return mixed IdentityMobileLogo
     */
    public function getIdentityMobileLogo();

    /**
     * Sets IdentityMobileLogo
     *
     * @param mixed $identityMobileLogo IdentityMobileLogo
     *
     * @return $this Self object
     */
    public function setIdentityMobileLogo($identityMobileLogo = null);

    /**
     * Get Color
     *
     * @return string Color
     */
    public function getColor();

    /**
     * Sets Color
     *
     * @param string $color Color
     *
     * @return $this Self object
     */
    public function setColor($color);
}
