<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/custom_interest_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class CustomInterestError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
;google/ads/googleads/v10/errors/custom_interest_error.protogoogle.ads.googleads.v10.errors"�
CustomInterestErrorEnum"�
CustomInterestError
UNSPECIFIED 
UNKNOWN
NAME_ALREADY_USEDF
BCUSTOM_INTEREST_MEMBER_ID_AND_TYPE_PARAMETER_NOT_PRESENT_IN_REMOVE 
TYPE_AND_PARAMETER_NOT_FOUND&
"TYPE_AND_PARAMETER_ALREADY_EXISTED\'
#INVALID_CUSTOM_INTEREST_MEMBER_TYPE
CANNOT_REMOVE_WHILE_IN_USE
CANNOT_CHANGE_TYPEB�
#com.google.ads.googleads.v10.errorsBCustomInterestErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

