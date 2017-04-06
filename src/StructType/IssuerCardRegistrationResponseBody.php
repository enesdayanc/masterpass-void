<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IssuerCardRegistrationResponseBody StructType
 * @subpackage Structs
 */
class IssuerCardRegistrationResponseBody extends ResponseBody
{
    /**
     * The response_description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $response_description;
    /**
     * The mpg_account_number
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $mpg_account_number;
    /**
     * Constructor method for IssuerCardRegistrationResponseBody
     * @uses IssuerCardRegistrationResponseBody::setResponse_description()
     * @uses IssuerCardRegistrationResponseBody::setMpg_account_number()
     * @param string $response_description
     * @param string $mpg_account_number
     */
    public function __construct($response_description = null, $mpg_account_number = null)
    {
        $this
            ->setResponse_description($response_description)
            ->setMpg_account_number($mpg_account_number);
    }
    /**
     * Get response_description value
     * @return string
     */
    public function getResponse_description()
    {
        return $this->response_description;
    }
    /**
     * Set response_description value
     * @param string $response_description
     * @return \Enesdayanc\MasterpassVoid\StructType\IssuerCardRegistrationResponseBody
     */
    public function setResponse_description($response_description = null)
    {
        // validation for constraint: string
        if (!is_null($response_description) && !is_string($response_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($response_description)), __LINE__);
        }
        $this->response_description = $response_description;
        return $this;
    }
    /**
     * Get mpg_account_number value
     * @return string
     */
    public function getMpg_account_number()
    {
        return $this->mpg_account_number;
    }
    /**
     * Set mpg_account_number value
     * @param string $mpg_account_number
     * @return \Enesdayanc\MasterpassVoid\StructType\IssuerCardRegistrationResponseBody
     */
    public function setMpg_account_number($mpg_account_number = null)
    {
        // validation for constraint: string
        if (!is_null($mpg_account_number) && !is_string($mpg_account_number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mpg_account_number)), __LINE__);
        }
        $this->mpg_account_number = $mpg_account_number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\IssuerCardRegistrationResponseBody
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
