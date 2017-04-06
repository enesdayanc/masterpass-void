<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateOTPResponseBody StructType
 * @subpackage Structs
 */
class GenerateOTPResponseBody extends ResponseBody
{
    /**
     * The OTPMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OTPMessage;
    /**
     * Constructor method for GenerateOTPResponseBody
     * @uses GenerateOTPResponseBody::setOTPMessage()
     * @param string $oTPMessage
     */
    public function __construct($oTPMessage = null)
    {
        $this
            ->setOTPMessage($oTPMessage);
    }
    /**
     * Get OTPMessage value
     * @return string|null
     */
    public function getOTPMessage()
    {
        return $this->OTPMessage;
    }
    /**
     * Set OTPMessage value
     * @param string $oTPMessage
     * @return \Enesdayanc\MasterpassVoid\StructType\GenerateOTPResponseBody
     */
    public function setOTPMessage($oTPMessage = null)
    {
        // validation for constraint: string
        if (!is_null($oTPMessage) && !is_string($oTPMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oTPMessage)), __LINE__);
        }
        $this->OTPMessage = $oTPMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\GenerateOTPResponseBody
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
