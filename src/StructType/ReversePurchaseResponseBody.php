<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReversePurchaseResponseBody StructType
 * @subpackage Structs
 */
class ReversePurchaseResponseBody extends ResponseBody
{
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
     * Constructor method for ReversePurchaseResponseBody
     * @uses ReversePurchaseResponseBody::setTransaction_fee_1()
     * @uses ReversePurchaseResponseBody::setTransaction_fee_2()
     * @uses ReversePurchaseResponseBody::setTransaction_fee_3()
     * @param float $transaction_fee_1
     * @param float $transaction_fee_2
     * @param float $transaction_fee_3
     */
    public function __construct($transaction_fee_1 = null, $transaction_fee_2 = null, $transaction_fee_3 = null)
    {
        $this
            ->setTransaction_fee_1($transaction_fee_1)
            ->setTransaction_fee_2($transaction_fee_2)
            ->setTransaction_fee_3($transaction_fee_3);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ReversePurchaseResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ReversePurchaseResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ReversePurchaseResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ReversePurchaseResponseBody
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
