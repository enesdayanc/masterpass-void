<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalAccountResponse StructType
 * @subpackage Structs
 */
class ExternalAccountResponse extends AbstractStructBase
{
    /**
     * The custom_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public $custom_fields;
    /**
     * Constructor method for ExternalAccountResponse
     * @uses ExternalAccountResponse::setCustom_fields()
     * @param \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField $custom_fields
     */
    public function __construct(\Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField $custom_fields = null)
    {
        $this
            ->setCustom_fields($custom_fields);
    }
    /**
     * Get custom_fields value
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function getCustom_fields()
    {
        return $this->custom_fields;
    }
    /**
     * Set custom_fields value
     * @param \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField $custom_fields
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountResponse
     */
    public function setCustom_fields(\Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField $custom_fields = null)
    {
        $this->custom_fields = $custom_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountResponse
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
