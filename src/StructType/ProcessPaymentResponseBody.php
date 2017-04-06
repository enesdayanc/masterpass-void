<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessPaymentResponseBody StructType
 * @subpackage Structs
 */
class ProcessPaymentResponseBody extends ConsumerFinancialResponseBody
{
    /**
     * The merchant_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $merchant_name;
    /**
     * The reconciliation_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reconciliation_date;
    /**
     * The masked_sender_rta
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_sender_rta;
    /**
     * The requestOrderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $requestOrderId;
    /**
     * Constructor method for ProcessPaymentResponseBody
     * @uses ProcessPaymentResponseBody::setMerchant_name()
     * @uses ProcessPaymentResponseBody::setReconciliation_date()
     * @uses ProcessPaymentResponseBody::setMasked_sender_rta()
     * @uses ProcessPaymentResponseBody::setRequestOrderId()
     * @param string $merchant_name
     * @param string $reconciliation_date
     * @param string $masked_sender_rta
     * @param string $requestOrderId
     */
    public function __construct($merchant_name = null, $reconciliation_date = null, $masked_sender_rta = null, $requestOrderId = null)
    {
        $this
            ->setMerchant_name($merchant_name)
            ->setReconciliation_date($reconciliation_date)
            ->setMasked_sender_rta($masked_sender_rta)
            ->setRequestOrderId($requestOrderId);
    }
    /**
     * Get merchant_name value
     * @return string|null
     */
    public function getMerchant_name()
    {
        return $this->merchant_name;
    }
    /**
     * Set merchant_name value
     * @param string $merchant_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ProcessPaymentResponseBody
     */
    public function setMerchant_name($merchant_name = null)
    {
        // validation for constraint: string
        if (!is_null($merchant_name) && !is_string($merchant_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchant_name)), __LINE__);
        }
        $this->merchant_name = $merchant_name;
        return $this;
    }
    /**
     * Get reconciliation_date value
     * @return string|null
     */
    public function getReconciliation_date()
    {
        return $this->reconciliation_date;
    }
    /**
     * Set reconciliation_date value
     * @param string $reconciliation_date
     * @return \Enesdayanc\MasterpassVoid\StructType\ProcessPaymentResponseBody
     */
    public function setReconciliation_date($reconciliation_date = null)
    {
        // validation for constraint: string
        if (!is_null($reconciliation_date) && !is_string($reconciliation_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reconciliation_date)), __LINE__);
        }
        $this->reconciliation_date = $reconciliation_date;
        return $this;
    }
    /**
     * Get masked_sender_rta value
     * @return string|null
     */
    public function getMasked_sender_rta()
    {
        return $this->masked_sender_rta;
    }
    /**
     * Set masked_sender_rta value
     * @param string $masked_sender_rta
     * @return \Enesdayanc\MasterpassVoid\StructType\ProcessPaymentResponseBody
     */
    public function setMasked_sender_rta($masked_sender_rta = null)
    {
        // validation for constraint: string
        if (!is_null($masked_sender_rta) && !is_string($masked_sender_rta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_sender_rta)), __LINE__);
        }
        $this->masked_sender_rta = $masked_sender_rta;
        return $this;
    }
    /**
     * Get requestOrderId value
     * @return string|null
     */
    public function getRequestOrderId()
    {
        return $this->requestOrderId;
    }
    /**
     * Set requestOrderId value
     * @param string $requestOrderId
     * @return \Enesdayanc\MasterpassVoid\StructType\ProcessPaymentResponseBody
     */
    public function setRequestOrderId($requestOrderId = null)
    {
        // validation for constraint: string
        if (!is_null($requestOrderId) && !is_string($requestOrderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestOrderId)), __LINE__);
        }
        $this->requestOrderId = $requestOrderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ProcessPaymentResponseBody
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
