<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Card StructType
 * @subpackage Structs
 */
class Card extends AbstractStructBase
{
    /**
     * The brandId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $brandId;
    /**
     * The brandName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $brandName;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The billingAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public $billingAddress;
    /**
     * The cardHolderName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $cardHolderName;
    /**
     * The expireDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $expireDate;
    /**
     * The defaultcard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $defaultcard;
    /**
     * The AliasName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AliasName;
    /**
     * Constructor method for Card
     * @uses Card::setBrandId()
     * @uses Card::setBrandName()
     * @uses Card::setAccountNumber()
     * @uses Card::setBillingAddress()
     * @uses Card::setCardHolderName()
     * @uses Card::setExpireDate()
     * @uses Card::setDefaultcard()
     * @uses Card::setAliasName()
     * @param string $brandId
     * @param string $brandName
     * @param string $accountNumber
     * @param \Enesdayanc\MasterpassVoid\StructType\AddressListItem $billingAddress
     * @param string $cardHolderName
     * @param string $expireDate
     * @param string $defaultcard
     * @param string $aliasName
     */
    public function __construct($brandId = null, $brandName = null, $accountNumber = null, \Enesdayanc\MasterpassVoid\StructType\AddressListItem $billingAddress = null, $cardHolderName = null, $expireDate = null, $defaultcard = null, $aliasName = null)
    {
        $this
            ->setBrandId($brandId)
            ->setBrandName($brandName)
            ->setAccountNumber($accountNumber)
            ->setBillingAddress($billingAddress)
            ->setCardHolderName($cardHolderName)
            ->setExpireDate($expireDate)
            ->setDefaultcard($defaultcard)
            ->setAliasName($aliasName);
    }
    /**
     * Get brandId value
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->brandId;
    }
    /**
     * Set brandId value
     * @param string $brandId
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: string
        if (!is_null($brandId) && !is_string($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->brandId = $brandId;
        return $this;
    }
    /**
     * Get brandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->brandName;
    }
    /**
     * Set brandName value
     * @param string $brandName
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get billingAddress value
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem|null
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
    /**
     * Set billingAddress value
     * @param \Enesdayanc\MasterpassVoid\StructType\AddressListItem $billingAddress
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setBillingAddress(\Enesdayanc\MasterpassVoid\StructType\AddressListItem $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }
    /**
     * Get cardHolderName value
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }
    /**
     * Set cardHolderName value
     * @param string $cardHolderName
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setCardHolderName($cardHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderName) && !is_string($cardHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderName)), __LINE__);
        }
        $this->cardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get expireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }
    /**
     * Set expireDate value
     * @param string $expireDate
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->expireDate = $expireDate;
        return $this;
    }
    /**
     * Get defaultcard value
     * @return string|null
     */
    public function getDefaultcard()
    {
        return $this->defaultcard;
    }
    /**
     * Set defaultcard value
     * @param string $defaultcard
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setDefaultcard($defaultcard = null)
    {
        // validation for constraint: string
        if (!is_null($defaultcard) && !is_string($defaultcard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultcard)), __LINE__);
        }
        $this->defaultcard = $defaultcard;
        return $this;
    }
    /**
     * Get AliasName value
     * @return string|null
     */
    public function getAliasName()
    {
        return $this->AliasName;
    }
    /**
     * Set AliasName value
     * @param string $aliasName
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public function setAliasName($aliasName = null)
    {
        // validation for constraint: string
        if (!is_null($aliasName) && !is_string($aliasName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aliasName)), __LINE__);
        }
        $this->AliasName = $aliasName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
