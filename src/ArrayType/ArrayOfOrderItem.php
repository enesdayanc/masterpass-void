<?php

namespace Enesdayanc\MasterpassVoid\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfOrderItem extends AbstractStructArrayBase
{
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassVoid\StructType\OrderItem[]
     */
    public $order;
    /**
     * Constructor method for ArrayOfOrderItem
     * @uses ArrayOfOrderItem::setOrder()
     * @param \Enesdayanc\MasterpassVoid\StructType\OrderItem[] $order
     */
    public function __construct(array $order = array())
    {
        $this
            ->setOrder($order);
    }
    /**
     * Get order value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem[]|null
     */
    public function getOrder()
    {
        return isset($this->order) ? $this->order : null;
    }
    /**
     * Set order value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\OrderItem[] $order
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem
     */
    public function setOrder(array $order = array())
    {
        foreach ($order as $arrayOfOrderItemOrderItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderItemOrderItem instanceof \Enesdayanc\MasterpassVoid\StructType\OrderItem) {
                throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Enesdayanc\MasterpassVoid\StructType\OrderItem, "%s" given', is_object($arrayOfOrderItemOrderItem) ? get_class($arrayOfOrderItemOrderItem) : gettype($arrayOfOrderItemOrderItem)), __LINE__);
            }
        }
        if (is_null($order) || (is_array($order) && empty($order))) {
            unset($this->order);
        } else {
            $this->order = $order;
        }
        return $this;
    }
    /**
     * Add item to order value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\OrderItem $item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem
     */
    public function addToOrder(\Enesdayanc\MasterpassVoid\StructType\OrderItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassVoid\StructType\OrderItem) {
            throw new \InvalidArgumentException(sprintf('The order property can only contain items of \Enesdayanc\MasterpassVoid\StructType\OrderItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->order[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string order
     */
    public function getAttributeName()
    {
        return 'order';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfOrderItem
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
