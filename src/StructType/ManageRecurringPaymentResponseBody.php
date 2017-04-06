<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageRecurringPaymentResponseBody StructType
 * @subpackage Structs
 */
class ManageRecurringPaymentResponseBody extends ResponseBody
{
    /**
     * The end_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $end_date;
    /**
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $msisdn;
    /**
     * The list_account_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $list_account_name;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The masked_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_account_no;
    /**
     * Constructor method for ManageRecurringPaymentResponseBody
     * @uses ManageRecurringPaymentResponseBody::setEnd_date()
     * @uses ManageRecurringPaymentResponseBody::setMsisdn()
     * @uses ManageRecurringPaymentResponseBody::setList_account_name()
     * @uses ManageRecurringPaymentResponseBody::setAmount()
     * @uses ManageRecurringPaymentResponseBody::setMasked_account_no()
     * @param string $end_date
     * @param string $msisdn
     * @param string $list_account_name
     * @param int $amount
     * @param string $masked_account_no
     */
    public function __construct($end_date = null, $msisdn = null, $list_account_name = null, $amount = null, $masked_account_no = null)
    {
        $this
            ->setEnd_date($end_date)
            ->setMsisdn($msisdn)
            ->setList_account_name($list_account_name)
            ->setAmount($amount)
            ->setMasked_account_no($masked_account_no);
    }
    /**
     * Get end_date value
     * @return string
     */
    public function getEnd_date()
    {
        return $this->end_date;
    }
    /**
     * Set end_date value
     * @param string $end_date
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
     */
    public function setEnd_date($end_date = null)
    {
        // validation for constraint: string
        if (!is_null($end_date) && !is_string($end_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end_date)), __LINE__);
        }
        $this->end_date = $end_date;
        return $this;
    }
    /**
     * Get msisdn value
     * @return string|null
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
     */
    public function setMsisdn($msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($msisdn) && !is_string($msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msisdn)), __LINE__);
        }
        $this->msisdn = $msisdn;
        return $this;
    }
    /**
     * Get list_account_name value
     * @return string|null
     */
    public function getList_account_name()
    {
        return $this->list_account_name;
    }
    /**
     * Set list_account_name value
     * @param string $list_account_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
     */
    public function setList_account_name($list_account_name = null)
    {
        // validation for constraint: string
        if (!is_null($list_account_name) && !is_string($list_account_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_account_name)), __LINE__);
        }
        $this->list_account_name = $list_account_name;
        return $this;
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: int
        if (!is_null($amount) && !is_numeric($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get masked_account_no value
     * @return string|null
     */
    public function getMasked_account_no()
    {
        return $this->masked_account_no;
    }
    /**
     * Set masked_account_no value
     * @param string $masked_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
     */
    public function setMasked_account_no($masked_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_account_no) && !is_string($masked_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_account_no)), __LINE__);
        }
        $this->masked_account_no = $masked_account_no;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ManageRecurringPaymentResponseBody
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
