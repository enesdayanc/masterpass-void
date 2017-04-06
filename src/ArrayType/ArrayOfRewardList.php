<?php

namespace Enesdayanc\MasterpassVoid\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRewardList ArrayType
 * @subpackage Arrays
 */
class ArrayOfRewardList extends AbstractStructArrayBase
{
    /**
     * The reward_list
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassVoid\StructType\RewardList[]
     */
    public $reward_list;
    /**
     * Constructor method for ArrayOfRewardList
     * @uses ArrayOfRewardList::setReward_list()
     * @param \Enesdayanc\MasterpassVoid\StructType\RewardList[] $reward_list
     */
    public function __construct(array $reward_list = array())
    {
        $this
            ->setReward_list($reward_list);
    }
    /**
     * Get reward_list value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList[]|null
     */
    public function getReward_list()
    {
        return isset($this->reward_list) ? $this->reward_list : null;
    }
    /**
     * Set reward_list value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\RewardList[] $reward_list
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfRewardList
     */
    public function setReward_list(array $reward_list = array())
    {
        foreach ($reward_list as $arrayOfRewardListReward_listItem) {
            // validation for constraint: itemType
            if (!$arrayOfRewardListReward_listItem instanceof \Enesdayanc\MasterpassVoid\StructType\RewardList) {
                throw new \InvalidArgumentException(sprintf('The reward_list property can only contain items of \Enesdayanc\MasterpassVoid\StructType\RewardList, "%s" given', is_object($arrayOfRewardListReward_listItem) ? get_class($arrayOfRewardListReward_listItem) : gettype($arrayOfRewardListReward_listItem)), __LINE__);
            }
        }
        if (is_null($reward_list) || (is_array($reward_list) && empty($reward_list))) {
            unset($this->reward_list);
        } else {
            $this->reward_list = $reward_list;
        }
        return $this;
    }
    /**
     * Add item to reward_list value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\RewardList $item
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfRewardList
     */
    public function addToReward_list(\Enesdayanc\MasterpassVoid\StructType\RewardList $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassVoid\StructType\RewardList) {
            throw new \InvalidArgumentException(sprintf('The reward_list property can only contain items of \Enesdayanc\MasterpassVoid\StructType\RewardList, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->reward_list[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Enesdayanc\MasterpassVoid\StructType\RewardList|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string reward_list
     */
    public function getAttributeName()
    {
        return 'reward_list';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfRewardList
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
