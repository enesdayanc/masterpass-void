<?php

namespace Enesdayanc\MasterpassVoid\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMPListItem ArrayType
 * @subpackage Arrays
 */
class ArrayOfMPListItem extends AbstractStructArrayBase
{
    /**
     * The list_item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassVoid\StructType\MPListItem[]
     */
    public $list_item;
    /**
     * Constructor method for ArrayOfMPListItem
     * @uses ArrayOfMPListItem::setList_item()
     * @param \Enesdayanc\MasterpassVoid\StructType\MPListItem[] $list_item
     */
    public function __construct(array $list_item = array())
    {
        $this
            ->setList_item($list_item);
    }
    /**
     * Get list_item value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem[]|null
     */
    public function getList_item()
    {
        return isset($this->list_item) ? $this->list_item : null;
    }
    /**
     * Set list_item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\MPListItem[] $list_item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfMPListItem
     */
    public function setList_item(array $list_item = array())
    {
        foreach ($list_item as $arrayOfMPListItemList_itemItem) {
            // validation for constraint: itemType
            if (!$arrayOfMPListItemList_itemItem instanceof \Enesdayanc\MasterpassVoid\StructType\MPListItem) {
                throw new \InvalidArgumentException(sprintf('The list_item property can only contain items of \Enesdayanc\MasterpassVoid\StructType\MPListItem, "%s" given', is_object($arrayOfMPListItemList_itemItem) ? get_class($arrayOfMPListItemList_itemItem) : gettype($arrayOfMPListItemList_itemItem)), __LINE__);
            }
        }
        if (is_null($list_item) || (is_array($list_item) && empty($list_item))) {
            unset($this->list_item);
        } else {
            $this->list_item = $list_item;
        }
        return $this;
    }
    /**
     * Add item to list_item value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\MPListItem $item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfMPListItem
     */
    public function addToList_item(\Enesdayanc\MasterpassVoid\StructType\MPListItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassVoid\StructType\MPListItem) {
            throw new \InvalidArgumentException(sprintf('The list_item property can only contain items of \Enesdayanc\MasterpassVoid\StructType\MPListItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->list_item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string list_item
     */
    public function getAttributeName()
    {
        return 'list_item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfMPListItem
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
