<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ViewListResponseBody StructType
 * @subpackage Structs
 */
class ViewListResponseBody extends ResponseBody
{
    /**
     * The account_status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $account_status;
    /**
     * The list_items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem
     */
    public $list_items;
    /**
     * Constructor method for ViewListResponseBody
     * @uses ViewListResponseBody::setAccount_status()
     * @uses ViewListResponseBody::setList_items()
     * @param string $account_status
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items
     */
    public function __construct($account_status = null, \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items = null)
    {
        $this
            ->setAccount_status($account_status)
            ->setList_items($list_items);
    }
    /**
     * Get account_status value
     * @return string|null
     */
    public function getAccount_status()
    {
        return $this->account_status;
    }
    /**
     * Set account_status value
     * @param string $account_status
     * @return \Enesdayanc\MasterpassVoid\StructType\ViewListResponseBody
     */
    public function setAccount_status($account_status = null)
    {
        // validation for constraint: string
        if (!is_null($account_status) && !is_string($account_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_status)), __LINE__);
        }
        $this->account_status = $account_status;
        return $this;
    }
    /**
     * Get list_items value
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem|null
     */
    public function getList_items()
    {
        return $this->list_items;
    }
    /**
     * Set list_items value
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items
     * @return \Enesdayanc\MasterpassVoid\StructType\ViewListResponseBody
     */
    public function setList_items(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items = null)
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ViewListResponseBody
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
