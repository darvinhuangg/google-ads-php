<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/customer_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class CustomerError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v10/errors/customer_error.protogoogle.ads.googleads.v10.errors"x
CustomerErrorEnum"c
CustomerError
UNSPECIFIED 
UNKNOWN
STATUS_CHANGE_DISALLOWED
ACCOUNT_NOT_SET_UPB�
#com.google.ads.googleads.v10.errorsBCustomerErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

