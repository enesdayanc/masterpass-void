<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckMasterPassEndUserResponseBody StructType
 * @subpackage Structs
 */
class CheckMasterPassEndUserResponseBody extends ResponseBody
{
    /**
     * The accountStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $accountStatus;
    /**
     * Constructor method for CheckMasterPassEndUserResponseBody
     * @uses CheckMasterPassEndUserResponseBody::setAccountStatus()
     * @param string $accountStatus
     */
    public function __construct($accountStatus = null)
    {
        $this
            ->setAccountStatus($accountStatus);
    }
    /**
     * Get accountStatus value
     * @return string|null
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }
    /**
     * Set accountStatus value
     * @param string $accountStatus
     * @return \Enesdayanc\MasterpassVoid\StructType\CheckMasterPassEndUserResponseBody
     */
    public function setAccountStatus($accountStatus = null)
    {
        // validation for constraint: string
        if (!is_null($accountStatus) && !is_string($accountStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountStatus)), __LINE__);
        }
        $this->accountStatus = $accountStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\CheckMasterPassEndUserResponseBody
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
