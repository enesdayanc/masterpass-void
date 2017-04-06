<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionQueryResponseBody StructType
 * @subpackage Structs
 */
class TransactionQueryResponseBody extends ResponseBody
{
    /**
     * The orders
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem
     */
    public $orders;
    /**
     * Constructor method for TransactionQueryResponseBody
     * @uses TransactionQueryResponseBody::setOrders()
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem $orders
     */
    public function __construct(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this
            ->setOrders($orders);
    }
    /**
     * Get orders value
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem|null
     */
    public function getOrders()
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem $orders
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponseBody
     */
    public function setOrders(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem $orders = null)
    {
        $this->orders = $orders;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponseBody
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
