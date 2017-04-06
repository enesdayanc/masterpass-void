<?php

namespace Enesdayanc\MasterpassVoid\EnumType;

/**
 * This class stands for AddressType EnumType
 * @subpackage Enumerations
 */
class AddressType
{
    /**
     * Constant for value 'SHIPPING'
     * @return string 'SHIPPING'
     */
    const VALUE_SHIPPING = 'SHIPPING';
    /**
     * Constant for value 'BILLING'
     * @return string 'BILLING'
     */
    const VALUE_BILLING = 'BILLING';
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_SHIPPING
     * @uses self::VALUE_BILLING
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHIPPING,
            self::VALUE_BILLING,
            self::VALUE_ALL,
        );
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
