<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumerRewardResponseBody StructType
 * @subpackage Structs
 */
class ConsumerRewardResponseBody extends ResponseBody
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
     * The masked_account_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $masked_account_no;
    /**
     * The currency_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $currency_code;
    /**
     * Constructor method for ConsumerRewardResponseBody
     * @uses ConsumerRewardResponseBody::setApproval_code()
     * @uses ConsumerRewardResponseBody::setReserved_field_1()
     * @uses ConsumerRewardResponseBody::setReserved_field_2()
     * @uses ConsumerRewardResponseBody::setReserved_field_3()
     * @uses ConsumerRewardResponseBody::setReserved_field_4()
     * @uses ConsumerRewardResponseBody::setMasked_account_no()
     * @uses ConsumerRewardResponseBody::setCurrency_code()
     * @param string $approval_code
     * @param string $reserved_field_1
     * @param string $reserved_field_2
     * @param string $reserved_field_3
     * @param string $reserved_field_4
     * @param string $masked_account_no
     * @param string $currency_code
     */
    public function __construct($approval_code = null, $reserved_field_1 = null, $reserved_field_2 = null, $reserved_field_3 = null, $reserved_field_4 = null, $masked_account_no = null, $currency_code = null)
    {
        $this
            ->setApproval_code($approval_code)
            ->setReserved_field_1($reserved_field_1)
            ->setReserved_field_2($reserved_field_2)
            ->setReserved_field_3($reserved_field_3)
            ->setReserved_field_4($reserved_field_4)
            ->setMasked_account_no($masked_account_no)
            ->setCurrency_code($currency_code);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * Get masked_account_no value
     * @return string|null
     */
    public function getMasked_account_no()
    {
        return $this->masked_account_no;
    }
    /**
     * Set masked_account_no value
     * @param string $masked_account_no
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ConsumerRewardResponseBody
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
