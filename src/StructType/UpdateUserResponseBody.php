<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserResponseBody StructType
 * @subpackage Structs
 */
class UpdateUserResponseBody extends ResponseBody
{
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * Constructor method for UpdateUserResponseBody
     * @uses UpdateUserResponseBody::setToken()
     * @param string $token
     */
    public function __construct($token = null)
    {
        $this
            ->setToken($token);
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Enesdayanc\MasterpassVoid\StructType\UpdateUserResponseBody
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\UpdateUserResponseBody
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
