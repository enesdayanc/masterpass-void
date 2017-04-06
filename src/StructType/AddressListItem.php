<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressListItem StructType
 * @subpackage Structs
 */
class AddressListItem extends AbstractStructBase
{
    /**
     * The Address_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Address_type;
    /**
     * The AddressName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $AddressName;
    /**
     * The Line2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Line2;
    /**
     * The Line3
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $Line3;
    /**
     * The RecipientName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $RecipientName;
    /**
     * The RecipientPhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $RecipientPhoneNumber;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The DefaultAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DefaultAddress;
    /**
     * The CountrySubdivision
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountrySubdivision;
    /**
     * The Line1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Line1;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * Constructor method for AddressListItem
     * @uses AddressListItem::setAddress_type()
     * @uses AddressListItem::setAddressName()
     * @uses AddressListItem::setLine2()
     * @uses AddressListItem::setLine3()
     * @uses AddressListItem::setRecipientName()
     * @uses AddressListItem::setRecipientPhoneNumber()
     * @uses AddressListItem::setCity()
     * @uses AddressListItem::setCountry()
     * @uses AddressListItem::setDefaultAddress()
     * @uses AddressListItem::setCountrySubdivision()
     * @uses AddressListItem::setLine1()
     * @uses AddressListItem::setPostalCode()
     * @param string $address_type
     * @param string $addressName
     * @param string $line2
     * @param string $line3
     * @param string $recipientName
     * @param string $recipientPhoneNumber
     * @param string $city
     * @param string $country
     * @param string $defaultAddress
     * @param string $countrySubdivision
     * @param string $line1
     * @param string $postalCode
     */
    public function __construct($address_type = null, $addressName = null, $line2 = null, $line3 = null, $recipientName = null, $recipientPhoneNumber = null, $city = null, $country = null, $defaultAddress = null, $countrySubdivision = null, $line1 = null, $postalCode = null)
    {
        $this
            ->setAddress_type($address_type)
            ->setAddressName($addressName)
            ->setLine2($line2)
            ->setLine3($line3)
            ->setRecipientName($recipientName)
            ->setRecipientPhoneNumber($recipientPhoneNumber)
            ->setCity($city)
            ->setCountry($country)
            ->setDefaultAddress($defaultAddress)
            ->setCountrySubdivision($countrySubdivision)
            ->setLine1($line1)
            ->setPostalCode($postalCode);
    }
    /**
     * Get Address_type value
     * @return string
     */
    public function getAddress_type()
    {
        return $this->Address_type;
    }
    /**
     * Set Address_type value
     * @uses \Enesdayanc\MasterpassVoid\EnumType\AddressType::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\AddressType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $address_type
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setAddress_type($address_type = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\AddressType::valueIsValid($address_type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $address_type, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\AddressType::getValidValues())), __LINE__);
        }
        $this->Address_type = $address_type;
        return $this;
    }
    /**
     * Get AddressName value
     * @return string
     */
    public function getAddressName()
    {
        return $this->AddressName;
    }
    /**
     * Set AddressName value
     * @param string $addressName
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setAddressName($addressName = null)
    {
        // validation for constraint: string
        if (!is_null($addressName) && !is_string($addressName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressName)), __LINE__);
        }
        $this->AddressName = $addressName;
        return $this;
    }
    /**
     * Get Line2 value
     * @return string
     */
    public function getLine2()
    {
        return $this->Line2;
    }
    /**
     * Set Line2 value
     * @param string $line2
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setLine2($line2 = null)
    {
        // validation for constraint: string
        if (!is_null($line2) && !is_string($line2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line2)), __LINE__);
        }
        $this->Line2 = $line2;
        return $this;
    }
    /**
     * Get Line3 value
     * @return string
     */
    public function getLine3()
    {
        return $this->Line3;
    }
    /**
     * Set Line3 value
     * @param string $line3
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setLine3($line3 = null)
    {
        // validation for constraint: string
        if (!is_null($line3) && !is_string($line3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line3)), __LINE__);
        }
        $this->Line3 = $line3;
        return $this;
    }
    /**
     * Get RecipientName value
     * @return string
     */
    public function getRecipientName()
    {
        return $this->RecipientName;
    }
    /**
     * Set RecipientName value
     * @param string $recipientName
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setRecipientName($recipientName = null)
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientName)), __LINE__);
        }
        $this->RecipientName = $recipientName;
        return $this;
    }
    /**
     * Get RecipientPhoneNumber value
     * @return string
     */
    public function getRecipientPhoneNumber()
    {
        return $this->RecipientPhoneNumber;
    }
    /**
     * Set RecipientPhoneNumber value
     * @param string $recipientPhoneNumber
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setRecipientPhoneNumber($recipientPhoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($recipientPhoneNumber) && !is_string($recipientPhoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientPhoneNumber)), __LINE__);
        }
        $this->RecipientPhoneNumber = $recipientPhoneNumber;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get DefaultAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefaultAddress()
    {
        return isset($this->DefaultAddress) ? $this->DefaultAddress : null;
    }
    /**
     * Set DefaultAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $defaultAddress
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setDefaultAddress($defaultAddress = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($defaultAddress)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $defaultAddress, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        if (is_null($defaultAddress) || (is_array($defaultAddress) && empty($defaultAddress))) {
            unset($this->DefaultAddress);
        } else {
            $this->DefaultAddress = $defaultAddress;
        }
        return $this;
    }
    /**
     * Get CountrySubdivision value
     * @return string|null
     */
    public function getCountrySubdivision()
    {
        return $this->CountrySubdivision;
    }
    /**
     * Set CountrySubdivision value
     * @param string $countrySubdivision
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setCountrySubdivision($countrySubdivision = null)
    {
        // validation for constraint: string
        if (!is_null($countrySubdivision) && !is_string($countrySubdivision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countrySubdivision)), __LINE__);
        }
        $this->CountrySubdivision = $countrySubdivision;
        return $this;
    }
    /**
     * Get Line1 value
     * @return string|null
     */
    public function getLine1()
    {
        return $this->Line1;
    }
    /**
     * Set Line1 value
     * @param string $line1
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setLine1($line1 = null)
    {
        // validation for constraint: string
        if (!is_null($line1) && !is_string($line1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line1)), __LINE__);
        }
        $this->Line1 = $line1;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\AddressListItem
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
