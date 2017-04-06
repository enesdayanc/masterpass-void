<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomCommitRecurringPaymentResponseBody StructType
 * @subpackage Structs
 */
class CustomCommitRecurringPaymentResponseBody extends ConsumerFinancialResponseBody
{
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $order_no;
    /**
     * Constructor method for CustomCommitRecurringPaymentResponseBody
     * @uses CustomCommitRecurringPaymentResponseBody::setOrder_no()
     * @param string $order_no
     */
    public function __construct($order_no = null)
    {
        $this
            ->setOrder_no($order_no);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomCommitRecurringPaymentResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomCommitRecurringPaymentResponseBody
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
