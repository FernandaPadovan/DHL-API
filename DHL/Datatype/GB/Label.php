<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        Label.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * Label Request model for DHL API
 */
class Label extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $_params = array(
        'LabelTemplate' => array(
            'type' => 'LabelTemplate',
            'required' => false,
            'subobject' => false,
            'comment' => 'LabelTemplate',
            'enumeration' => '8X4_A4_PDF,8X4_thermal,8X4_A4_TC_PDF,6X4_thermal,6X4_A4_PDF,8X4_CI_PDF,8X4_CI_thermal,8X4_RU_A4_PDF,6X4_PDF,8X4_PDF,8X4_CustBarCode_PDF,8X4_CustBarCode_thermal,8X4_CustBarCode_AdditionalInfo_PDF,8X4_CustBarCode_AdditionalInfo_thermal,8X4_LBBX_PDF,8X4_LBBX_thermal',
        ),
        'ReceiptTemplate' => array(
            'type' => 'ReceiptTemplate',
            'required' => false,
            'subobject' => false,
        ),
        'ShipmentReceiptWithLabels' => array(
            'type' => 'ShipmentReceiptWithLabels',
            'required' => false,
            'subobject' => false,
        ),
        'CustomsInvoiceTemplate' => array(
            'type' => 'CustomsInvoiceTemplate',
            'required' => false,
            'subobject' => false,
            'comment' => 'CustomsInvoiceTemplate',
            'enumeration' => 'COMMERCIAL_INVOICE_03,COMMERCIAL_INVOICE_04,COMMERCIAL_INVOICE_07,COMMERCIAL_INVOICE_P_10,COMMERCIAL_INVOICE_L_10',
        ),
        'Logo' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
        'CustomerLogo' => array(
            'type' => 'CustomerLogo',
            'required' => false,
            'subobject' => true,
        ),
        'Resolution' => array(
            'type' => 'Resolution',
            'required' => false,
            'subobject' => false,
            'comment' => 'Resolution',
            'minInclusive' => '200',
            'maxInclusive' => '300',
        ),
        'CustomerBarcodeType' => array(
            'type' => 'CustomerBarcodeType',
            'required' => false,
            'subobject' => false,
        ),
        'CustomerBarcodeCode' => array(
            'type' => 'CustomerBarcodeCode',
            'required' => false,
            'subobject' => false,
        ),
        'CustomerBarcodeText' => array(
            'type' => 'CustomerBarcodeText',
            'required' => false,
            'subobject' => false,
        ),
        'QRCodeTemplate' => array(
            'type' => 'QRCodeTemplate',
            'required' => false,
            'subobject' => false,
        ),
        'QRCodeImageFormat' => array(
            'type' => 'QRCodeImageFormat',
            'required' => false,
            'subobject' => false,
        ),
    );
}
