<?php

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

class Importer extends Base
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
        'CompanyName' => array(
            'type' => 'CompanyNameValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Name of company / business',
            'minLength' => '0',
        ),
        'SuiteDepartmentName' => array(
            'type' => 'SuiteDepartmentName',
            'required' => false,
            'subobject' => false,
            'comment' => 'SuiteDepartmentName',
            'maxLength' => '35',
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
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
        ),
        'Division' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) name',
        ),
        'DivisionCode' => array(
            'type' => 'DivisionCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Division (e.g. state, prefecture, etc.) code',
        ),
        'PostalCode' => array(
            'type' => 'PostalCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Full postal/zip code for address',
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
        ),
        'Contact' => array(
            'type' => 'Contact',
            'required' => false,
            'subobject' => true,
        ),
        'Suburb' => array(
            'type' => 'Suburb',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
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
