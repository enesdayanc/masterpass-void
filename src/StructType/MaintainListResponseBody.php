<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaintainListResponseBody StructType
 * @subpackage Structs
 */
class MaintainListResponseBody extends ResponseBody
{
    /**
     * The list_item_value_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $list_item_value_1;
    /**
     * The list_item_value_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $list_item_value_2;
    /**
     * The consumer_account_deleted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $consumer_account_deleted;
    /**
     * Constructor method for MaintainListResponseBody
     * @uses MaintainListResponseBody::setList_item_value_1()
     * @uses MaintainListResponseBody::setList_item_value_2()
     * @uses MaintainListResponseBody::setConsumer_account_deleted()
     * @param string $list_item_value_1
     * @param string $list_item_value_2
     * @param string $consumer_account_deleted
     */
    public function __construct($list_item_value_1 = null, $list_item_value_2 = null, $consumer_account_deleted = null)
    {
        $this
            ->setList_item_value_1($list_item_value_1)
            ->setList_item_value_2($list_item_value_2)
            ->setConsumer_account_deleted($consumer_account_deleted);
    }
    /**
     * Get list_item_value_1 value
     * @return string
     */
    public function getList_item_value_1()
    {
        return $this->list_item_value_1;
    }
    /**
     * Set list_item_value_1 value
     * @param string $list_item_value_1
     * @return \Enesdayanc\MasterpassVoid\StructType\MaintainListResponseBody
     */
    public function setList_item_value_1($list_item_value_1 = null)
    {
        // validation for constraint: string
        if (!is_null($list_item_value_1) && !is_string($list_item_value_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_item_value_1)), __LINE__);
        }
        $this->list_item_value_1 = $list_item_value_1;
        return $this;
    }
    /**
     * Get list_item_value_2 value
     * @return string
     */
    public function getList_item_value_2()
    {
        return $this->list_item_value_2;
    }
    /**
     * Set list_item_value_2 value
     * @param string $list_item_value_2
     * @return \Enesdayanc\MasterpassVoid\StructType\MaintainListResponseBody
     */
    public function setList_item_value_2($list_item_value_2 = null)
    {
        // validation for constraint: string
        if (!is_null($list_item_value_2) && !is_string($list_item_value_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_item_value_2)), __LINE__);
        }
        $this->list_item_value_2 = $list_item_value_2;
        return $this;
    }
    /**
     * Get consumer_account_deleted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConsumer_account_deleted()
    {
        return isset($this->consumer_account_deleted) ? $this->consumer_account_deleted : null;
    }
    /**
     * Set consumer_account_deleted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $consumer_account_deleted
     * @return \Enesdayanc\MasterpassVoid\StructType\MaintainListResponseBody
     */
    public function setConsumer_account_deleted($consumer_account_deleted = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($consumer_account_deleted)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $consumer_account_deleted, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        if (is_null($consumer_account_deleted) || (is_array($consumer_account_deleted) && empty($consumer_account_deleted))) {
            unset($this->consumer_account_deleted);
        } else {
            $this->consumer_account_deleted = $consumer_account_deleted;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\MaintainListResponseBody
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
