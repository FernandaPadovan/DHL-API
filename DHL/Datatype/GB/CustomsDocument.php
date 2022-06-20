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
 * File:        CustomsDocument.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * CustomsDocument Request model for DHL API
 */
class CustomsDocument extends Base
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
        'CustomsDocumentType' => array(
            'type' => 'CustomsDocumentType',
            'required' => true,
            'subobject' => false,
            'enumeration' => '972,AHC,ATA,ATR,CHD,CHP,CIT,COO,DEX,EU1,EU2,EUS,FMA,PHY,VET,VEX,CRL,CSD,PPY,CI2,CIV,DOV,INV,PFI,ALC,HLC,JLC,LIC,LNP,PLI,DLI,NID,PAS,CHA,CPA,POA,BEX,DGD,IPA,T2M,TAD,TCS,ROD,EXL,HWB,ELP',
        ),
        'CustomsDocumentID' => array(
            'type' => 'CustomsDocumentID',
            'required' => true,
            'subobject' => false,
            'maxLength' => '35',
        ),

    );
}
