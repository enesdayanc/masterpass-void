<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalAccountCustomField StructType
 * @subpackage Structs
 */
class ExternalAccountCustomField extends AbstractStructBase
{
    /**
     * The bank_ica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $bank_ica;
    /**
     * The loyalty_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $loyalty_code;
    /**
     * The product_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $product_name;
    /**
     * The delink_reason
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $delink_reason;
    /**
     * The account_alias_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $account_alias_name;
    /**
     * The card_holder_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $card_holder_name;
    /**
     * The cobrand_card
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $cobrand_card;
    /**
     * The pseudo_pan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $pseudo_pan;
    /**
     * The card_program_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $card_program_code;
    /**
     * The registration_channel_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $registration_channel_id;
    /**
     * The custom_field_7
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_7;
    /**
     * The custom_field_8
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_8;
    /**
     * The custom_field_9
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_9;
    /**
     * The custom_field_10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_10;
    /**
     * The custom_field_11
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_11;
    /**
     * The custom_field_12
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_12;
    /**
     * The custom_field_13
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_13;
    /**
     * The custom_field_14
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_14;
    /**
     * The custom_field_15
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_15;
    /**
     * Constructor method for ExternalAccountCustomField
     * @uses ExternalAccountCustomField::setBank_ica()
     * @uses ExternalAccountCustomField::setLoyalty_code()
     * @uses ExternalAccountCustomField::setProduct_name()
     * @uses ExternalAccountCustomField::setDelink_reason()
     * @uses ExternalAccountCustomField::setAccount_alias_name()
     * @uses ExternalAccountCustomField::setCard_holder_name()
     * @uses ExternalAccountCustomField::setCobrand_card()
     * @uses ExternalAccountCustomField::setPseudo_pan()
     * @uses ExternalAccountCustomField::setCard_program_code()
     * @uses ExternalAccountCustomField::setRegistration_channel_id()
     * @uses ExternalAccountCustomField::setCustom_field_7()
     * @uses ExternalAccountCustomField::setCustom_field_8()
     * @uses ExternalAccountCustomField::setCustom_field_9()
     * @uses ExternalAccountCustomField::setCustom_field_10()
     * @uses ExternalAccountCustomField::setCustom_field_11()
     * @uses ExternalAccountCustomField::setCustom_field_12()
     * @uses ExternalAccountCustomField::setCustom_field_13()
     * @uses ExternalAccountCustomField::setCustom_field_14()
     * @uses ExternalAccountCustomField::setCustom_field_15()
     * @param string $bank_ica
     * @param string $loyalty_code
     * @param string $product_name
     * @param string $delink_reason
     * @param string $account_alias_name
     * @param string $card_holder_name
     * @param string $cobrand_card
     * @param string $pseudo_pan
     * @param string $card_program_code
     * @param string $registration_channel_id
     * @param string $custom_field_7
     * @param string $custom_field_8
     * @param string $custom_field_9
     * @param string $custom_field_10
     * @param string $custom_field_11
     * @param string $custom_field_12
     * @param string $custom_field_13
     * @param string $custom_field_14
     * @param string $custom_field_15
     */
    public function __construct($bank_ica = null, $loyalty_code = null, $product_name = null, $delink_reason = null, $account_alias_name = null, $card_holder_name = null, $cobrand_card = null, $pseudo_pan = null, $card_program_code = null, $registration_channel_id = null, $custom_field_7 = null, $custom_field_8 = null, $custom_field_9 = null, $custom_field_10 = null, $custom_field_11 = null, $custom_field_12 = null, $custom_field_13 = null, $custom_field_14 = null, $custom_field_15 = null)
    {
        $this
            ->setBank_ica($bank_ica)
            ->setLoyalty_code($loyalty_code)
            ->setProduct_name($product_name)
            ->setDelink_reason($delink_reason)
            ->setAccount_alias_name($account_alias_name)
            ->setCard_holder_name($card_holder_name)
            ->setCobrand_card($cobrand_card)
            ->setPseudo_pan($pseudo_pan)
            ->setCard_program_code($card_program_code)
            ->setRegistration_channel_id($registration_channel_id)
            ->setCustom_field_7($custom_field_7)
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
     * Get bank_ica value
     * @return string
     */
    public function getBank_ica()
    {
        return $this->bank_ica;
    }
    /**
     * Set bank_ica value
     * @param string $bank_ica
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setBank_ica($bank_ica = null)
    {
        // validation for constraint: string
        if (!is_null($bank_ica) && !is_string($bank_ica)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bank_ica)), __LINE__);
        }
        $this->bank_ica = $bank_ica;
        return $this;
    }
    /**
     * Get loyalty_code value
     * @return string
     */
    public function getLoyalty_code()
    {
        return $this->loyalty_code;
    }
    /**
     * Set loyalty_code value
     * @param string $loyalty_code
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setLoyalty_code($loyalty_code = null)
    {
        // validation for constraint: string
        if (!is_null($loyalty_code) && !is_string($loyalty_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loyalty_code)), __LINE__);
        }
        $this->loyalty_code = $loyalty_code;
        return $this;
    }
    /**
     * Get product_name value
     * @return string
     */
    public function getProduct_name()
    {
        return $this->product_name;
    }
    /**
     * Set product_name value
     * @param string $product_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setProduct_name($product_name = null)
    {
        // validation for constraint: string
        if (!is_null($product_name) && !is_string($product_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($product_name)), __LINE__);
        }
        $this->product_name = $product_name;
        return $this;
    }
    /**
     * Get delink_reason value
     * @return string
     */
    public function getDelink_reason()
    {
        return $this->delink_reason;
    }
    /**
     * Set delink_reason value
     * @param string $delink_reason
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setDelink_reason($delink_reason = null)
    {
        // validation for constraint: string
        if (!is_null($delink_reason) && !is_string($delink_reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delink_reason)), __LINE__);
        }
        $this->delink_reason = $delink_reason;
        return $this;
    }
    /**
     * Get account_alias_name value
     * @return string
     */
    public function getAccount_alias_name()
    {
        return $this->account_alias_name;
    }
    /**
     * Set account_alias_name value
     * @param string $account_alias_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setAccount_alias_name($account_alias_name = null)
    {
        // validation for constraint: string
        if (!is_null($account_alias_name) && !is_string($account_alias_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($account_alias_name)), __LINE__);
        }
        $this->account_alias_name = $account_alias_name;
        return $this;
    }
    /**
     * Get card_holder_name value
     * @return string
     */
    public function getCard_holder_name()
    {
        return $this->card_holder_name;
    }
    /**
     * Set card_holder_name value
     * @param string $card_holder_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setCard_holder_name($card_holder_name = null)
    {
        // validation for constraint: string
        if (!is_null($card_holder_name) && !is_string($card_holder_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($card_holder_name)), __LINE__);
        }
        $this->card_holder_name = $card_holder_name;
        return $this;
    }
    /**
     * Get cobrand_card value
     * @return string
     */
    public function getCobrand_card()
    {
        return $this->cobrand_card;
    }
    /**
     * Set cobrand_card value
     * @param string $cobrand_card
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setCobrand_card($cobrand_card = null)
    {
        // validation for constraint: string
        if (!is_null($cobrand_card) && !is_string($cobrand_card)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cobrand_card)), __LINE__);
        }
        $this->cobrand_card = $cobrand_card;
        return $this;
    }
    /**
     * Get pseudo_pan value
     * @return string
     */
    public function getPseudo_pan()
    {
        return $this->pseudo_pan;
    }
    /**
     * Set pseudo_pan value
     * @param string $pseudo_pan
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setPseudo_pan($pseudo_pan = null)
    {
        // validation for constraint: string
        if (!is_null($pseudo_pan) && !is_string($pseudo_pan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudo_pan)), __LINE__);
        }
        $this->pseudo_pan = $pseudo_pan;
        return $this;
    }
    /**
     * Get card_program_code value
     * @return string
     */
    public function getCard_program_code()
    {
        return $this->card_program_code;
    }
    /**
     * Set card_program_code value
     * @param string $card_program_code
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setCard_program_code($card_program_code = null)
    {
        // validation for constraint: string
        if (!is_null($card_program_code) && !is_string($card_program_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($card_program_code)), __LINE__);
        }
        $this->card_program_code = $card_program_code;
        return $this;
    }
    /**
     * Get registration_channel_id value
     * @return string
     */
    public function getRegistration_channel_id()
    {
        return $this->registration_channel_id;
    }
    /**
     * Set registration_channel_id value
     * @param string $registration_channel_id
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setRegistration_channel_id($registration_channel_id = null)
    {
        // validation for constraint: string
        if (!is_null($registration_channel_id) && !is_string($registration_channel_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registration_channel_id)), __LINE__);
        }
        $this->registration_channel_id = $registration_channel_id;
        return $this;
    }
    /**
     * Get custom_field_7 value
     * @return string
     */
    public function getCustom_field_7()
    {
        return $this->custom_field_7;
    }
    /**
     * Set custom_field_7 value
     * @param string $custom_field_7
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
     */
    public function setCustom_field_7($custom_field_7 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_7) && !is_string($custom_field_7)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_7)), __LINE__);
        }
        $this->custom_field_7 = $custom_field_7;
        return $this;
    }
    /**
     * Get custom_field_8 value
     * @return string
     */
    public function getCustom_field_8()
    {
        return $this->custom_field_8;
    }
    /**
     * Set custom_field_8 value
     * @param string $custom_field_8
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_9()
    {
        return $this->custom_field_9;
    }
    /**
     * Set custom_field_9 value
     * @param string $custom_field_9
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_10()
    {
        return $this->custom_field_10;
    }
    /**
     * Set custom_field_10 value
     * @param string $custom_field_10
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_11()
    {
        return $this->custom_field_11;
    }
    /**
     * Set custom_field_11 value
     * @param string $custom_field_11
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_12()
    {
        return $this->custom_field_12;
    }
    /**
     * Set custom_field_12 value
     * @param string $custom_field_12
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_13()
    {
        return $this->custom_field_13;
    }
    /**
     * Set custom_field_13 value
     * @param string $custom_field_13
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_14()
    {
        return $this->custom_field_14;
    }
    /**
     * Set custom_field_14 value
     * @param string $custom_field_14
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return string
     */
    public function getCustom_field_15()
    {
        return $this->custom_field_15;
    }
    /**
     * Set custom_field_15 value
     * @param string $custom_field_15
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ExternalAccountCustomField
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
