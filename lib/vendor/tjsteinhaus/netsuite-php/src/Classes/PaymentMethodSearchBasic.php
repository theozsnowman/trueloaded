<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2018-04-06 01:37:44 PM EEST
 */

namespace NetSuite\Classes;

class PaymentMethodSearchBasic extends SearchRecordBasic {
    public $account;
    public $creditCard;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isDebitCard;
    public $isInactive;
    public $name;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "creditCard" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDebitCard" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
    );
}
