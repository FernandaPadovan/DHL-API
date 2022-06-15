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
 * File:        Shipper.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * Shipper Request model for DHL API
 */
class Shipper extends Base
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
        'ShipperID' => array(
            'type' => 'ShipperID',
            'required' => false,
            'subobject' => false,
            'comment' => 'Shipper\'s ID',
            'maxLength' => '30',
        ),
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '2',
            'maxLength' => '100',
        ),
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
        ),
        'RegisteredAccount' => array(
            'type' => 'AccountNumber',
            'required' => false,
            'subobject' => false,
            'comment' => 'DHL Account Number',
            'maxLength' => '12',
        ),
        'AddressLine1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 1',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'AddressLine2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line 2',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'AddressLine3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line 3',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'StreetName' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Street Name',
            'multivalues' => true,
        ),
        'BuildingName' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Building Name',
            'multivalues' => true,
        ),
        'StreetNumber' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Street Number',
            'multivalues' => true,
        ),
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
            'maxLength' => '35',
        ),
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
            'maxLength' => '35',
        ),
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
            'maxLength' => '35',
        ),
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
            'maxLength' => '12',
        ),
        'OriginServiceAreaCode' => array(
            'type' => 'OriginServiceAreaCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginServiceAreaCode',
            'maxLength' => '3',
        ),
        'OriginFacilityCode' => array(
            'type' => 'OriginFacilityCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'OriginFacilityCode',
            'maxLength' => '3',
        ),
        'CountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ),
        'CountryName' => array(
            'type' => 'CountryName',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country name',
            'maxLength' => '35',
        ),
        'Contact' => array(
            'type' => 'Contact',
            'required' => false,
            'subobject' => true,
        ),
        'RegistrationNumbers' => array(
            'type' => 'RegistrationNumber',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'BusinessPartyTypeCode' => [
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Possible Values:
                - BU (business)
                - DC (direct consumer)
                - GV (government)
                - OT (other)
                - PR (private)
                - RE (reseller)',
        ],
    );
}
