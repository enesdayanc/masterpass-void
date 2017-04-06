<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCardResponseBody StructType
 * @subpackage Structs
 */
class GetCardResponseBody extends ResponseBody
{
    /**
     * The enc_pan_exp_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $enc_pan_exp_date;
    /**
     * Constructor method for GetCardResponseBody
     * @uses GetCardResponseBody::setEnc_pan_exp_date()
     * @param string $enc_pan_exp_date
     */
    public function __construct($enc_pan_exp_date = null)
    {
        $this
            ->setEnc_pan_exp_date($enc_pan_exp_date);
    }
    /**
     * Get enc_pan_exp_date value
     * @return string|null
     */
    public function getEnc_pan_exp_date()
    {
        return $this->enc_pan_exp_date;
    }
    /**
     * Set enc_pan_exp_date value
     * @param string $enc_pan_exp_date
     * @return \Enesdayanc\MasterpassVoid\StructType\GetCardResponseBody
     */
    public function setEnc_pan_exp_date($enc_pan_exp_date = null)
    {
        // validation for constraint: string
        if (!is_null($enc_pan_exp_date) && !is_string($enc_pan_exp_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($enc_pan_exp_date)), __LINE__);
        }
        $this->enc_pan_exp_date = $enc_pan_exp_date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\GetCardResponseBody
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
