<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MPGAccountCustomField StructType
 * @subpackage Structs
 */
class MPGAccountCustomField extends AbstractStructBase
{
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
     * The custom_field_2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_2;
    /**
     * The custom_field_3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_3;
    /**
     * The custom_field_4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_4;
    /**
     * The custom_field_5
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_5;
    /**
     * The custom_field_6
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $custom_field_6;
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
     * The consumer_account_deleted
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $consumer_account_deleted;
    /**
     * Constructor method for MPGAccountCustomField
     * @uses MPGAccountCustomField::setDelink_reason()
     * @uses MPGAccountCustomField::setCustom_field_2()
     * @uses MPGAccountCustomField::setCustom_field_3()
     * @uses MPGAccountCustomField::setCustom_field_4()
     * @uses MPGAccountCustomField::setCustom_field_5()
     * @uses MPGAccountCustomField::setCustom_field_6()
     * @uses MPGAccountCustomField::setCustom_field_7()
     * @uses MPGAccountCustomField::setCustom_field_8()
     * @uses MPGAccountCustomField::setCustom_field_9()
     * @uses MPGAccountCustomField::setCustom_field_10()
     * @uses MPGAccountCustomField::setCustom_field_11()
     * @uses MPGAccountCustomField::setCustom_field_12()
     * @uses MPGAccountCustomField::setCustom_field_13()
     * @uses MPGAccountCustomField::setCustom_field_14()
     * @uses MPGAccountCustomField::setCustom_field_15()
     * @uses MPGAccountCustomField::setConsumer_account_deleted()
     * @param string $delink_reason
     * @param string $custom_field_2
     * @param string $custom_field_3
     * @param string $custom_field_4
     * @param string $custom_field_5
     * @param string $custom_field_6
     * @param string $custom_field_7
     * @param string $custom_field_8
     * @param string $custom_field_9
     * @param string $custom_field_10
     * @param string $custom_field_11
     * @param string $custom_field_12
     * @param string $custom_field_13
     * @param string $custom_field_14
     * @param string $custom_field_15
     * @param string $consumer_account_deleted
     */
    public function __construct($delink_reason = null, $custom_field_2 = null, $custom_field_3 = null, $custom_field_4 = null, $custom_field_5 = null, $custom_field_6 = null, $custom_field_7 = null, $custom_field_8 = null, $custom_field_9 = null, $custom_field_10 = null, $custom_field_11 = null, $custom_field_12 = null, $custom_field_13 = null, $custom_field_14 = null, $custom_field_15 = null, $consumer_account_deleted = null)
    {
        $this
            ->setDelink_reason($delink_reason)
            ->setCustom_field_2($custom_field_2)
            ->setCustom_field_3($custom_field_3)
            ->setCustom_field_4($custom_field_4)
            ->setCustom_field_5($custom_field_5)
            ->setCustom_field_6($custom_field_6)
            ->setCustom_field_7($custom_field_7)
            ->setCustom_field_8($custom_field_8)
            ->setCustom_field_9($custom_field_9)
            ->setCustom_field_10($custom_field_10)
            ->setCustom_field_11($custom_field_11)
            ->setCustom_field_12($custom_field_12)
            ->setCustom_field_13($custom_field_13)
            ->setCustom_field_14($custom_field_14)
            ->setCustom_field_15($custom_field_15)
            ->setConsumer_account_deleted($consumer_account_deleted);
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * Get custom_field_2 value
     * @return string
     */
    public function getCustom_field_2()
    {
        return $this->custom_field_2;
    }
    /**
     * Set custom_field_2 value
     * @param string $custom_field_2
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setCustom_field_2($custom_field_2 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_2) && !is_string($custom_field_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_2)), __LINE__);
        }
        $this->custom_field_2 = $custom_field_2;
        return $this;
    }
    /**
     * Get custom_field_3 value
     * @return string
     */
    public function getCustom_field_3()
    {
        return $this->custom_field_3;
    }
    /**
     * Set custom_field_3 value
     * @param string $custom_field_3
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setCustom_field_3($custom_field_3 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_3) && !is_string($custom_field_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_3)), __LINE__);
        }
        $this->custom_field_3 = $custom_field_3;
        return $this;
    }
    /**
     * Get custom_field_4 value
     * @return string
     */
    public function getCustom_field_4()
    {
        return $this->custom_field_4;
    }
    /**
     * Set custom_field_4 value
     * @param string $custom_field_4
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setCustom_field_4($custom_field_4 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_4) && !is_string($custom_field_4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_4)), __LINE__);
        }
        $this->custom_field_4 = $custom_field_4;
        return $this;
    }
    /**
     * Get custom_field_5 value
     * @return string
     */
    public function getCustom_field_5()
    {
        return $this->custom_field_5;
    }
    /**
     * Set custom_field_5 value
     * @param string $custom_field_5
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setCustom_field_5($custom_field_5 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_5) && !is_string($custom_field_5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_5)), __LINE__);
        }
        $this->custom_field_5 = $custom_field_5;
        return $this;
    }
    /**
     * Get custom_field_6 value
     * @return string
     */
    public function getCustom_field_6()
    {
        return $this->custom_field_6;
    }
    /**
     * Set custom_field_6 value
     * @param string $custom_field_6
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setCustom_field_6($custom_field_6 = null)
    {
        // validation for constraint: string
        if (!is_null($custom_field_6) && !is_string($custom_field_6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom_field_6)), __LINE__);
        }
        $this->custom_field_6 = $custom_field_6;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
     * Get consumer_account_deleted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConsumer_account_deleted()
    {
        return isset($this->consumer_account_deleted) ? $this->consumer_account_deleted : null;
    }
    /**
     * Set consumer_account_deleted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $consumer_account_deleted
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
     */
    public function setConsumer_account_deleted($consumer_account_deleted = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($consumer_account_deleted)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $consumer_account_deleted, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        if (is_null($consumer_account_deleted) || (is_array($consumer_account_deleted) && empty($consumer_account_deleted))) {
            unset($this->consumer_account_deleted);
        } else {
            $this->consumer_account_deleted = $consumer_account_deleted;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\MPGAccountCustomField
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
