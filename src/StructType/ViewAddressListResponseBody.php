<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewAddressListResponseBody StructType
 * @subpackage Structs
 */
class ViewAddressListResponseBody extends ResponseBody
{
    /**
     * The list_items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem
     */
    public $list_items;
    /**
     * Constructor method for ViewAddressListResponseBody
     * @uses ViewAddressListResponseBody::setList_items()
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem $list_items
     */
    public function __construct(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem $list_items = null)
    {
        $this
            ->setList_items($list_items);
    }
    /**
     * Get list_items value
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem|null
     */
    public function getList_items()
    {
        return $this->list_items;
    }
    /**
     * Set list_items value
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem $list_items
     * @return \Enesdayanc\MasterpassVoid\StructType\ViewAddressListResponseBody
     */
    public function setList_items(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfAddressListItem $list_items = null)
    {
        $this->list_items = $list_items;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ViewAddressListResponseBody
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
