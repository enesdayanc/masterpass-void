<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoneySendResponseBody StructType
 * @subpackage Structs
 */
class MoneySendResponseBody extends ResponseBody
{
    /**
     * The funding_approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $funding_approval_code;
    /**
     * The payment_approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $payment_approval_code;
    /**
     * The reserved_field_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_1;
    /**
     * The reserved_field_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_2;
    /**
     * The reserved_field_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_3;
    /**
     * The reserved_field_4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $reserved_field_4;
    /**
     * The masked_sender_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_sender_account_no;
    /**
     * The masked_rcpnt_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_rcpnt_account_no;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * The avail_bal_amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $avail_bal_amount;
    /**
     * The reconciliation_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reconciliation_date;
    /**
     * The transaction_fee_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_1;
    /**
     * The transaction_fee_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_2;
    /**
     * The transaction_fee_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_3;
    /**
     * Constructor method for MoneySendResponseBody
     * @uses MoneySendResponseBody::setFunding_approval_code()
     * @uses MoneySendResponseBody::setPayment_approval_code()
     * @uses MoneySendResponseBody::setReserved_field_1()
     * @uses MoneySendResponseBody::setReserved_field_2()
     * @uses MoneySendResponseBody::setReserved_field_3()
     * @uses MoneySendResponseBody::setReserved_field_4()
     * @uses MoneySendResponseBody::setMasked_sender_account_no()
     * @uses MoneySendResponseBody::setMasked_rcpnt_account_no()
     * @uses MoneySendResponseBody::setCurrency_code()
     * @uses MoneySendResponseBody::setAvail_bal_amount()
     * @uses MoneySendResponseBody::setReconciliation_date()
     * @uses MoneySendResponseBody::setTransaction_fee_1()
     * @uses MoneySendResponseBody::setTransaction_fee_2()
     * @uses MoneySendResponseBody::setTransaction_fee_3()
     * @param string $funding_approval_code
     * @param string $payment_approval_code
     * @param string $reserved_field_1
     * @param string $reserved_field_2
     * @param string $reserved_field_3
     * @param string $reserved_field_4
     * @param string $masked_sender_account_no
     * @param string $masked_rcpnt_account_no
     * @param string $currency_code
     * @param float $avail_bal_amount
     * @param string $reconciliation_date
     * @param float $transaction_fee_1
     * @param float $transaction_fee_2
     * @param float $transaction_fee_3
     */
    public function __construct($funding_approval_code = null, $payment_approval_code = null, $reserved_field_1 = null, $reserved_field_2 = null, $reserved_field_3 = null, $reserved_field_4 = null, $masked_sender_account_no = null, $masked_rcpnt_account_no = null, $currency_code = null, $avail_bal_amount = null, $reconciliation_date = null, $transaction_fee_1 = null, $transaction_fee_2 = null, $transaction_fee_3 = null)
    {
        $this
            ->setFunding_approval_code($funding_approval_code)
            ->setPayment_approval_code($payment_approval_code)
            ->setReserved_field_1($reserved_field_1)
            ->setReserved_field_2($reserved_field_2)
            ->setReserved_field_3($reserved_field_3)
            ->setReserved_field_4($reserved_field_4)
            ->setMasked_sender_account_no($masked_sender_account_no)
            ->setMasked_rcpnt_account_no($masked_rcpnt_account_no)
            ->setCurrency_code($currency_code)
            ->setAvail_bal_amount($avail_bal_amount)
            ->setReconciliation_date($reconciliation_date)
            ->setTransaction_fee_1($transaction_fee_1)
            ->setTransaction_fee_2($transaction_fee_2)
            ->setTransaction_fee_3($transaction_fee_3);
    }
    /**
     * Get funding_approval_code value
     * @return string
     */
    public function getFunding_approval_code()
    {
        return $this->funding_approval_code;
    }
    /**
     * Set funding_approval_code value
     * @param string $funding_approval_code
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setFunding_approval_code($funding_approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($funding_approval_code) && !is_string($funding_approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($funding_approval_code)), __LINE__);
        }
        $this->funding_approval_code = $funding_approval_code;
        return $this;
    }
    /**
     * Get payment_approval_code value
     * @return string
     */
    public function getPayment_approval_code()
    {
        return $this->payment_approval_code;
    }
    /**
     * Set payment_approval_code value
     * @param string $payment_approval_code
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setPayment_approval_code($payment_approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($payment_approval_code) && !is_string($payment_approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payment_approval_code)), __LINE__);
        }
        $this->payment_approval_code = $payment_approval_code;
        return $this;
    }
    /**
     * Get reserved_field_1 value
     * @return string
     */
    public function getReserved_field_1()
    {
        return $this->reserved_field_1;
    }
    /**
     * Set reserved_field_1 value
     * @param string $reserved_field_1
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setReserved_field_1($reserved_field_1 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_1) && !is_string($reserved_field_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_1)), __LINE__);
        }
        $this->reserved_field_1 = $reserved_field_1;
        return $this;
    }
    /**
     * Get reserved_field_2 value
     * @return string
     */
    public function getReserved_field_2()
    {
        return $this->reserved_field_2;
    }
    /**
     * Set reserved_field_2 value
     * @param string $reserved_field_2
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setReserved_field_2($reserved_field_2 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_2) && !is_string($reserved_field_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_2)), __LINE__);
        }
        $this->reserved_field_2 = $reserved_field_2;
        return $this;
    }
    /**
     * Get reserved_field_3 value
     * @return string
     */
    public function getReserved_field_3()
    {
        return $this->reserved_field_3;
    }
    /**
     * Set reserved_field_3 value
     * @param string $reserved_field_3
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setReserved_field_3($reserved_field_3 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_3) && !is_string($reserved_field_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_3)), __LINE__);
        }
        $this->reserved_field_3 = $reserved_field_3;
        return $this;
    }
    /**
     * Get reserved_field_4 value
     * @return string
     */
    public function getReserved_field_4()
    {
        return $this->reserved_field_4;
    }
    /**
     * Set reserved_field_4 value
     * @param string $reserved_field_4
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setReserved_field_4($reserved_field_4 = null)
    {
        // validation for constraint: string
        if (!is_null($reserved_field_4) && !is_string($reserved_field_4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserved_field_4)), __LINE__);
        }
        $this->reserved_field_4 = $reserved_field_4;
        return $this;
    }
    /**
     * Get masked_sender_account_no value
     * @return string|null
     */
    public function getMasked_sender_account_no()
    {
        return $this->masked_sender_account_no;
    }
    /**
     * Set masked_sender_account_no value
     * @param string $masked_sender_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setMasked_sender_account_no($masked_sender_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_sender_account_no) && !is_string($masked_sender_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_sender_account_no)), __LINE__);
        }
        $this->masked_sender_account_no = $masked_sender_account_no;
        return $this;
    }
    /**
     * Get masked_rcpnt_account_no value
     * @return string|null
     */
    public function getMasked_rcpnt_account_no()
    {
        return $this->masked_rcpnt_account_no;
    }
    /**
     * Set masked_rcpnt_account_no value
     * @param string $masked_rcpnt_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setMasked_rcpnt_account_no($masked_rcpnt_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_rcpnt_account_no) && !is_string($masked_rcpnt_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_rcpnt_account_no)), __LINE__);
        }
        $this->masked_rcpnt_account_no = $masked_rcpnt_account_no;
        return $this;
    }
    /**
     * Get currency_code value
     * @return string|null
     */
    public function getCurrency_code()
    {
        return $this->currency_code;
    }
    /**
     * Set currency_code value
     * @param string $currency_code
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setCurrency_code($currency_code = null)
    {
        // validation for constraint: string
        if (!is_null($currency_code) && !is_string($currency_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency_code)), __LINE__);
        }
        $this->currency_code = $currency_code;
        return $this;
    }
    /**
     * Get avail_bal_amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getAvail_bal_amount()
    {
        return isset($this->avail_bal_amount) ? $this->avail_bal_amount : null;
    }
    /**
     * Set avail_bal_amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $avail_bal_amount
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setAvail_bal_amount($avail_bal_amount = null)
    {
        if (is_null($avail_bal_amount) || (is_array($avail_bal_amount) && empty($avail_bal_amount))) {
            unset($this->avail_bal_amount);
        } else {
            $this->avail_bal_amount = $avail_bal_amount;
        }
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
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
     * Get transaction_fee_1 value
     * @return float|null
     */
    public function getTransaction_fee_1()
    {
        return $this->transaction_fee_1;
    }
    /**
     * Set transaction_fee_1 value
     * @param float $transaction_fee_1
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setTransaction_fee_1($transaction_fee_1 = null)
    {
        $this->transaction_fee_1 = $transaction_fee_1;
        return $this;
    }
    /**
     * Get transaction_fee_2 value
     * @return float|null
     */
    public function getTransaction_fee_2()
    {
        return $this->transaction_fee_2;
    }
    /**
     * Set transaction_fee_2 value
     * @param float $transaction_fee_2
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setTransaction_fee_2($transaction_fee_2 = null)
    {
        $this->transaction_fee_2 = $transaction_fee_2;
        return $this;
    }
    /**
     * Get transaction_fee_3 value
     * @return float|null
     */
    public function getTransaction_fee_3()
    {
        return $this->transaction_fee_3;
    }
    /**
     * Set transaction_fee_3 value
     * @param float $transaction_fee_3
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
     */
    public function setTransaction_fee_3($transaction_fee_3 = null)
    {
        $this->transaction_fee_3 = $transaction_fee_3;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\MoneySendResponseBody
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
