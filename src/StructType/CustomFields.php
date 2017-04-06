<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomFields StructType
 * @subpackage Structs
 */
class CustomFields extends AbstractStructBase
{
    /**
     * The vpos_merchant
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $vpos_merchant;
    /**
     * The tax_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $tax_id;
    /**
     * The vpos_provision_password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_provision_password;
    /**
     * The vpos_terminal_user_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_terminal_user_id;
    /**
     * The vpos_merchant_email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_merchant_email;
    /**
     * The vpos_terminal_prov_user_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_terminal_prov_user_id;
    /**
     * The vpos_store_key
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $vpos_store_key;
    /**
     * The custom_field_8
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_8;
    /**
     * The custom_field_9
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_9;
    /**
     * The custom_field_10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_10;
    /**
     * The custom_field_11
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_11;
    /**
     * The custom_field_12
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_12;
    /**
     * The custom_field_13
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_13;
    /**
     * The custom_field_14
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_14;
    /**
     * The custom_field_15
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $custom_field_15;
    /**
     * Constructor method for CustomFields
     * @uses CustomFields::setVpos_merchant()
     * @uses CustomFields::setTax_id()
     * @uses CustomFields::setVpos_provision_password()
     * @uses CustomFields::setVpos_terminal_user_id()
     * @uses CustomFields::setVpos_merchant_email()
     * @uses CustomFields::setVpos_terminal_prov_user_id()
     * @uses CustomFields::setVpos_store_key()
     * @uses CustomFields::setCustom_field_8()
     * @uses CustomFields::setCustom_field_9()
     * @uses CustomFields::setCustom_field_10()
     * @uses CustomFields::setCustom_field_11()
     * @uses CustomFields::setCustom_field_12()
     * @uses CustomFields::setCustom_field_13()
     * @uses CustomFields::setCustom_field_14()
     * @uses CustomFields::setCustom_field_15()
     * @param string $vpos_merchant
     * @param string $tax_id
     * @param string $vpos_provision_password
     * @param string $vpos_terminal_user_id
     * @param string $vpos_merchant_email
     * @param string $vpos_terminal_prov_user_id
     * @param string $vpos_store_key
     * @param string $custom_field_8
     * @param string $custom_field_9
     * @param string $custom_field_10
     * @param string $custom_field_11
     * @param string $custom_field_12
     * @param string $custom_field_13
     * @param string $custom_field_14
     * @param string $custom_field_15
     */
    public function __construct($vpos_merchant = null, $tax_id = null, $vpos_provision_password = null, $vpos_terminal_user_id = null, $vpos_merchant_email = null, $vpos_terminal_prov_user_id = null, $vpos_store_key = null, $custom_field_8 = null, $custom_field_9 = null, $custom_field_10 = null, $custom_field_11 = null, $custom_field_12 = null, $custom_field_13 = null, $custom_field_14 = null, $custom_field_15 = null)
    {
        $this
            ->setVpos_merchant($vpos_merchant)
            ->setTax_id($tax_id)
            ->setVpos_provision_password($vpos_provision_password)
            ->setVpos_terminal_user_id($vpos_terminal_user_id)
            ->setVpos_merchant_email($vpos_merchant_email)
            ->setVpos_terminal_prov_user_id($vpos_terminal_prov_user_id)
            ->setVpos_store_key($vpos_store_key)
            ->setCustom_field_8($custom_field_8)
            ->setCustom_field_9($custom_field_9)
            ->setCustom_field_10($custom_field_10)
            ->setCustom_field_11($custom_field_11)
            ->setCustom_field_12($custom_field_12)
            ->setCustom_field_13($custom_field_13)
            ->setCustom_field_14($custom_field_14)
            ->setCustom_field_15($custom_field_15);
    }
    /**
     * Get vpos_merchant value
     * @return string
     */
    public function getVpos_merchant()
    {
        return $this->vpos_merchant;
    }
    /**
     * Set vpos_merchant value
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vpos_merchant
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_merchant($vpos_merchant = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($vpos_merchant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vpos_merchant, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        $this->vpos_merchant = $vpos_merchant;
        return $this;
    }
    /**
     * Get tax_id value
     * @return string|null
     */
    public function getTax_id()
    {
        return $this->tax_id;
    }
    /**
     * Set tax_id value
     * @param string $tax_id
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setTax_id($tax_id = null)
    {
        // validation for constraint: string
        if (!is_null($tax_id) && !is_string($tax_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tax_id)), __LINE__);
        }
        $this->tax_id = $tax_id;
        return $this;
    }
    /**
     * Get vpos_provision_password value
     * @return string|null
     */
    public function getVpos_provision_password()
    {
        return $this->vpos_provision_password;
    }
    /**
     * Set vpos_provision_password value
     * @param string $vpos_provision_password
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_provision_password($vpos_provision_password = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_provision_password) && !is_string($vpos_provision_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_provision_password)), __LINE__);
        }
        $this->vpos_provision_password = $vpos_provision_password;
        return $this;
    }
    /**
     * Get vpos_terminal_user_id value
     * @return string|null
     */
    public function getVpos_terminal_user_id()
    {
        return $this->vpos_terminal_user_id;
    }
    /**
     * Set vpos_terminal_user_id value
     * @param string $vpos_terminal_user_id
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_terminal_user_id($vpos_terminal_user_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_terminal_user_id) && !is_string($vpos_terminal_user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_terminal_user_id)), __LINE__);
        }
        $this->vpos_terminal_user_id = $vpos_terminal_user_id;
        return $this;
    }
    /**
     * Get vpos_merchant_email value
     * @return string|null
     */
    public function getVpos_merchant_email()
    {
        return $this->vpos_merchant_email;
    }
    /**
     * Set vpos_merchant_email value
     * @param string $vpos_merchant_email
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_merchant_email($vpos_merchant_email = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_merchant_email) && !is_string($vpos_merchant_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_merchant_email)), __LINE__);
        }
        $this->vpos_merchant_email = $vpos_merchant_email;
        return $this;
    }
    /**
     * Get vpos_terminal_prov_user_id value
     * @return string|null
     */
    public function getVpos_terminal_prov_user_id()
    {
        return $this->vpos_terminal_prov_user_id;
    }
    /**
     * Set vpos_terminal_prov_user_id value
     * @param string $vpos_terminal_prov_user_id
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_terminal_prov_user_id($vpos_terminal_prov_user_id = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_terminal_prov_user_id) && !is_string($vpos_terminal_prov_user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_terminal_prov_user_id)), __LINE__);
        }
        $this->vpos_terminal_prov_user_id = $vpos_terminal_prov_user_id;
        return $this;
    }
    /**
     * Get vpos_store_key value
     * @return string|null
     */
    public function getVpos_store_key()
    {
        return $this->vpos_store_key;
    }
    /**
     * Set vpos_store_key value
     * @param string $vpos_store_key
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setVpos_store_key($vpos_store_key = null)
    {
        // validation for constraint: string
        if (!is_null($vpos_store_key) && !is_string($vpos_store_key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vpos_store_key)), __LINE__);
        }
        $this->vpos_store_key = $vpos_store_key;
        return $this;
    }
    /**
     * Get custom_field_8 value
     * @return string|null
     */
    public function getCustom_field_8()
    {
        return $this->custom_field_8;
    }
    /**
     * Set custom_field_8 value
     * @param string $custom_field_8
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_8($custom_field_8 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_8) && !is_string($custom_field_8)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_8)), __LINE__);
        }
        $this->custom_field_8 = $custom_field_8;
        return $this;
    }
    /**
     * Get custom_field_9 value
     * @return string|null
     */
    public function getCustom_field_9()
    {
        return $this->custom_field_9;
    }
    /**
     * Set custom_field_9 value
     * @param string $custom_field_9
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_9($custom_field_9 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_9) && !is_string($custom_field_9)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_9)), __LINE__);
        }
        $this->custom_field_9 = $custom_field_9;
        return $this;
    }
    /**
     * Get custom_field_10 value
     * @return string|null
     */
    public function getCustom_field_10()
    {
        return $this->custom_field_10;
    }
    /**
     * Set custom_field_10 value
     * @param string $custom_field_10
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_10($custom_field_10 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_10) && !is_string($custom_field_10)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_10)), __LINE__);
        }
        $this->custom_field_10 = $custom_field_10;
        return $this;
    }
    /**
     * Get custom_field_11 value
     * @return string|null
     */
    public function getCustom_field_11()
    {
        return $this->custom_field_11;
    }
    /**
     * Set custom_field_11 value
     * @param string $custom_field_11
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_11($custom_field_11 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_11) && !is_string($custom_field_11)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_11)), __LINE__);
        }
        $this->custom_field_11 = $custom_field_11;
        return $this;
    }
    /**
     * Get custom_field_12 value
     * @return string|null
     */
    public function getCustom_field_12()
    {
        return $this->custom_field_12;
    }
    /**
     * Set custom_field_12 value
     * @param string $custom_field_12
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_12($custom_field_12 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_12) && !is_string($custom_field_12)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_12)), __LINE__);
        }
        $this->custom_field_12 = $custom_field_12;
        return $this;
    }
    /**
     * Get custom_field_13 value
     * @return string|null
     */
    public function getCustom_field_13()
    {
        return $this->custom_field_13;
    }
    /**
     * Set custom_field_13 value
     * @param string $custom_field_13
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_13($custom_field_13 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_13) && !is_string($custom_field_13)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_13)), __LINE__);
        }
        $this->custom_field_13 = $custom_field_13;
        return $this;
    }
    /**
     * Get custom_field_14 value
     * @return string|null
     */
    public function getCustom_field_14()
    {
        return $this->custom_field_14;
    }
    /**
     * Set custom_field_14 value
     * @param string $custom_field_14
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_14($custom_field_14 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_14) && !is_string($custom_field_14)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_14)), __LINE__);
        }
        $this->custom_field_14 = $custom_field_14;
        return $this;
    }
    /**
     * Get custom_field_15 value
     * @return string|null
     */
    public function getCustom_field_15()
    {
        return $this->custom_field_15;
    }
    /**
     * Set custom_field_15 value
     * @param string $custom_field_15
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
     */
    public function setCustom_field_15($custom_field_15 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_15) && !is_string($custom_field_15)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_15)), __LINE__);
        }
        $this->custom_field_15 = $custom_field_15;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\CustomFields
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
