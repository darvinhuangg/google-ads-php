<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/ad_group_customizer.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class AdGroupCustomizer
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v10/enums/customizer_attribute_type.protogoogle.ads.googleads.v10.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v10.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
6google/ads/googleads/v10/common/customizer_value.protogoogle.ads.googleads.v10.commongoogle/api/field_behavior.proto"�
CustomizerValuef
type (2S.google.ads.googleads.v10.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
#com.google.ads.googleads.v10.commonBCustomizerValueProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/common;common�GAA�Google.Ads.GoogleAds.V10.Common�Google\\Ads\\GoogleAds\\V10\\Common�#Google::Ads::GoogleAds::V10::Commonbproto3
�
<google/ads/googleads/v10/enums/customizer_value_status.protogoogle.ads.googleads.v10.enums"l
CustomizerValueStatusEnum"O
CustomizerValueStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v10.enumsBCustomizerValueStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
<google/ads/googleads/v10/resources/ad_group_customizer.proto"google.ads.googleads.v10.resources<google/ads/googleads/v10/enums/customizer_value_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupCustomizerI
resource_name (	B2�A�A,
*googleads.googleapis.com/AdGroupCustomizer:
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupU
customizer_attribute (	B7�A�A�A.
,googleads.googleapis.com/CustomizerAttributed
status (2O.google.ads.googleads.v10.enums.CustomizerValueStatusEnum.CustomizerValueStatusB�AD
value (20.google.ads.googleads.v10.common.CustomizerValueB�A:��A�
*googleads.googleapis.com/AdGroupCustomizerRcustomers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}B�
&com.google.ads.googleads.v10.resourcesBAdGroupCustomizerProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

