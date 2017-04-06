<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseHeader StructType
 * @subpackage Structs
 */
class ResponseHeader extends AbstractStructBase
{
    /**
     * The response_datetime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $response_datetime;
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
     * Constructor method for ResponseHeader
     * @uses ResponseHeader::setResponse_datetime()
     * @uses ResponseHeader::setRequest_datetime()
     * @uses ResponseHeader::setSend_sms()
     * @uses ResponseHeader::setSend_sms_language()
     * @uses ResponseHeader::setClient_id()
     * @uses ResponseHeader::setRequest_reference_no()
     * @param string $response_datetime
     * @param string $request_datetime
     * @param string $send_sms
     * @param string $send_sms_language
     * @param string $client_id
     * @param string $request_reference_no
     */
    public function __construct($response_datetime = null, $request_datetime = null, $send_sms = null, $send_sms_language = null, $client_id = null, $request_reference_no = null)
    {
        $this
            ->setResponse_datetime($response_datetime)
            ->setRequest_datetime($request_datetime)
            ->setSend_sms($send_sms)
            ->setSend_sms_language($send_sms_language)
            ->setClient_id($client_id)
            ->setRequest_reference_no($request_reference_no);
    }
    /**
     * Get response_datetime value
     * @return string
     */
    public function getResponse_datetime()
    {
        return $this->response_datetime;
    }
    /**
     * Set response_datetime value
     * @param string $response_datetime
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
     */
    public function setResponse_datetime($response_datetime = null)
    {
        // validation for constraint: string
        if (!is_null($response_datetime) && !is_string($response_datetime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($response_datetime)), __LINE__);
        }
        $this->response_datetime = $response_datetime;
        return $this;
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseHeader
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
