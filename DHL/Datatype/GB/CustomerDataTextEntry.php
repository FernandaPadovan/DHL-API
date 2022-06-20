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
 * File:        CustomerDataTextEntry.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * CustomerDataTextEntry Request model for DHL API
 */
class CustomerDataTextEntry extends Base
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
        'CustomerDataTextNumber' => array(
            'type' => 'CustomerDataTextNumber',
            'required' => true,
            'subobject' => false,
            'minLength' => '1',
            'maxLength' => '1',
            'pattern' => '([1-6])*',
        ),
        'CustomerDataText' => array(
            'type' => 'CustomerDataText',
            'required' => true,
            'subobject' => false,
            'comment' => '>Customs Invoice - Customer Data Text in COMMERCIAL_INVOICE_04 template ',
            'maxLength' => '45',
        ),
    );
}
