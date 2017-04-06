<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerAccountSearchResponseBody StructType
 * @subpackage Structs
 */
class ConsumerAccountSearchResponseBody extends ResponseBody
{
    /**
     * The response_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $response_code;
    /**
     * The consumer_accounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount[]
     */
    public $consumer_accounts;
    /**
     * Constructor method for ConsumerAccountSearchResponseBody
     * @uses ConsumerAccountSearchResponseBody::setResponse_code()
     * @uses ConsumerAccountSearchResponseBody::setConsumer_accounts()
     * @param string $response_code
     * @param \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount[] $consumer_accounts
     */
    public function __construct($response_code = null, array $consumer_accounts = array())
    {
        $this
            ->setResponse_code($response_code)
            ->setConsumer_accounts($consumer_accounts);
    }
    /**
     * Get response_code value
     * @return string|null
     */
    public function getResponse_code()
    {
        return $this->response_code;
    }
    /**
     * Set response_code value
     * @param string $response_code
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccountSearchResponseBody
     */
    public function setResponse_code($response_code = null)
    {
        // validation for constraint: string
        if (!is_null($response_code) && !is_string($response_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($response_code)), __LINE__);
        }
        $this->response_code = $response_code;
        return $this;
    }
    /**
     * Get consumer_accounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount[]|null
     */
    public function getConsumer_accounts()
    {
        return isset($this->consumer_accounts) ? $this->consumer_accounts : null;
    }
    /**
     * Set consumer_accounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount[] $consumer_accounts
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccountSearchResponseBody
     */
    public function setConsumer_accounts(array $consumer_accounts = array())
    {
        foreach ($consumer_accounts as $consumerAccountSearchResponseBodyConsumer_accountsItem) {
            // validation for constraint: itemType
            if (!$consumerAccountSearchResponseBodyConsumer_accountsItem instanceof \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount) {
                throw new \InvalidArgumentException(sprintf('The consumer_accounts property can only contain items of \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount, "%s" given', is_object($consumerAccountSearchResponseBodyConsumer_accountsItem) ? get_class($consumerAccountSearchResponseBodyConsumer_accountsItem) : gettype($consumerAccountSearchResponseBodyConsumer_accountsItem)), __LINE__);
            }
        }
        if (is_null($consumer_accounts) || (is_array($consumer_accounts) && empty($consumer_accounts))) {
            unset($this->consumer_accounts);
        } else {
            $this->consumer_accounts = $consumer_accounts;
        }
        return $this;
    }
    /**
     * Add item to consumer_accounts value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount $item
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccountSearchResponseBody
     */
    public function addToConsumer_accounts(\Enesdayanc\MasterpassVoid\StructType\ConsumerAccount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount) {
            throw new \InvalidArgumentException(sprintf('The consumer_accounts property can only contain items of \Enesdayanc\MasterpassVoid\StructType\ConsumerAccount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->consumer_accounts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerAccountSearchResponseBody
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
