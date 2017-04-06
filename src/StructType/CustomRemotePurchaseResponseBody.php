<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomRemotePurchaseResponseBody StructType
 * @subpackage Structs
 */
class CustomRemotePurchaseResponseBody extends ConsumerFinancialResponseBody
{
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
     * The token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * Constructor method for CustomRemotePurchaseResponseBody
     * @uses CustomRemotePurchaseResponseBody::setReconciliation_date()
     * @uses CustomRemotePurchaseResponseBody::setMasked_sender_rta()
     * @uses CustomRemotePurchaseResponseBody::setRequestOrderId()
     * @uses CustomRemotePurchaseResponseBody::setToken()
     * @param string $reconciliation_date
     * @param string $masked_sender_rta
     * @param string $requestOrderId
     * @param string $token
     */
    public function __construct($reconciliation_date = null, $masked_sender_rta = null, $requestOrderId = null, $token = null)
    {
        $this
            ->setReconciliation_date($reconciliation_date)
            ->setMasked_sender_rta($masked_sender_rta)
            ->setRequestOrderId($requestOrderId)
            ->setToken($token);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomRemotePurchaseResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomRemotePurchaseResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomRemotePurchaseResponseBody
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
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomRemotePurchaseResponseBody
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomRemotePurchaseResponseBody
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
