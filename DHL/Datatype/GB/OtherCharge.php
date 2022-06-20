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
 * File:        OtherCharge.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * OtherCharge Request model for DHL API
 */
class OtherCharge extends Base
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
        'OtherChargeCaption' => array(
            'type' => 'OtherChargeCaption',
            'required' => false,
            'subobject' => false,
        ),
        'OtherChargeValue' => array(
            'type' => 'OtherChargeValue',
            'required' => true,
            'subobject' => false,
            'totalDigits' => '18',
            'fractionDigits' => '3',
        ),
        'OtherChargeType' => array(
            'type' => 'OtherChargeType',
            'required' => true,
            'subobject' => false,
            'maxLength' => '5',
            'enumeration' => 'ADMIN,DELIV,DOCUM,EXPED,EXCHA,FRCST,SSRGE,LOGST,SOTHR,SPKGN,PICUP,HRCRG,VATCR,INSCH,REVCH',
        ),


        TODO: For full list of allowed type code
        values refer to Reference_Data.xlsx
        on <OtherChargeType> section




        'Number' => array(
            'type' => 'Number',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'maxLength' => '35',
        ),
        'NumberTypeCode' => array(
            'type' => 'NumberTypeCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'NumberTypeCode',
            'enumeration' => 'SDT,VAT,FTZ,DAN,TAN,DTF,CNP,DUN,EIN,EOR,SSN,FED,STA',
        ),
        'NumberIssuerCountryCode' => array(
            'type' => 'NumberIssuerCountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ),
    );
}
