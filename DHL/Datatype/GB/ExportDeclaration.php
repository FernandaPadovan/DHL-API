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
 * File:        ExportDeclaration.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 */

namespace DHL\Datatype\GB;
use DHL\Datatype\Base;

/**
 * ExportDeclaration Request model for DHL API
 */
class ExportDeclaration extends Base
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
        'InterConsignee' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'IsPartiesRelation' => array(
            'type' => 'YesNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Boolean flag',
            'length' => '1',
            'enumeration' => 'Y,N',
        ),
        'ECCN' => array(
            'type' => '',
            'required' => false,
            'subobject' => false,
        ),
        'SignatureName' => array(
            'type' => 'SignatureName',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature name',
            'maxLength' => '35',
        ),
        'SignatureTitle' => array(
            'type' => 'SignatureTitle',
            'required' => false,
            'subobject' => false,
            'comment' => 'Signature title',
            'maxLength' => '35',
        ),
        'ExportReason' => array(
            'type' => 'ExportReason',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason',
            'length' => '1',
        ),
        'ExportReasonCode' => array(
            'type' => 'ExportReasonCode',
            'required' => false,
            'subobject' => false,
            'comment' => 'Export reason code (P:Permanent, T:Temporary, R:Re-Export)',
            'length' => '1',
            'enumeration' => 'P,T,R,M,I,C,E,S,G,U,W,D,F',
        ),
        'SedNumber' => array(
            'type' => 'SEDNumber',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'enumeration' => 'FTSR,XTN,SAS,ITN',
        ),
        'SedNumberType' => array(
            'type' => 'SEDNumberType',
            'required' => false,
            'subobject' => false,
            'comment' => '',
            'length' => '1',
            'enumeration' => 'F,X,S,I',
        ),
        'InvoiceNumber' => array(
            'type' => 'InvoiceNumber',
            'required' => false,
            'subobject' => false,
        ),
        'InvoiceDate' => array(
            'type' => 'InvoiceDate',
            'required' => false,
            'subobject' => false,
        ),
        'BillToCompanyName' => array(
            'type' => 'BillToCompanyName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToContanctName' => array(
            'type' => 'BillToContanctName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToAddressLine1' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => 'Address Line 1',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'BillToAddressLine2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line 2',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'BillToAddressLine3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Address Line 3',
            'minLength' => '1',
            'maxLength' => '45',
        ),
        'BillToCity' => array(
            'type' => 'BillToCity',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPostcode' => array(
            'type' => 'BillToPostcode',
            'required' => false,
            'subobject' => false,
        ),
        'BillToSuburb' => array(
            'type' => 'BillToSuburb',
            'required' => false,
            'subobject' => false,
        ),
        'BillToState' => array(
            'type' => 'BillToState',
            'required' => false,
            'subobject' => false,
        ),
        'BillToStateName' => array(
            'type' => 'Division',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ),
        'BillToCountryCode' => array(
            'type' => 'CountryCode',
            'required' => false,
            'subobject' => false,
            'length' => '2',
        ),
        'BillToCountryName' => array(
            'type' => 'BillToCountryName',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPhoneNumber' => array(
            'type' => 'BillToPhoneNumber',
            'required' => false,
            'subobject' => false,
        ),
        'BillToPhoneNumberExtn' => array(
            'type' => 'BillToPhoneNumberExtn',
            'required' => false,
            'subobject' => false,
        ),
        'BillToFaxNumber' => array(
            'type' => 'BillToFaxNumber',
            'required' => false,
            'subobject' => false,
        ),
        'BillToStreetName' => array(
            'type' => 'StreetName',
            'required' => false,
            'subobject' => false,
            'minLength' => '1',
            'maxLength' => '250',
        ),
        'BillToBuildingName' => array(
            'type' => 'BuildingName',
            'required' => false,
            'subobject' => false,
            'minLength' => '1',
            'maxLength' => '50',
        ),
        'BillToStreetNumber' => array(
            'type' => 'StreetNumber',
            'required' => false,
            'subobject' => false,
            'minLength' => '1',
            'maxLength' => '50',
        ),
        'BillToRegistrationNumbers' => array(
            'type' => 'RegistrationNumber',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'BillToBusinessPartyTypeCode' => array(
            'type' => 'BusinessPartyTypeCode',
            'required' => false,
            'subobject' => false,
            'minLength' => '2',
            'maxLength' => '2',
            'enumeration' => 'BU,DC,GV,OT,PR,RE',
        ),
        'Remarks' => array(
            'type' => 'Remarks',
            'required' => false,
            'subobject' => false,
        ),
        'OtherCharges' => array(
            'type' => 'OtherCharge',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'DestinationPort' => array(
            'type' => 'DestinationPort',
            'required' => false,
            'subobject' => false,
        ),
        'TermsOfPayment' => array(
            'type' => 'TermsOfPayment',
            'required' => false,
            'subobject' => false,
        ),
        'ReceiverReference' => array(
            'type' => 'ReceiverReference',
            'required' => false,
            'subobject' => false,
        ),
        'ExporterCode' => array(
            'type' => 'ExporterCode',
            'required' => false,
            'subobject' => false,
        ),
        'ReceiverReference' => array(
            'type' => 'ReceiverReference',
            'required' => false,
            'subobject' => false,
        ),
        'ExporterCode' => array(
            'type' => 'ExporterCode',
            'required' => false,
            'subobject' => false,
        ),
        'PackageMarks' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'OtherRemarks2' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'OtherRemarks3' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankINN' => array(
            'type' => 'RUBankINN',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankKPP' => array(
            'type' => 'RUBankKPP',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankOKPO' => array(
            'type' => 'RUBankOKPO',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankOGRN' => array(
            'type' => 'RUBankOGRN',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankSettlementAcctNumUSDEUR' => array(
            'type' => 'RUBankSettlementAcctNumUSDEUR',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankSettlementAcctNumRUR' => array(
            'type' => 'RUBankSettlementAcctNumRUR',
            'required' => false,
            'subobject' => false,
        ),
        'RUBankName' => array(
            'type' => 'RUBankName',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText1' => array(
            'type' => 'AddDeclText1',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText2' => array(
            'type' => 'AddDeclText2',
            'required' => false,
            'subobject' => false,
        ),
        'AddDeclText3' => array(
            'type' => 'AddDeclText3',
            'required' => false,
            'subobject' => false,
        ),
        'ExportLineItems' => array(
            'type' => 'ExportLineItem',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
            'disableParentNode' => true,
        ),
        'ShipmentDocument' => array(
            'type' => 'ShipmentDocument',
            'required' => false,
            'subobject' => false,
        ),
        'InvoiceInstructions' => array(
            'type' => 'InvoiceInstructions',
            'required' => false,
            'subobject' => false,
            'maxLength' => '300',
        ),
        'CustomerDataTextEntries' => array(
            'type' => 'CustomerDataTextEntry',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'PlaceOfIncoterm' => array(
            'type' => 'PlaceOfIncoterm',
            'required' => false,
            'subobject' => false,
            'maxLength' => '256',
        ),
        'ShipmentPurpose' => array(
            'type' => 'ShipmentPurpose',
            'required' => false,
            'subobject' => false,
            'enumeration' => 'PERSONAL,COMMERCIAL',,
        ),
        'CustomsDocuments' => array(
            'type' => 'CustomsDocument',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
        'InvoiceTotalNetWeight' => array(
            'type' => 'Invoice_Weight',
            'required' => false,
            'subobject' => false,
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999999999.999',
        ),
        'InvoiceTotalGrossWeight' => array(
            'type' => 'Invoice_Weight',
            'required' => false,
            'subobject' => false,
            'fractionDigits' => '3',
            'minInclusive' => '0.000',
            'maxInclusive' => '999999999999.999',
        ),
        'InvoiceReferences' => array(
            'type' => 'InvoiceReference',
            'required' => false,
            'subobject' => true,
            'multivalues' => true,
        ),
    );
}
