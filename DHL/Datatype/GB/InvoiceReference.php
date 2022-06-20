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
 * File:        InvoiceReference.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * InvoiceReference Request model for DHL API
 */
class InvoiceReference extends Base
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
        'InvoiceReferenceType' => array(
            'type' => 'InvoiceReferenceType',
            'required' => true,
            'subobject' => false,
            'enumeration' => 'ACL,CID,CN,CU,ITN,UCN,UCN,OID,PON,RMA,AAM,ABT,ADA,AES,AFD,ANT,BKN,BOL,CDN,COD,DSC,FF,FN,FTR,HWB,IBC,IPP,LLR,MAB,MWB,OBC,PD,PRN,RTL,SID,SS,SWN',
        ),
        'InvoiceReferenceNumber' => array(
            'type' => 'InvoiceReferenceNumber',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ),
    );
}
