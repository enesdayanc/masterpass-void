<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionQuery StructType
 * @subpackage Structs
 */
class TransactionQuery extends AbstractStructBase
{
    /**
     * The TransactionVoidRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: s1:TransactionVoidRequest
     * @var \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
     */
    public $TransactionVoidRequest;
    /**
     * Constructor method for TransactionQuery
     * @uses TransactionQuery::setTransactionVoidRequest()
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest $transactionVoidRequest
     */
    public function __construct(\Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest $transactionVoidRequest = null)
    {
        $this
            ->setTransactionVoidRequest($transactionVoidRequest);
    }
    /**
     * Get TransactionVoidRequest value
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
     */
    public function getTransactionVoidRequest()
    {
        return $this->TransactionVoidRequest;
    }
    /**
     * Set TransactionVoidRequest value
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest $transactionVoidRequest
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQuery
     */
    public function setTransactionVoidRequest(\Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest $transactionVoidRequest = null)
    {
        $this->TransactionVoidRequest = $transactionVoidRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQuery
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
