<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact StructType
 * @subpackage Structs
 */
class Contact extends AbstractStructBase
{
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $firstName;
    /**
     * The middleName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $middleName;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $lastName;
    /**
     * The gender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $gender;
    /**
     * The dateOfBirth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $dateOfBirth;
    /**
     * The nationalID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $nationalID;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $emailAddress;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $phoneNumber;
    /**
     * Constructor method for Contact
     * @uses Contact::setFirstName()
     * @uses Contact::setMiddleName()
     * @uses Contact::setLastName()
     * @uses Contact::setGender()
     * @uses Contact::setDateOfBirth()
     * @uses Contact::setNationalID()
     * @uses Contact::setCountry()
     * @uses Contact::setEmailAddress()
     * @uses Contact::setPhoneNumber()
     * @param string $firstName
     * @param string $middleName
     * @param string $lastName
     * @param string $gender
     * @param string $dateOfBirth
     * @param string $nationalID
     * @param string $country
     * @param string $emailAddress
     * @param string $phoneNumber
     */
    public function __construct($firstName = null, $middleName = null, $lastName = null, $gender = null, $dateOfBirth = null, $nationalID = null, $country = null, $emailAddress = null, $phoneNumber = null)
    {
        $this
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setLastName($lastName)
            ->setGender($gender)
            ->setDateOfBirth($dateOfBirth)
            ->setNationalID($nationalID)
            ->setCountry($country)
            ->setEmailAddress($emailAddress)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        return $this;
    }
    /**
     * Get lastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    /**
     * Set lastName value
     * @param string $lastName
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Get gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param string $gender
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        return $this;
    }
    /**
     * Get dateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    /**
     * Set dateOfBirth value
     * @param string $dateOfBirth
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Get nationalID value
     * @return string|null
     */
    public function getNationalID()
    {
        return $this->nationalID;
    }
    /**
     * Set nationalID value
     * @param string $nationalID
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setNationalID($nationalID = null)
    {
        // validation for constraint: string
        if (!is_null($nationalID) && !is_string($nationalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nationalID)), __LINE__);
        }
        $this->nationalID = $nationalID;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact
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
