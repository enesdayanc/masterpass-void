<?php

namespace Enesdayanc\MasterpassVoid\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transaction ServiceType
 * @subpackage Services
 */
class Transaction extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TransactionQuery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Enesdayanc\MasterpassVoid\StructType\TransactionQuery $parameters
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponse|bool
     */
    public function TransactionQuery(\Enesdayanc\MasterpassVoid\StructType\TransactionQuery $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->TransactionQuery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Enesdayanc\MasterpassVoid\StructType\TransactionQueryResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
