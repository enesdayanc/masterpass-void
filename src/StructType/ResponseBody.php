<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseBody StructType
 * @subpackage Structs
 */
class ResponseBody extends AbstractStructBase
{
    /**
     * The retrieval_reference_no
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $retrieval_reference_no;
    /**
     * The sms_noti
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\SmsNotification[]
     */
    public $sms_noti;
    /**
     * Constructor method for ResponseBody
     * @uses ResponseBody::setRetrieval_reference_no()
     * @uses ResponseBody::setSms_noti()
     * @param string $retrieval_reference_no
     * @param \Enesdayanc\MasterpassVoid\StructType\SmsNotification[] $sms_noti
     */
    public function __construct($retrieval_reference_no = null, array $sms_noti = array())
    {
        $this
            ->setRetrieval_reference_no($retrieval_reference_no)
            ->setSms_noti($sms_noti);
    }
    /**
     * Get retrieval_reference_no value
     * @return string|null
     */
    public function getRetrieval_reference_no()
    {
        return $this->retrieval_reference_no;
    }
    /**
     * Set retrieval_reference_no value
     * @param string $retrieval_reference_no
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseBody
     */
    public function setRetrieval_reference_no($retrieval_reference_no = null)
    {
        // validation for constraint: string
        if (!is_null($retrieval_reference_no) && !is_string($retrieval_reference_no)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retrieval_reference_no)), __LINE__);
        }
        $this->retrieval_reference_no = $retrieval_reference_no;
        return $this;
    }
    /**
     * Get sms_noti value
     * @return \Enesdayanc\MasterpassVoid\StructType\SmsNotification[]|null
     */
    public function getSms_noti()
    {
        return $this->sms_noti;
    }
    /**
     * Set sms_noti value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\SmsNotification[] $sms_noti
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseBody
     */
    public function setSms_noti(array $sms_noti = array())
    {
        foreach ($sms_noti as $responseBodySms_notiItem) {
            // validation for constraint: itemType
            if (!$responseBodySms_notiItem instanceof \Enesdayanc\MasterpassVoid\StructType\SmsNotification) {
                throw new \InvalidArgumentException(sprintf('The sms_noti property can only contain items of \Enesdayanc\MasterpassVoid\StructType\SmsNotification, "%s" given', is_object($responseBodySms_notiItem) ? get_class($responseBodySms_notiItem) : gettype($responseBodySms_notiItem)), __LINE__);
            }
        }
        $this->sms_noti = $sms_noti;
        return $this;
    }
    /**
     * Add item to sms_noti value
     * @throws \InvalidArgumentException
     * @param \Enesdayanc\MasterpassVoid\StructType\SmsNotification $item
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseBody
     */
    public function addToSms_noti(\Enesdayanc\MasterpassVoid\StructType\SmsNotification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Enesdayanc\MasterpassVoid\StructType\SmsNotification) {
            throw new \InvalidArgumentException(sprintf('The sms_noti property can only contain items of \Enesdayanc\MasterpassVoid\StructType\SmsNotification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->sms_noti[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\ResponseBody
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
