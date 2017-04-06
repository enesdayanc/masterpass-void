<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderItem StructType
 * @subpackage Structs
 */
class OrderItem extends AbstractStructBase
{
    /**
     * The charge_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $charge_type;
    /**
     * The preAuth_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $preAuth_amount;
    /**
     * The preAuth_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $preAuth_date;
    /**
     * The auth_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $auth_amount;
    /**
     * The auth_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $auth_date;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The order_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_id;
    /**
     * Constructor method for OrderItem
     * @uses OrderItem::setCharge_type()
     * @uses OrderItem::setPreAuth_amount()
     * @uses OrderItem::setPreAuth_date()
     * @uses OrderItem::setAuth_amount()
     * @uses OrderItem::setAuth_date()
     * @uses OrderItem::setStatus()
     * @uses OrderItem::setOrder_id()
     * @param string $charge_type
     * @param string $preAuth_amount
     * @param string $preAuth_date
     * @param string $auth_amount
     * @param string $auth_date
     * @param string $status
     * @param string $order_id
     */
    public function __construct($charge_type = null, $preAuth_amount = null, $preAuth_date = null, $auth_amount = null, $auth_date = null, $status = null, $order_id = null)
    {
        $this
            ->setCharge_type($charge_type)
            ->setPreAuth_amount($preAuth_amount)
            ->setPreAuth_date($preAuth_date)
            ->setAuth_amount($auth_amount)
            ->setAuth_date($auth_date)
            ->setStatus($status)
            ->setOrder_id($order_id);
    }
    /**
     * Get charge_type value
     * @return string|null
     */
    public function getCharge_type()
    {
        return $this->charge_type;
    }
    /**
     * Set charge_type value
     * @param string $charge_type
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setCharge_type($charge_type = null)
    {
        // validation for constraint: string
        if (!is_null($charge_type) && !is_string($charge_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charge_type)), __LINE__);
        }
        $this->charge_type = $charge_type;
        return $this;
    }
    /**
     * Get preAuth_amount value
     * @return string|null
     */
    public function getPreAuth_amount()
    {
        return $this->preAuth_amount;
    }
    /**
     * Set preAuth_amount value
     * @param string $preAuth_amount
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setPreAuth_amount($preAuth_amount = null)
    {
        // validation for constraint: string
        if (!is_null($preAuth_amount) && !is_string($preAuth_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preAuth_amount)), __LINE__);
        }
        $this->preAuth_amount = $preAuth_amount;
        return $this;
    }
    /**
     * Get preAuth_date value
     * @return string|null
     */
    public function getPreAuth_date()
    {
        return $this->preAuth_date;
    }
    /**
     * Set preAuth_date value
     * @param string $preAuth_date
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setPreAuth_date($preAuth_date = null)
    {
        // validation for constraint: string
        if (!is_null($preAuth_date) && !is_string($preAuth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preAuth_date)), __LINE__);
        }
        $this->preAuth_date = $preAuth_date;
        return $this;
    }
    /**
     * Get auth_amount value
     * @return string|null
     */
    public function getAuth_amount()
    {
        return $this->auth_amount;
    }
    /**
     * Set auth_amount value
     * @param string $auth_amount
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setAuth_amount($auth_amount = null)
    {
        // validation for constraint: string
        if (!is_null($auth_amount) && !is_string($auth_amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auth_amount)), __LINE__);
        }
        $this->auth_amount = $auth_amount;
        return $this;
    }
    /**
     * Get auth_date value
     * @return string|null
     */
    public function getAuth_date()
    {
        return $this->auth_date;
    }
    /**
     * Set auth_date value
     * @param string $auth_date
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setAuth_date($auth_date = null)
    {
        // validation for constraint: string
        if (!is_null($auth_date) && !is_string($auth_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auth_date)), __LINE__);
        }
        $this->auth_date = $auth_date;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get order_id value
     * @return string|null
     */
    public function getOrder_id()
    {
        return $this->order_id;
    }
    /**
     * Set order_id value
     * @param string $order_id
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
     */
    public function setOrder_id($order_id = null)
    {
        // validation for constraint: string
        if (!is_null($order_id) && !is_string($order_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_id)), __LINE__);
        }
        $this->order_id = $order_id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\OrderItem
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
