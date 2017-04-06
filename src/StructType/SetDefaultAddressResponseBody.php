<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDefaultAddressResponseBody StructType
 * @subpackage Structs
 */
class SetDefaultAddressResponseBody extends ResponseBody
{
    /**
     * The source_address_list
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString
     */
    public $source_address_list;
    /**
     * Constructor method for SetDefaultAddressResponseBody
     * @uses SetDefaultAddressResponseBody::setSource_address_list()
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString $source_address_list
     */
    public function __construct(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString $source_address_list = null)
    {
        $this
            ->setSource_address_list($source_address_list);
    }
    /**
     * Get source_address_list value
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString|null
     */
    public function getSource_address_list()
    {
        return $this->source_address_list;
    }
    /**
     * Set source_address_list value
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString $source_address_list
     * @return \Enesdayanc\MasterpassVoid\StructType\SetDefaultAddressResponseBody
     */
    public function setSource_address_list(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString $source_address_list = null)
    {
        $this->source_address_list = $source_address_list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\SetDefaultAddressResponseBody
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
