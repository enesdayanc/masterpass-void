<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantRegistrationResponseBody StructType
 * @subpackage Structs
 */
class MerchantRegistrationResponseBody extends ResponseBody
{
    /**
     * The registration_response_desc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $registration_response_desc;
    /**
     * The merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $merchant_id;
    /**
     * The biller_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $biller_code;
    /**
     * The macro_merchant_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $macro_merchant_id;
    /**
     * The merchant_id_alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $merchant_id_alias;
    /**
     * The acquirer_ica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $acquirer_ica;
    /**
     * The custom_fields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public $custom_fields;
    /**
     * Constructor method for MerchantRegistrationResponseBody
     * @uses MerchantRegistrationResponseBody::setRegistration_response_desc()
     * @uses MerchantRegistrationResponseBody::setMerchant_id()
     * @uses MerchantRegistrationResponseBody::setBiller_code()
     * @uses MerchantRegistrationResponseBody::setMacro_merchant_id()
     * @uses MerchantRegistrationResponseBody::setMerchant_id_alias()
     * @uses MerchantRegistrationResponseBody::setAcquirer_ica()
     * @uses MerchantRegistrationResponseBody::setCustom_fields()
     * @param string $registration_response_desc
     * @param string $merchant_id
     * @param string $biller_code
     * @param string $macro_merchant_id
     * @param string $merchant_id_alias
     * @param string $acquirer_ica
     * @param \Enesdayanc\MasterpassVoid\StructType\CustomFields $custom_fields
     */
    public function __construct($registration_response_desc = null, $merchant_id = null, $biller_code = null, $macro_merchant_id = null, $merchant_id_alias = null, $acquirer_ica = null, \Enesdayanc\MasterpassVoid\StructType\CustomFields $custom_fields = null)
    {
        $this
            ->setRegistration_response_desc($registration_response_desc)
            ->setMerchant_id($merchant_id)
            ->setBiller_code($biller_code)
            ->setMacro_merchant_id($macro_merchant_id)
            ->setMerchant_id_alias($merchant_id_alias)
            ->setAcquirer_ica($acquirer_ica)
            ->setCustom_fields($custom_fields);
    }
    /**
     * Get registration_response_desc value
     * @return string|null
     */
    public function getRegistration_response_desc()
    {
        return $this->registration_response_desc;
    }
    /**
     * Set registration_response_desc value
     * @param string $registration_response_desc
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setRegistration_response_desc($registration_response_desc = null)
    {
        // validation for constraint: string
        if (!is_null($registration_response_desc) && !is_string($registration_response_desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration_response_desc)), __LINE__);
        }
        $this->registration_response_desc = $registration_response_desc;
        return $this;
    }
    /**
     * Get merchant_id value
     * @return string|null
     */
    public function getMerchant_id()
    {
        return $this->merchant_id;
    }
    /**
     * Set merchant_id value
     * @param string $merchant_id
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setMerchant_id($merchant_id = null)
    {
        // validation for constraint: string
        if (!is_null($merchant_id) && !is_string($merchant_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchant_id)), __LINE__);
        }
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Get biller_code value
     * @return string|null
     */
    public function getBiller_code()
    {
        return $this->biller_code;
    }
    /**
     * Set biller_code value
     * @param string $biller_code
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setBiller_code($biller_code = null)
    {
        // validation for constraint: string
        if (!is_null($biller_code) && !is_string($biller_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($biller_code)), __LINE__);
        }
        $this->biller_code = $biller_code;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
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
     * Get merchant_id_alias value
     * @return string|null
     */
    public function getMerchant_id_alias()
    {
        return $this->merchant_id_alias;
    }
    /**
     * Set merchant_id_alias value
     * @param string $merchant_id_alias
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setMerchant_id_alias($merchant_id_alias = null)
    {
        // validation for constraint: string
        if (!is_null($merchant_id_alias) && !is_string($merchant_id_alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchant_id_alias)), __LINE__);
        }
        $this->merchant_id_alias = $merchant_id_alias;
        return $this;
    }
    /**
     * Get acquirer_ica value
     * @return string|null
     */
    public function getAcquirer_ica()
    {
        return $this->acquirer_ica;
    }
    /**
     * Set acquirer_ica value
     * @param string $acquirer_ica
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setAcquirer_ica($acquirer_ica = null)
    {
        // validation for constraint: string
        if (!is_null($acquirer_ica) && !is_string($acquirer_ica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acquirer_ica)), __LINE__);
        }
        $this->acquirer_ica = $acquirer_ica;
        return $this;
    }
    /**
     * Get custom_fields value
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields|null
     */
    public function getCustom_fields()
    {
        return $this->custom_fields;
    }
    /**
     * Set custom_fields value
     * @param \Enesdayanc\MasterpassVoid\StructType\CustomFields $custom_fields
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
     */
    public function setCustom_fields(\Enesdayanc\MasterpassVoid\StructType\CustomFields $custom_fields = null)
    {
        $this->custom_fields = $custom_fields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\MerchantRegistrationResponseBody
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
