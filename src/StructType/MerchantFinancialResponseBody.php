<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantFinancialResponseBody StructType
 * @subpackage Structs
 */
class MerchantFinancialResponseBody extends ResponseBody
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
     * Constructor method for MerchantFinancialResponseBody
     * @uses MerchantFinancialResponseBody::setApproval_code()
     * @uses MerchantFinancialResponseBody::setMasked_account_no()
     * @uses MerchantFinancialResponseBody::setCurrency_code()
     * @param string $approval_code
     * @param string $masked_account_no
     * @param string $currency_code
     */
    public function __construct($approval_code = null, $masked_account_no = null, $currency_code = null)
    {
        $this
            ->setApproval_code($approval_code)
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantFinancialResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantFinancialResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantFinancialResponseBody
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantFinancialResponseBody
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
