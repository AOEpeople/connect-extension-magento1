<?php

class Netresearch_Epayments_Model_Ingenico_Webhooks_PaymentEventDataResolver
 implements Netresearch_Epayments_Model_Ingenico_Webhooks_EventDataResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function getResponse(\Ingenico\Connect\Sdk\Domain\Webhooks\WebhooksEvent $event)
    {
        $this->assertCorrectEvent($event);
        return $event->payment;
    }

    /**
     * {@inheritdoc}
     */
    public function getMerchantReference(\Ingenico\Connect\Sdk\Domain\Webhooks\WebhooksEvent $event)
    {
        $this->assertCorrectEvent($event);
        $merchantOrderId = $event->payment->paymentOutput->references->merchantReference;

        if ($merchantOrderId <= 0) {
            throw new RuntimeException('Merchant reference value is missing in Event response.');
        }

        return $merchantOrderId;
    }

    /**
     * @param \Ingenico\Connect\Sdk\Domain\Webhooks\WebhooksEvent $event
     */
    private function assertCorrectEvent(\Ingenico\Connect\Sdk\Domain\Webhooks\WebhooksEvent $event)
    {
        if (!$event
            || !$event->payment
            || !$event->payment instanceof \Ingenico\Connect\Sdk\Domain\Payment\PaymentResponse
            || !$event->payment->paymentOutput
            || !$event->payment->paymentOutput instanceof \Ingenico\Connect\Sdk\Domain\Payment\Definitions\PaymentOutput
        ) {
            throw new RuntimeException('Event does not match resolver.');
        }
    }
}
