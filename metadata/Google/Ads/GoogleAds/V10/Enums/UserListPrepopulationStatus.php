<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/user_list_prepopulation_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class UserListPrepopulationStatus
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
Cgoogle/ads/googleads/v10/enums/user_list_prepopulation_status.protogoogle.ads.googleads.v10.enums"�
UserListPrepopulationStatusEnum"d
UserListPrepopulationStatus
UNSPECIFIED 
UNKNOWN
	REQUESTED
FINISHED

FAILEDB�
"com.google.ads.googleads.v10.enumsB UserListPrepopulationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

