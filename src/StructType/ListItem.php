<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListItem StructType
 * @subpackage Structs
 */
class ListItem extends AbstractStructBase
{
    /**
     * The list_item_value_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $list_item_value_2;
    /**
     * The card_status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $card_status;
    /**
     * The unique_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $unique_id;
    /**
     * The eft_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $eft_code;
    /**
     * The list_item_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $list_item_name;
    /**
     * The prompt_cpin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $prompt_cpin;
    /**
     * The list_item_value_1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $list_item_value_1;
    /**
     * The loyalty_code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $loyalty_code;
    /**
     * The product_name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $product_name;
    /**
     * The bank_ica
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $bank_ica;
    /**
     * The is_masterpass_member
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $is_masterpass_member;
    /**
     * Constructor method for ListItem
     * @uses ListItem::setList_item_value_2()
     * @uses ListItem::setCard_status()
     * @uses ListItem::setUnique_id()
     * @uses ListItem::setEft_code()
     * @uses ListItem::setList_item_name()
     * @uses ListItem::setPrompt_cpin()
     * @uses ListItem::setList_item_value_1()
     * @uses ListItem::setLoyalty_code()
     * @uses ListItem::setProduct_name()
     * @uses ListItem::setBank_ica()
     * @uses ListItem::setIs_masterpass_member()
     * @param string $list_item_value_2
     * @param string $card_status
     * @param string $unique_id
     * @param string $eft_code
     * @param string $list_item_name
     * @param string $prompt_cpin
     * @param string $list_item_value_1
     * @param string $loyalty_code
     * @param string $product_name
     * @param string $bank_ica
     * @param string $is_masterpass_member
     */
    public function __construct($list_item_value_2 = null, $card_status = null, $unique_id = null, $eft_code = null, $list_item_name = null, $prompt_cpin = null, $list_item_value_1 = null, $loyalty_code = null, $product_name = null, $bank_ica = null, $is_masterpass_member = null)
    {
        $this
            ->setList_item_value_2($list_item_value_2)
            ->setCard_status($card_status)
            ->setUnique_id($unique_id)
            ->setEft_code($eft_code)
            ->setList_item_name($list_item_name)
            ->setPrompt_cpin($prompt_cpin)
            ->setList_item_value_1($list_item_value_1)
            ->setLoyalty_code($loyalty_code)
            ->setProduct_name($product_name)
            ->setBank_ica($bank_ica)
            ->setIs_masterpass_member($is_masterpass_member);
    }
    /**
     * Get list_item_value_2 value
     * @return string
     */
    public function getList_item_value_2()
    {
        return $this->list_item_value_2;
    }
    /**
     * Set list_item_value_2 value
     * @param string $list_item_value_2
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setList_item_value_2($list_item_value_2 = null)
    {
        // validation for constraint: string
        if (!is_null($list_item_value_2) && !is_string($list_item_value_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_item_value_2)), __LINE__);
        }
        $this->list_item_value_2 = $list_item_value_2;
        return $this;
    }
    /**
     * Get card_status value
     * @return string
     */
    public function getCard_status()
    {
        return $this->card_status;
    }
    /**
     * Set card_status value
     * @param string $card_status
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setCard_status($card_status = null)
    {
        // validation for constraint: string
        if (!is_null($card_status) && !is_string($card_status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($card_status)), __LINE__);
        }
        $this->card_status = $card_status;
        return $this;
    }
    /**
     * Get unique_id value
     * @return string
     */
    public function getUnique_id()
    {
        return $this->unique_id;
    }
    /**
     * Set unique_id value
     * @param string $unique_id
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setUnique_id($unique_id = null)
    {
        // validation for constraint: string
        if (!is_null($unique_id) && !is_string($unique_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unique_id)), __LINE__);
        }
        $this->unique_id = $unique_id;
        return $this;
    }
    /**
     * Get eft_code value
     * @return string
     */
    public function getEft_code()
    {
        return $this->eft_code;
    }
    /**
     * Set eft_code value
     * @param string $eft_code
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setEft_code($eft_code = null)
    {
        // validation for constraint: string
        if (!is_null($eft_code) && !is_string($eft_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eft_code)), __LINE__);
        }
        $this->eft_code = $eft_code;
        return $this;
    }
    /**
     * Get list_item_name value
     * @return string|null
     */
    public function getList_item_name()
    {
        return $this->list_item_name;
    }
    /**
     * Set list_item_name value
     * @param string $list_item_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setList_item_name($list_item_name = null)
    {
        // validation for constraint: string
        if (!is_null($list_item_name) && !is_string($list_item_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_item_name)), __LINE__);
        }
        $this->list_item_name = $list_item_name;
        return $this;
    }
    /**
     * Get prompt_cpin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrompt_cpin()
    {
        return isset($this->prompt_cpin) ? $this->prompt_cpin : null;
    }
    /**
     * Set prompt_cpin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $prompt_cpin
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setPrompt_cpin($prompt_cpin = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($prompt_cpin)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $prompt_cpin, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        if (is_null($prompt_cpin) || (is_array($prompt_cpin) && empty($prompt_cpin))) {
            unset($this->prompt_cpin);
        } else {
            $this->prompt_cpin = $prompt_cpin;
        }
        return $this;
    }
    /**
     * Get list_item_value_1 value
     * @return string|null
     */
    public function getList_item_value_1()
    {
        return $this->list_item_value_1;
    }
    /**
     * Set list_item_value_1 value
     * @param string $list_item_value_1
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setList_item_value_1($list_item_value_1 = null)
    {
        // validation for constraint: string
        if (!is_null($list_item_value_1) && !is_string($list_item_value_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($list_item_value_1)), __LINE__);
        }
        $this->list_item_value_1 = $list_item_value_1;
        return $this;
    }
    /**
     * Get loyalty_code value
     * @return string|null
     */
    public function getLoyalty_code()
    {
        return $this->loyalty_code;
    }
    /**
     * Set loyalty_code value
     * @param string $loyalty_code
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
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
     * @return string|null
     */
    public function getProduct_name()
    {
        return $this->product_name;
    }
    /**
     * Set product_name value
     * @param string $product_name
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
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
     * Get bank_ica value
     * @return string|null
     */
    public function getBank_ica()
    {
        return $this->bank_ica;
    }
    /**
     * Set bank_ica value
     * @param string $bank_ica
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
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
     * Get is_masterpass_member value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIs_masterpass_member()
    {
        return isset($this->is_masterpass_member) ? $this->is_masterpass_member : null;
    }
    /**
     * Set is_masterpass_member value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $is_masterpass_member
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
     */
    public function setIs_masterpass_member($is_masterpass_member = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($is_masterpass_member)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $is_masterpass_member, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        if (is_null($is_masterpass_member) || (is_array($is_masterpass_member) && empty($is_masterpass_member))) {
            unset($this->is_masterpass_member);
        } else {
            $this->is_masterpass_member = $is_masterpass_member;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ListItem
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
