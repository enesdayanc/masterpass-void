<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerRegistrationResponseBodyForPurchase StructType
 * @subpackage Structs
 */
class ConsumerRegistrationResponseBodyForPurchase extends ResponseBody
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
     * Constructor method for ConsumerRegistrationResponseBodyForPurchase
     * @uses ConsumerRegistrationResponseBodyForPurchase::setResponse_description()
     * @param string $response_description
     */
    public function __construct($response_description = null)
    {
        $this
            ->setResponse_description($response_description);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRegistrationResponseBodyForPurchase
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRegistrationResponseBodyForPurchase
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
