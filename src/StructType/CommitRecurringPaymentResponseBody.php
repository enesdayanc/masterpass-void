<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitRecurringPaymentResponseBody StructType
 * @subpackage Structs
 */
class CommitRecurringPaymentResponseBody extends ConsumerFinancialResponseBody
{
    /**
     * The macro_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $macro_merchant_id;
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_no;
    /**
     * Constructor method for CommitRecurringPaymentResponseBody
     * @uses CommitRecurringPaymentResponseBody::setMacro_merchant_id()
     * @uses CommitRecurringPaymentResponseBody::setOrder_no()
     * @param string $macro_merchant_id
     * @param string $order_no
     */
    public function __construct($macro_merchant_id = null, $order_no = null)
    {
        $this
            ->setMacro_merchant_id($macro_merchant_id)
            ->setOrder_no($order_no);
    }
    /**
     * Get macro_merchant_id value
     * @return string|null
     */
    public function getMacro_merchant_id()
    {
        return $this->macro_merchant_id;
    }
    /**
     * Set macro_merchant_id value
     * @param string $macro_merchant_id
     * @return \Enesdayanc\MasterpassVoid\StructType\CommitRecurringPaymentResponseBody
     */
    public function setMacro_merchant_id($macro_merchant_id = null)
    {
        // validation for constraint: string
        if (!is_null($macro_merchant_id) && !is_string($macro_merchant_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($macro_merchant_id)), __LINE__);
        }
        $this->macro_merchant_id = $macro_merchant_id;
        return $this;
    }
    /**
     * Get order_no value
     * @return string|null
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    /**
     * Set order_no value
     * @param string $order_no
     * @return \Enesdayanc\MasterpassVoid\StructType\CommitRecurringPaymentResponseBody
     */
    public function setOrder_no($order_no = null)
    {
        // validation for constraint: string
        if (!is_null($order_no) && !is_string($order_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($order_no)), __LINE__);
        }
        $this->order_no = $order_no;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\CommitRecurringPaymentResponseBody
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
