<?php
require 'WSO2.php';
$info=json_decode(file_get_contents('php://input'));

$header=$info->header;
$requestPayload=$info->requestPayload;

$messageID=$header->messageID;
$featureCode=$header->featureCode;
$serviceCode=$header->serviceCode;
$serviceSubCategory=$header->serviceSubCategory;
$minorServiceVersion=$header->minorServiceVersion;
$routeCode=$header->routeCode;
$routeCode=$header->routeCode;

$transactionInfo=$requestPayload->transactionInfo;
$transactionID=$transactionInfo->transactionID;
$transactionType=$transactionInfo->transactionType;

$additionalDetails=$requestPayload->additionalDetails;
$keyOwner=$additionalDetails->keyOwner;
$initiatorIdentifierType=$additionalDetails->initiatorIdentifierType;
$initiatorIdentifier=$additionalDetails->initiatorIdentifier;
$initiatorSecurityCredentials=$additionalDetails->initiatorSecurityCredentials;
$initiatorShortCode=$additionalDetails->initiatorShortCode;
$receiverIdentifierType=$additionalDetails->receiverIdentifierType;
$receiverIdentifier=$additionalDetails->receiverIdentifier;
$billerReferenceNo=$additionalDetails->billerReferenceNo;
$amount=$additionalDetails->amount;
$currency=$additionalDetails->currency;

$optionalDetails=$requestPayload->optionalDetails;
$customerName=$optionalDetails->customerName;
$customerMSISDN=$optionalDetails->customerMSISDN;
$transactionNarration=$optionalDetails->transactionNarration;

// Generate db insert statement
// $sql="";

$WSO2= new WSO2;
echo $WSO2::insert($sql);