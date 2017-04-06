<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionVoidResponseBody StructType
 * @subpackage Structs
 */
class TransactionVoidResponseBody extends ResponseBody
{
    /**
     * The approval_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $approval_code;
    /**
     * The trans_ref_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $trans_ref_no;
    /**
     * The consumer_msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $consumer_msisdn;
    /**
     * The masked_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $masked_account_no;
    /**
     * The masked_mobile_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $masked_mobile_account_no;
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
     * The trans_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $trans_date;
    /**
     * The transaction_fee_1
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_1;
    /**
     * The transaction_fee_2
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_2;
    /**
     * The transaction_fee_3
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $transaction_fee_3;
    /**
     * The sku
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $sku;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $amount;
    /**
     * The macro_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $macro_merchant_id;
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
     * Constructor method for TransactionVoidResponseBody
     * @uses TransactionVoidResponseBody::setApproval_code()
     * @uses TransactionVoidResponseBody::setTrans_ref_no()
     * @uses TransactionVoidResponseBody::setConsumer_msisdn()
     * @uses TransactionVoidResponseBody::setMasked_account_no()
     * @uses TransactionVoidResponseBody::setMasked_mobile_account_no()
     * @uses TransactionVoidResponseBody::setFunding_approval_code()
     * @uses TransactionVoidResponseBody::setPayment_approval_code()
     * @uses TransactionVoidResponseBody::setTrans_date()
     * @uses TransactionVoidResponseBody::setTransaction_fee_1()
     * @uses TransactionVoidResponseBody::setTransaction_fee_2()
     * @uses TransactionVoidResponseBody::setTransaction_fee_3()
     * @uses TransactionVoidResponseBody::setSku()
     * @uses TransactionVoidResponseBody::setCurrency_code()
     * @uses TransactionVoidResponseBody::setAmount()
     * @uses TransactionVoidResponseBody::setMacro_merchant_id()
     * @uses TransactionVoidResponseBody::setMerchant_name()
     * @uses TransactionVoidResponseBody::setReconciliation_date()
     * @param string $approval_code
     * @param string $trans_ref_no
     * @param string $consumer_msisdn
     * @param string $masked_account_no
     * @param string $masked_mobile_account_no
     * @param string $funding_approval_code
     * @param string $payment_approval_code
     * @param string $trans_date
     * @param float $transaction_fee_1
     * @param float $transaction_fee_2
     * @param float $transaction_fee_3
     * @param string $sku
     * @param string $currency_code
     * @param int $amount
     * @param string $macro_merchant_id
     * @param string $merchant_name
     * @param string $reconciliation_date
     */
    public function __construct($approval_code = null, $trans_ref_no = null, $consumer_msisdn = null, $masked_account_no = null, $masked_mobile_account_no = null, $funding_approval_code = null, $payment_approval_code = null, $trans_date = null, $transaction_fee_1 = 0, $transaction_fee_2 = 0, $transaction_fee_3 = 0, $sku = null, $currency_code = null, $amount = null, $macro_merchant_id = null, $merchant_name = null, $reconciliation_date = null)
    {
        $this
            ->setApproval_code($approval_code)
            ->setTrans_ref_no($trans_ref_no)
            ->setConsumer_msisdn($consumer_msisdn)
            ->setMasked_account_no($masked_account_no)
            ->setMasked_mobile_account_no($masked_mobile_account_no)
            ->setFunding_approval_code($funding_approval_code)
            ->setPayment_approval_code($payment_approval_code)
            ->setTrans_date($trans_date)
            ->setTransaction_fee_1($transaction_fee_1)
            ->setTransaction_fee_2($transaction_fee_2)
            ->setTransaction_fee_3($transaction_fee_3)
            ->setSku($sku)
            ->setCurrency_code($currency_code)
            ->setAmount($amount)
            ->setMacro_merchant_id($macro_merchant_id)
            ->setMerchant_name($merchant_name)
            ->setReconciliation_date($reconciliation_date);
    }
    /**
     * Get approval_code value
     * @return string
     */
    public function getApproval_code()
    {
        return $this->approval_code;
    }
    /**
     * Set approval_code value
     * @param string $approval_code
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setApproval_code($approval_code = null)
    {
        // validation for constraint: string
        if (!is_null($approval_code) && !is_string($approval_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approval_code)), __LINE__);
        }
        $this->approval_code = $approval_code;
        return $this;
    }
    /**
     * Get trans_ref_no value
     * @return string
     */
    public function getTrans_ref_no()
    {
        return $this->trans_ref_no;
    }
    /**
     * Set trans_ref_no value
     * @param string $trans_ref_no
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setTrans_ref_no($trans_ref_no = null)
    {
        // validation for constraint: string
        if (!is_null($trans_ref_no) && !is_string($trans_ref_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trans_ref_no)), __LINE__);
        }
        $this->trans_ref_no = $trans_ref_no;
        return $this;
    }
    /**
     * Get consumer_msisdn value
     * @return string
     */
    public function getConsumer_msisdn()
    {
        return $this->consumer_msisdn;
    }
    /**
     * Set consumer_msisdn value
     * @param string $consumer_msisdn
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setConsumer_msisdn($consumer_msisdn = null)
    {
        // validation for constraint: string
        if (!is_null($consumer_msisdn) && !is_string($consumer_msisdn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consumer_msisdn)), __LINE__);
        }
        $this->consumer_msisdn = $consumer_msisdn;
        return $this;
    }
    /**
     * Get masked_account_no value
     * @return string
     */
    public function getMasked_account_no()
    {
        return $this->masked_account_no;
    }
    /**
     * Set masked_account_no value
     * @param string $masked_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * Get masked_mobile_account_no value
     * @return string
     */
    public function getMasked_mobile_account_no()
    {
        return $this->masked_mobile_account_no;
    }
    /**
     * Set masked_mobile_account_no value
     * @param string $masked_mobile_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setMasked_mobile_account_no($masked_mobile_account_no = null)
    {
        // validation for constraint: string
        if (!is_null($masked_mobile_account_no) && !is_string($masked_mobile_account_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($masked_mobile_account_no)), __LINE__);
        }
        $this->masked_mobile_account_no = $masked_mobile_account_no;
        return $this;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * Get trans_date value
     * @return string|null
     */
    public function getTrans_date()
    {
        return $this->trans_date;
    }
    /**
     * Set trans_date value
     * @param string $trans_date
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setTrans_date($trans_date = null)
    {
        // validation for constraint: string
        if (!is_null($trans_date) && !is_string($trans_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trans_date)), __LINE__);
        }
        $this->trans_date = $trans_date;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setTransaction_fee_1($transaction_fee_1 = 0)
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setTransaction_fee_2($transaction_fee_2 = 0)
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setTransaction_fee_3($transaction_fee_3 = 0)
    {
        $this->transaction_fee_3 = $transaction_fee_3;
        return $this;
    }
    /**
     * Get sku value
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }
    /**
     * Set sku value
     * @param string $sku
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
     */
    public function setSku($sku = null)
    {
        // validation for constraint: string
        if (!is_null($sku) && !is_string($sku)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sku)), __LINE__);
        }
        $this->sku = $sku;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidResponseBody
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
