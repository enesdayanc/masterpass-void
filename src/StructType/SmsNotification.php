<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmsNotification StructType
 * @subpackage Structs
 */
class SmsNotification extends AbstractStructBase
{
    /**
     * The toField
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $toField;
    /**
     * The valueField
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $valueField;
    /**
     * Constructor method for SmsNotification
     * @uses SmsNotification::setToField()
     * @uses SmsNotification::setValueField()
     * @param string $toField
     * @param string $valueField
     */
    public function __construct($toField = null, $valueField = null)
    {
        $this
            ->setToField($toField)
            ->setValueField($valueField);
    }
    /**
     * Get toField value
     * @return string|null
     */
    public function getToField()
    {
        return $this->toField;
    }
    /**
     * Set toField value
     * @param string $toField
     * @return \Enesdayanc\MasterpassVoid\StructType\SmsNotification
     */
    public function setToField($toField = null)
    {
        // validation for constraint: string
        if (!is_null($toField) && !is_string($toField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toField)), __LINE__);
        }
        $this->toField = $toField;
        return $this;
    }
    /**
     * Get valueField value
     * @return string|null
     */
    public function getValueField()
    {
        return $this->valueField;
    }
    /**
     * Set valueField value
     * @param string $valueField
     * @return \Enesdayanc\MasterpassVoid\StructType\SmsNotification
     */
    public function setValueField($valueField = null)
    {
        // validation for constraint: string
        if (!is_null($valueField) && !is_string($valueField)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($valueField)), __LINE__);
        }
        $this->valueField = $valueField;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\SmsNotification
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
