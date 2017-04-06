<?php

namespace Enesdayanc\MasterpassVoid\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MPListItem StructType
 * @subpackage Structs
 */
class MPListItem extends AbstractStructBase
{
    /**
     * The Card
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\Card
     */
    public $Card;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Enesdayanc\MasterpassVoid\StructType\Contact
     */
    public $Contact;
    /**
     * Constructor method for MPListItem
     * @uses MPListItem::setCard()
     * @uses MPListItem::setContact()
     * @param \Enesdayanc\MasterpassVoid\StructType\Card $card
     * @param \Enesdayanc\MasterpassVoid\StructType\Contact $contact
     */
    public function __construct(\Enesdayanc\MasterpassVoid\StructType\Card $card = null, \Enesdayanc\MasterpassVoid\StructType\Contact $contact = null)
    {
        $this
            ->setCard($card)
            ->setContact($contact);
    }
    /**
     * Get Card value
     * @return \Enesdayanc\MasterpassVoid\StructType\Card|null
     */
    public function getCard()
    {
        return $this->Card;
    }
    /**
     * Set Card value
     * @param \Enesdayanc\MasterpassVoid\StructType\Card $card
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem
     */
    public function setCard(\Enesdayanc\MasterpassVoid\StructType\Card $card = null)
    {
        $this->Card = $card;
        return $this;
    }
    /**
     * Get Contact value
     * @return \Enesdayanc\MasterpassVoid\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Enesdayanc\MasterpassVoid\StructType\Contact $contact
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem
     */
    public function setContact(\Enesdayanc\MasterpassVoid\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Enesdayanc\MasterpassVoid\StructType\MPListItem
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
