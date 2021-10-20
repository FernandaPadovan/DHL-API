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
        'AddressLine1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
        ),
        'AddressLine2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
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
        'RegistrationNumbers' => array(
            'type' => 'RegistrationNumber',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
    );
}
