<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChequeList StructType
 * @subpackage Structs
 */
class ChequeList extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Amount;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Count;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ID;
    /**
     * The Bitmap
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Bitmap;
    /**
     * The CampaignID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CampaignID;
    /**
     * The ExpireDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpireDate;
    /**
     * The UsageRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UsageRate;
    /**
     * The MinTxnAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MinTxnAmount;
    /**
     * Constructor method for ChequeList
     * @uses ChequeList::setType()
     * @uses ChequeList::setAmount()
     * @uses ChequeList::setCount()
     * @uses ChequeList::setID()
     * @uses ChequeList::setBitmap()
     * @uses ChequeList::setCampaignID()
     * @uses ChequeList::setExpireDate()
     * @uses ChequeList::setUsageRate()
     * @uses ChequeList::setMinTxnAmount()
     * @param string $type
     * @param string $amount
     * @param string $count
     * @param string $iD
     * @param string $bitmap
     * @param string $campaignID
     * @param string $expireDate
     * @param string $usageRate
     * @param string $minTxnAmount
     */
    public function __construct($type = null, $amount = null, $count = null, $iD = null, $bitmap = null, $campaignID = null, $expireDate = null, $usageRate = null, $minTxnAmount = null)
    {
        $this
            ->setType($type)
            ->setAmount($amount)
            ->setCount($count)
            ->setID($iD)
            ->setBitmap($bitmap)
            ->setCampaignID($campaignID)
            ->setExpireDate($expireDate)
            ->setUsageRate($usageRate)
            ->setMinTxnAmount($minTxnAmount);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Count value
     * @return string
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param string $count
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setCount($count = null)
    {
        // validation for constraint: string
        if (!is_null($count) && !is_string($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get ID value
     * @return string
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Bitmap value
     * @return string
     */
    public function getBitmap()
    {
        return $this->Bitmap;
    }
    /**
     * Set Bitmap value
     * @param string $bitmap
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setBitmap($bitmap = null)
    {
        // validation for constraint: string
        if (!is_null($bitmap) && !is_string($bitmap)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bitmap)), __LINE__);
        }
        $this->Bitmap = $bitmap;
        return $this;
    }
    /**
     * Get CampaignID value
     * @return string|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param string $campaignID
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: string
        if (!is_null($campaignID) && !is_string($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get UsageRate value
     * @return string|null
     */
    public function getUsageRate()
    {
        return $this->UsageRate;
    }
    /**
     * Set UsageRate value
     * @param string $usageRate
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setUsageRate($usageRate = null)
    {
        // validation for constraint: string
        if (!is_null($usageRate) && !is_string($usageRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usageRate)), __LINE__);
        }
        $this->UsageRate = $usageRate;
        return $this;
    }
    /**
     * Get MinTxnAmount value
     * @return string|null
     */
    public function getMinTxnAmount()
    {
        return $this->MinTxnAmount;
    }
    /**
     * Set MinTxnAmount value
     * @param string $minTxnAmount
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
     */
    public function setMinTxnAmount($minTxnAmount = null)
    {
        // validation for constraint: string
        if (!is_null($minTxnAmount) && !is_string($minTxnAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minTxnAmount)), __LINE__);
        }
        $this->MinTxnAmount = $minTxnAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ChequeList
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
