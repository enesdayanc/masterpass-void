<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyUserResponseBody StructType
 * @subpackage Structs
 */
class VerifyUserResponseBody extends ResponseBody
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * The list_items
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem
     */
    public $list_items;
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $token;
    /**
     * Constructor method for VerifyUserResponseBody
     * @uses VerifyUserResponseBody::setStatus()
     * @uses VerifyUserResponseBody::setList_items()
     * @uses VerifyUserResponseBody::setToken()
     * @param string $status
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items
     * @param string $token
     */
    public function __construct($status = null, \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items = null, $token = null)
    {
        $this
            ->setStatus($status)
            ->setList_items($list_items)
            ->setToken($token);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Enesdayanc\MasterpassVoid\StructType\VerifyUserResponseBody
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get list_items value
     * @return \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem|null
     */
    public function getList_items()
    {
        return $this->list_items;
    }
    /**
     * Set list_items value
     * @param \Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items
     * @return \Enesdayanc\MasterpassVoid\StructType\VerifyUserResponseBody
     */
    public function setList_items(\Enesdayanc\MasterpassVoid\ArrayType\ArrayOfListItem $list_items = null)
    {
        $this->list_items = $list_items;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\VerifyUserResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\VerifyUserResponseBody
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
