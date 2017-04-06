<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionQueryResponse StructType
 * @subpackage Structs
 */
class TransactionQueryResponse extends AbstractStructBase
{
    /**
     * The TransactionQueryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult
     */
    public $TransactionQueryResult;
    /**
     * Constructor method for TransactionQueryResponse
     * @uses TransactionQueryResponse::setTransactionQueryResult()
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult $transactionQueryResult
     */
    public function __construct(\Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult $transactionQueryResult = null)
    {
        $this
            ->setTransactionQueryResult($transactionQueryResult);
    }
    /**
     * Get TransactionQueryResult value
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult|null
     */
    public function getTransactionQueryResult()
    {
        return $this->TransactionQueryResult;
    }
    /**
     * Set TransactionQueryResult value
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult $transactionQueryResult
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponse
     */
    public function setTransactionQueryResult(\Enesdayanc\MasterpassVoid\StructType\TransactionQueryResult $transactionQueryResult = null)
    {
        $this->TransactionQueryResult = $transactionQueryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponse
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
