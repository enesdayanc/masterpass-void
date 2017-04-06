<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestHeader StructType
 * @subpackage Structs
 */
class RequestHeader extends AbstractStructBase
{
    /**
     * The request_datetime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $request_datetime;
    /**
     * The send_sms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $send_sms;
    /**
     * The send_sms_language
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $send_sms_language;
    /**
     * The client_token
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $client_token;
    /**
     * The device_fingerprint
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $device_fingerprint;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $version;
    /**
     * The ip_address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ip_address;
    /**
     * The client_type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $client_type;
    /**
     * The client_id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $client_id;
    /**
     * The request_reference_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $request_reference_no;
    /**
     * Constructor method for RequestHeader
     * @uses RequestHeader::setRequest_datetime()
     * @uses RequestHeader::setSend_sms()
     * @uses RequestHeader::setSend_sms_language()
     * @uses RequestHeader::setClient_token()
     * @uses RequestHeader::setDevice_fingerprint()
     * @uses RequestHeader::setVersion()
     * @uses RequestHeader::setIp_address()
     * @uses RequestHeader::setClient_type()
     * @uses RequestHeader::setClient_id()
     * @uses RequestHeader::setRequest_reference_no()
     * @param string $request_datetime
     * @param string $send_sms
     * @param string $send_sms_language
     * @param string $client_token
     * @param string $device_fingerprint
     * @param string $version
     * @param string $ip_address
     * @param string $client_type
     * @param string $client_id
     * @param string $request_reference_no
     */
    public function __construct($request_datetime = null, $send_sms = null, $send_sms_language = null, $client_token = null, $device_fingerprint = null, $version = null, $ip_address = null, $client_type = null, $client_id = null, $request_reference_no = null)
    {
        $this
            ->setRequest_datetime($request_datetime)
            ->setSend_sms($send_sms)
            ->setSend_sms_language($send_sms_language)
            ->setClient_token($client_token)
            ->setDevice_fingerprint($device_fingerprint)
            ->setVersion($version)
            ->setIp_address($ip_address)
            ->setClient_type($client_type)
            ->setClient_id($client_id)
            ->setRequest_reference_no($request_reference_no);
    }
    /**
     * Get request_datetime value
     * @return string
     */
    public function getRequest_datetime()
    {
        return $this->request_datetime;
    }
    /**
     * Set request_datetime value
     * @param string $request_datetime
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setRequest_datetime($request_datetime = null)
    {
        // validation for constraint: string
        if (!is_null($request_datetime) && !is_string($request_datetime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_datetime)), __LINE__);
        }
        $this->request_datetime = $request_datetime;
        return $this;
    }
    /**
     * Get send_sms value
     * @return string
     */
    public function getSend_sms()
    {
        return $this->send_sms;
    }
    /**
     * Set send_sms value
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $send_sms
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setSend_sms($send_sms = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::valueIsValid($send_sms)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $send_sms, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\YesNoFlag::getValidValues())), __LINE__);
        }
        $this->send_sms = $send_sms;
        return $this;
    }
    /**
     * Get send_sms_language value
     * @return string
     */
    public function getSend_sms_language()
    {
        return $this->send_sms_language;
    }
    /**
     * Set send_sms_language value
     * @uses \Enesdayanc\MasterpassVoid\EnumType\ISOLanguageAlpha3TCodeType::valueIsValid()
     * @uses \Enesdayanc\MasterpassVoid\EnumType\ISOLanguageAlpha3TCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $send_sms_language
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setSend_sms_language($send_sms_language = null)
    {
        // validation for constraint: enumeration
        if (!\Enesdayanc\MasterpassVoid\EnumType\ISOLanguageAlpha3TCodeType::valueIsValid($send_sms_language)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $send_sms_language, implode(', ', \Enesdayanc\MasterpassVoid\EnumType\ISOLanguageAlpha3TCodeType::getValidValues())), __LINE__);
        }
        $this->send_sms_language = $send_sms_language;
        return $this;
    }
    /**
     * Get client_token value
     * @return string
     */
    public function getClient_token()
    {
        return $this->client_token;
    }
    /**
     * Set client_token value
     * @param string $client_token
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setClient_token($client_token = null)
    {
        // validation for constraint: string
        if (!is_null($client_token) && !is_string($client_token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_token)), __LINE__);
        }
        $this->client_token = $client_token;
        return $this;
    }
    /**
     * Get device_fingerprint value
     * @return string
     */
    public function getDevice_fingerprint()
    {
        return $this->device_fingerprint;
    }
    /**
     * Set device_fingerprint value
     * @param string $device_fingerprint
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setDevice_fingerprint($device_fingerprint = null)
    {
        // validation for constraint: string
        if (!is_null($device_fingerprint) && !is_string($device_fingerprint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($device_fingerprint)), __LINE__);
        }
        $this->device_fingerprint = $device_fingerprint;
        return $this;
    }
    /**
     * Get version value
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get ip_address value
     * @return string
     */
    public function getIp_address()
    {
        return $this->ip_address;
    }
    /**
     * Set ip_address value
     * @param string $ip_address
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setIp_address($ip_address = null)
    {
        // validation for constraint: string
        if (!is_null($ip_address) && !is_string($ip_address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip_address)), __LINE__);
        }
        $this->ip_address = $ip_address;
        return $this;
    }
    /**
     * Get client_type value
     * @return string
     */
    public function getClient_type()
    {
        return $this->client_type;
    }
    /**
     * Set client_type value
     * @param string $client_type
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setClient_type($client_type = null)
    {
        // validation for constraint: string
        if (!is_null($client_type) && !is_string($client_type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_type)), __LINE__);
        }
        $this->client_type = $client_type;
        return $this;
    }
    /**
     * Get client_id value
     * @return string|null
     */
    public function getClient_id()
    {
        return $this->client_id;
    }
    /**
     * Set client_id value
     * @param string $client_id
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setClient_id($client_id = null)
    {
        // validation for constraint: string
        if (!is_null($client_id) && !is_string($client_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($client_id)), __LINE__);
        }
        $this->client_id = $client_id;
        return $this;
    }
    /**
     * Get request_reference_no value
     * @return string|null
     */
    public function getRequest_reference_no()
    {
        return $this->request_reference_no;
    }
    /**
     * Set request_reference_no value
     * @param string $request_reference_no
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
     */
    public function setRequest_reference_no($request_reference_no = null)
    {
        // validation for constraint: string
        if (!is_null($request_reference_no) && !is_string($request_reference_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request_reference_no)), __LINE__);
        }
        $this->request_reference_no = $request_reference_no;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\RequestHeader
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
