<?php

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

class Exporter extends Base
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
        'RegistrationNumbers' => array(
            'type' => 'RegistrationNumber',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
    );
}
