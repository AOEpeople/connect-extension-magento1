<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class OrderLineDetails extends DataObject
{
    /**
     * @var int
     */
    public $discountAmount = null;

    /**
     * @var int
     */
    public $googleProductCategoryId = null;

    /**
     * @var int
     */
    public $lineAmountTotal = null;

    /**
     * @var string
     */
    public $productCategory = null;

    /**
     * @var string
     */
    public $productCode = null;

    /**
     * @var string
     */
    public $productName = null;

    /**
     * @var int
     */
    public $productPrice = null;

    /**
     * @var string
     */
    public $productType = null;

    /**
     * @var int
     */
    public $quantity = null;

    /**
     * @var int
     */
    public $taxAmount = null;

    /**
     * @var string
     */
    public $unit = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'discountAmount')) {
            $this->discountAmount = $object->discountAmount;
        }
        if (property_exists($object, 'googleProductCategoryId')) {
            $this->googleProductCategoryId = $object->googleProductCategoryId;
        }
        if (property_exists($object, 'lineAmountTotal')) {
            $this->lineAmountTotal = $object->lineAmountTotal;
        }
        if (property_exists($object, 'productCategory')) {
            $this->productCategory = $object->productCategory;
        }
        if (property_exists($object, 'productCode')) {
            $this->productCode = $object->productCode;
        }
        if (property_exists($object, 'productName')) {
            $this->productName = $object->productName;
        }
        if (property_exists($object, 'productPrice')) {
            $this->productPrice = $object->productPrice;
        }
        if (property_exists($object, 'productType')) {
            $this->productType = $object->productType;
        }
        if (property_exists($object, 'quantity')) {
            $this->quantity = $object->quantity;
        }
        if (property_exists($object, 'taxAmount')) {
            $this->taxAmount = $object->taxAmount;
        }
        if (property_exists($object, 'unit')) {
            $this->unit = $object->unit;
        }
        return $this;
    }
}
