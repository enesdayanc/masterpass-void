<?php

namespace Enesdayanc\MasterpassVoid\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString1 ArrayType
 * @subpackage Arrays
 */
class ArrayOfString1 extends AbstractStructArrayBase
{
    /**
     * The account_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $account_name;
    /**
     * Constructor method for ArrayOfString1
     * @uses ArrayOfString1::setAccount_name()
     * @param string[] $account_name
     */
    public function __construct(array $account_name = array())
    {
        $this
            ->setAccount_name($account_name);
    }
    /**
     * Get account_name value
     * @return string[]|null
     */
    public function getAccount_name()
    {
        return $this->account_name;
    }
    /**
     * Set account_name value
     * @throws \InvalidArgumentException
     * @param string[] $account_name
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString1
     */
    public function setAccount_name(array $account_name = array())
    {
        foreach ($account_name as $arrayOfString1Account_nameItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfString1Account_nameItem)) {
                throw new \InvalidArgumentException(sprintf('The account_name property can only contain items of string, "%s" given', is_object($arrayOfString1Account_nameItem) ? get_class($arrayOfString1Account_nameItem) : gettype($arrayOfString1Account_nameItem)), __LINE__);
            }
        }
        $this->account_name = $account_name;
        return $this;
    }
    /**
     * Add item to account_name value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString1
     */
    public function addToAccount_name($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The account_name property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->account_name[] = $item;
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
     * @return string account_name
     */
    public function getAttributeName()
    {
        return 'account_name';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfString1
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
