<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/campaign_criterion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class CampaignCriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�	
>google/ads/googleads/v10/errors/campaign_criterion_error.protogoogle.ads.googleads.v10.errors"�
CampaignCriterionErrorEnum"�
CampaignCriterionError
UNSPECIFIED 
UNKNOWN
CONCRETE_TYPE_REQUIRED
INVALID_PLACEMENT_URL 
CANNOT_EXCLUDE_CRITERIA_TYPE\'
#CANNOT_SET_STATUS_FOR_CRITERIA_TYPE+
\'CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA
CANNOT_TARGET_AND_EXCLUDE
TOO_MANY_OPERATIONS-
)OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE	C
?SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL

CANNOT_ADD_EXISTING_FIELD$
 CANNOT_UPDATE_NEGATIVE_CRITERION8
4CANNOT_SET_NEGATIVE_KEYWORD_THEME_CONSTANT_CRITERION"
INVALID_KEYWORD_THEME_CONSTANT=
9MISSING_KEYWORD_THEME_CONSTANT_OR_FREE_FORM_KEYWORD_THEMEI
ECANNOT_TARGET_BOTH_PROXIMITY_AND_LOCATION_CRITERIA_FOR_SMART_CAMPAIGN@
<CANNOT_TARGET_MULTIPLE_PROXIMITY_CRITERIA_FOR_SMART_CAMPAIGNB�
#com.google.ads.googleads.v10.errorsBCampaignCriterionErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

