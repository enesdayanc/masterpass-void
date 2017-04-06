<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionVoidRequestBody StructType
 * @subpackage Structs
 */
class TransactionVoidRequestBody extends AbstractStructBase
{
    /**
     * The msisdn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $msisdn;
    /**
     * The order_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $order_no;
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
     * The transaction_fee_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $transaction_fee_1;
    /**
     * The transaction_fee_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $transaction_fee_2;
    /**
     * The transaction_fee_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $transaction_fee_3;
    /**
     * The macro_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $macro_merchant_id;
    /**
     * The trans_date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $trans_date;
    /**
     * The client_ip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $client_ip;
    /**
     * Constructor method for TransactionVoidRequestBody
     * @uses TransactionVoidRequestBody::setMsisdn()
     * @uses TransactionVoidRequestBody::setOrder_no()
     * @uses TransactionVoidRequestBody::setApproval_code()
     * @uses TransactionVoidRequestBody::setTransaction_fee_1()
     * @uses TransactionVoidRequestBody::setTransaction_fee_2()
     * @uses TransactionVoidRequestBody::setTransaction_fee_3()
     * @uses TransactionVoidRequestBody::setMacro_merchant_id()
     * @uses TransactionVoidRequestBody::setTrans_date()
     * @uses TransactionVoidRequestBody::setClient_ip()
     * @param string $msisdn
     * @param string $order_no
     * @param string $approval_code
     * @param float $transaction_fee_1
     * @param float $transaction_fee_2
     * @param float $transaction_fee_3
     * @param string $macro_merchant_id
     * @param string $trans_date
     * @param string $client_ip
     */
    public function __construct($msisdn = null, $order_no = null, $approval_code = null, $transaction_fee_1 = null, $transaction_fee_2 = null, $transaction_fee_3 = null, $macro_merchant_id = null, $trans_date = null, $client_ip = null)
    {
        $this
            ->setMsisdn($msisdn)
            ->setOrder_no($order_no)
            ->setApproval_code($approval_code)
            ->setTransaction_fee_1($transaction_fee_1)
            ->setTransaction_fee_2($transaction_fee_2)
            ->setTransaction_fee_3($transaction_fee_3)
            ->setMacro_merchant_id($macro_merchant_id)
            ->setTrans_date($trans_date)
            ->setClient_ip($client_ip);
    }
    /**
     * Get msisdn value
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }
    /**
     * Set msisdn value
     * @param string $msisdn
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
     * Get order_no value
     * @return string
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    /**
     * Set order_no value
     * @param string $order_no
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
     * Get transaction_fee_1 value
     * @return float
     */
    public function getTransaction_fee_1()
    {
        return $this->transaction_fee_1;
    }
    /**
     * Set transaction_fee_1 value
     * @param float $transaction_fee_1
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
     */
    public function setTransaction_fee_1($transaction_fee_1 = null)
    {
        $this->transaction_fee_1 = $transaction_fee_1;
        return $this;
    }
    /**
     * Get transaction_fee_2 value
     * @return float
     */
    public function getTransaction_fee_2()
    {
        return $this->transaction_fee_2;
    }
    /**
     * Set transaction_fee_2 value
     * @param float $transaction_fee_2
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
     */
    public function setTransaction_fee_2($transaction_fee_2 = null)
    {
        $this->transaction_fee_2 = $transaction_fee_2;
        return $this;
    }
    /**
     * Get transaction_fee_3 value
     * @return float
     */
    public function getTransaction_fee_3()
    {
        return $this->transaction_fee_3;
    }
    /**
     * Set transaction_fee_3 value
     * @param float $transaction_fee_3
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
     */
    public function setTransaction_fee_3($transaction_fee_3 = null)
    {
        $this->transaction_fee_3 = $transaction_fee_3;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
     * Get client_ip value
     * @return string|null
     */
    public function getClient_ip()
    {
        return $this->client_ip;
    }
    /**
     * Set client_ip value
     * @param string $client_ip
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
     */
    public function setClient_ip($client_ip = null)
    {
        // validation for constraint: string
        if (!is_null($client_ip) && !is_string($client_ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_ip)), __LINE__);
        }
        $this->client_ip = $client_ip;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
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
