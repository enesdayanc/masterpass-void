<?php

namespace Enesdayanc\MasterpassVoid\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType
 * @subpackage Arrays
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The address_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $address_name;
    /**
     * Constructor method for ArrayOfString
     * @uses ArrayOfString::setAddress_name()
     * @param string[] $address_name
     */
    public function __construct(array $address_name = array())
    {
        $this
            ->setAddress_name($address_name);
    }
    /**
     * Get address_name value
     * @return string[]|null
     */
    public function getAddress_name()
    {
        return $this->address_name;
    }
    /**
     * Set address_name value
     * @throws \InvalidArgumentException
     * @param string[] $address_name
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString
     */
    public function setAddress_name(array $address_name = array())
    {
        foreach ($address_name as $arrayOfStringAddress_nameItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringAddress_nameItem)) {
                throw new \InvalidArgumentException(sprintf('The address_name property can only contain items of string, "%s" given', is_object($arrayOfStringAddress_nameItem) ? get_class($arrayOfStringAddress_nameItem) : gettype($arrayOfStringAddress_nameItem)), __LINE__);
            }
        }
        $this->address_name = $address_name;
        return $this;
    }
    /**
     * Add item to address_name value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString
     */
    public function addToAddress_name($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The address_name property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->address_name[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string address_name
     */
    public function getAttributeName()
    {
        return 'address_name';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString
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
