<?php

/**
 * Class Netresearch_Epayments_Model_Ingenico_RequestBuilder_Common_FraudFieldsBuilder
 */
class Netresearch_Epayments_Model_Ingenico_RequestBuilder_Common_FraudFieldsBuilder
{

    /**
     * @var Mage_Core_Helper_Http
     */
    protected $coreHttpHelper;

    /**
     * Netresearch_Epayments_Model_Ingenico_RequestBuilder_Common_FraudFieldsBuilder constructor.
     */
    public function __construct()
    {
        $this->coreHttpHelper = Mage::helper('core/http');
    }

    /**
     * @return \Ingenico\Connect\Sdk\Domain\Definitions\FraudFields
     */
    public function create()
    {
        $fraudFields = new \Ingenico\Connect\Sdk\Domain\Definitions\FraudFields();
        $fraudFields->customerIpAddress = $this->coreHttpHelper->getRemoteAddr(false);

        return $fraudFields;
    }
}
