<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/quota_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class QuotaError
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
1google/ads/googleads/v10/errors/quota_error.protogoogle.ads.googleads.v10.errors"�
QuotaErrorEnum"}

QuotaError
UNSPECIFIED 
UNKNOWN
RESOURCE_EXHAUSTED
ACCESS_PROHIBITED"
RESOURCE_TEMPORARILY_EXHAUSTEDB�
#com.google.ads.googleads.v10.errorsBQuotaErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

