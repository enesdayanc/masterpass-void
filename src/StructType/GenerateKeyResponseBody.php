<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateKeyResponseBody StructType
 * @subpackage Structs
 */
class GenerateKeyResponseBody extends ResponseBody
{
    /**
     * The encryption_key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $encryption_key;
    /**
     * The mac_key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mac_key;
    /**
     * Constructor method for GenerateKeyResponseBody
     * @uses GenerateKeyResponseBody::setEncryption_key()
     * @uses GenerateKeyResponseBody::setMac_key()
     * @param string $encryption_key
     * @param string $mac_key
     */
    public function __construct($encryption_key = null, $mac_key = null)
    {
        $this
            ->setEncryption_key($encryption_key)
            ->setMac_key($mac_key);
    }
    /**
     * Get encryption_key value
     * @return string|null
     */
    public function getEncryption_key()
    {
        return $this->encryption_key;
    }
    /**
     * Set encryption_key value
     * @param string $encryption_key
     * @return \Enesdayanc\MasterpassVoid\StructType\GenerateKeyResponseBody
     */
    public function setEncryption_key($encryption_key = null)
    {
        // validation for constraint: string
        if (!is_null($encryption_key) && !is_string($encryption_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($encryption_key)), __LINE__);
        }
        $this->encryption_key = $encryption_key;
        return $this;
    }
    /**
     * Get mac_key value
     * @return string|null
     */
    public function getMac_key()
    {
        return $this->mac_key;
    }
    /**
     * Set mac_key value
     * @param string $mac_key
     * @return \Enesdayanc\MasterpassVoid\StructType\GenerateKeyResponseBody
     */
    public function setMac_key($mac_key = null)
    {
        // validation for constraint: string
        if (!is_null($mac_key) && !is_string($mac_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac_key)), __LINE__);
        }
        $this->mac_key = $mac_key;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\GenerateKeyResponseBody
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
