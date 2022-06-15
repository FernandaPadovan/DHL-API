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
 * File:        RegistrationNumber.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * RegistrationNumber Request model for DHL API
 */
class RegistrationNumber extends Base
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
