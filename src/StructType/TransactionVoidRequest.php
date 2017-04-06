<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionVoidRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * @subpackage Structs
 */
class TransactionVoidRequest extends AbstractStructBase
{
    /**
     * The transaction_header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public $transaction_header;
    /**
     * The transaction_body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody
     */
    public $transaction_body;
    /**
     * The additional_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\AdditionalFields
     */
    public $additional_fields;
    /**
     * Constructor method for TransactionVoidRequest
     * @uses TransactionVoidRequest::setTransaction_header()
     * @uses TransactionVoidRequest::setTransaction_body()
     * @uses TransactionVoidRequest::setAdditional_fields()
     * @param \Enesdayanc\MasterpassVoid\StructType\RequestHeader $transaction_header
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody $transaction_body
     * @param \Enesdayanc\MasterpassVoid\StructType\AdditionalFields $additional_fields
     */
    public function __construct(\Enesdayanc\MasterpassVoid\StructType\RequestHeader $transaction_header = null, \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody $transaction_body = null, \Enesdayanc\MasterpassVoid\StructType\AdditionalFields $additional_fields = null)
    {
        $this
            ->setTransaction_header($transaction_header)
            ->setTransaction_body($transaction_body)
            ->setAdditional_fields($additional_fields);
    }
    /**
     * Get transaction_header value
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader|null
     */
    public function getTransaction_header()
    {
        return $this->transaction_header;
    }
    /**
     * Set transaction_header value
     * @param \Enesdayanc\MasterpassVoid\StructType\RequestHeader $transaction_header
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
     */
    public function setTransaction_header(\Enesdayanc\MasterpassVoid\StructType\RequestHeader $transaction_header = null)
    {
        $this->transaction_header = $transaction_header;
        return $this;
    }
    /**
     * Get transaction_body value
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody|null
     */
    public function getTransaction_body()
    {
        return $this->transaction_body;
    }
    /**
     * Set transaction_body value
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody $transaction_body
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
     */
    public function setTransaction_body(\Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequestBody $transaction_body = null)
    {
        $this->transaction_body = $transaction_body;
        return $this;
    }
    /**
     * Get additional_fields value
     * @return \Enesdayanc\MasterpassVoid\StructType\AdditionalFields|null
     */
    public function getAdditional_fields()
    {
        return $this->additional_fields;
    }
    /**
     * Set additional_fields value
     * @param \Enesdayanc\MasterpassVoid\StructType\AdditionalFields $additional_fields
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
     */
    public function setAdditional_fields(\Enesdayanc\MasterpassVoid\StructType\AdditionalFields $additional_fields = null)
    {
        $this->additional_fields = $additional_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionVoidRequest
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
