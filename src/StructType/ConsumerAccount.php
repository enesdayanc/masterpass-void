<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerAccount StructType
 * @subpackage Structs
 */
class ConsumerAccount extends AbstractStructBase
{
    /**
     * The subs_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $subs_id;
    /**
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $msisdn;
    /**
     * The first_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $first_name;
    /**
     * The last_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $last_name;
    /**
     * The mno_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mno_id;
    /**
     * The mno_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mno_name;
    /**
     * Constructor method for ConsumerAccount
     * @uses ConsumerAccount::setSubs_id()
     * @uses ConsumerAccount::setMsisdn()
     * @uses ConsumerAccount::setFirst_name()
     * @uses ConsumerAccount::setLast_name()
     * @uses ConsumerAccount::setMno_id()
     * @uses ConsumerAccount::setMno_name()
     * @param string $subs_id
     * @param string $msisdn
     * @param string $first_name
     * @param string $last_name
     * @param string $mno_id
     * @param string $mno_name
     */
    public function __construct($subs_id = null, $msisdn = null, $first_name = null, $last_name = null, $mno_id = null, $mno_name = null)
    {
        $this
            ->setSubs_id($subs_id)
            ->setMsisdn($msisdn)
            ->setFirst_name($first_name)
            ->setLast_name($last_name)
            ->setMno_id($mno_id)
            ->setMno_name($mno_name);
    }
    /**
     * Get subs_id value
     * @return string|null
     */
    public function getSubs_id()
    {
        return $this->subs_id;
    }
    /**
     * Set subs_id value
     * @param string $subs_id
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setSubs_id($subs_id = null)
    {
        // validation for constraint: string
        if (!is_null($subs_id) && !is_string($subs_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subs_id)), __LINE__);
        }
        $this->subs_id = $subs_id;
        return $this;
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setMsisdn($msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        return $this;
    }
    /**
     * Get first_name value
     * @return string|null
     */
    public function getFirst_name()
    {
        return $this->first_name;
    }
    /**
     * Set first_name value
     * @param string $first_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setFirst_name($first_name = null)
    {
        // validation for constraint: string
        if (!is_null($first_name) && !is_string($first_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($first_name)), __LINE__);
        }
        $this->first_name = $first_name;
        return $this;
    }
    /**
     * Get last_name value
     * @return string|null
     */
    public function getLast_name()
    {
        return $this->last_name;
    }
    /**
     * Set last_name value
     * @param string $last_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setLast_name($last_name = null)
    {
        // validation for constraint: string
        if (!is_null($last_name) && !is_string($last_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_name)), __LINE__);
        }
        $this->last_name = $last_name;
        return $this;
    }
    /**
     * Get mno_id value
     * @return string|null
     */
    public function getMno_id()
    {
        return $this->mno_id;
    }
    /**
     * Set mno_id value
     * @param string $mno_id
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setMno_id($mno_id = null)
    {
        // validation for constraint: string
        if (!is_null($mno_id) && !is_string($mno_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mno_id)), __LINE__);
        }
        $this->mno_id = $mno_id;
        return $this;
    }
    /**
     * Get mno_name value
     * @return string|null
     */
    public function getMno_name()
    {
        return $this->mno_name;
    }
    /**
     * Set mno_name value
     * @param string $mno_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
     */
    public function setMno_name($mno_name = null)
    {
        // validation for constraint: string
        if (!is_null($mno_name) && !is_string($mno_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mno_name)), __LINE__);
        }
        $this->mno_name = $mno_name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount
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
