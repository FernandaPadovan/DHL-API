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
        'AddressLine' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line',
            'multivalues' => true,
        ),
        'City' => array(
            'type' => 'City',
            'required' => false,
            'subobject' => false,
            'comment' => 'City name',
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
