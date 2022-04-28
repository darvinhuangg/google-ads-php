<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/ad_group_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Services;

class AdGroupExtensionSettingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v10/enums/extension_setting_device.protogoogle.ads.googleads.v10.enums"m
ExtensionSettingDeviceEnum"O
ExtensionSettingDevice
UNSPECIFIED 
UNKNOWN

MOBILE
DESKTOPB�
"com.google.ads.googleads.v10.enumsBExtensionSettingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
3google/ads/googleads/v10/enums/extension_type.protogoogle.ads.googleads.v10.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB�
"com.google.ads.googleads.v10.enumsBExtensionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
:google/ads/googleads/v10/enums/response_content_type.protogoogle.ads.googleads.v10.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v10.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Cgoogle/ads/googleads/v10/resources/ad_group_extension_setting.proto"google.ads.googleads.v10.resources3google/ads/googleads/v10/enums/extension_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupExtensionSettingO
resource_name (	B8�A�A2
0googleads.googleapis.com/AdGroupExtensionSetting\\
extension_type (2?.google.ads.googleads.v10.enums.ExtensionTypeEnum.ExtensionTypeB�A?
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH �M
extension_feed_items (	B/�A,
*googleads.googleapis.com/ExtensionFeedItema
device (2Q.google.ads.googleads.v10.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice:��A�
0googleads.googleapis.com/AdGroupExtensionSettingOcustomers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}B
	_ad_groupB�
&com.google.ads.googleads.v10.resourcesBAdGroupExtensionSettingProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3
�
Jgoogle/ads/googleads/v10/services/ad_group_extension_setting_service.proto!google.ads.googleads.v10.servicesCgoogle/ads/googleads/v10/resources/ad_group_extension_setting.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
%MutateAdGroupExtensionSettingsRequest
customer_id (	B�A\\

operations (2C.google.ads.googleads.v10.services.AdGroupExtensionSettingOperationB�A
partial_failure (
validate_only ("�
 AdGroupExtensionSettingOperation/
update_mask (2.google.protobuf.FieldMaskj
response_content_type (2K.google.ads.googleads.v10.enums.ResponseContentTypeEnum.ResponseContentTypeM
create (2;.google.ads.googleads.v10.resources.AdGroupExtensionSettingH M
update (2;.google.ads.googleads.v10.resources.AdGroupExtensionSettingH G
remove (	B5�A2
0googleads.googleapis.com/AdGroupExtensionSettingH B
	operation"�
&MutateAdGroupExtensionSettingsResponse1
partial_failure_error (2.google.rpc.StatusW
results (2F.google.ads.googleads.v10.services.MutateAdGroupExtensionSettingResult"�
#MutateAdGroupExtensionSettingResultL
resource_name (	B5�A2
0googleads.googleapis.com/AdGroupExtensionSetting_
ad_group_extension_setting (2;.google.ads.googleads.v10.resources.AdGroupExtensionSetting2�
AdGroupExtensionSettingService�
MutateAdGroupExtensionSettingsH.google.ads.googleads.v10.services.MutateAdGroupExtensionSettingsRequestI.google.ads.googleads.v10.services.MutateAdGroupExtensionSettingsResponse"b���C">/v10/customers/{customer_id=*}/adGroupExtensionSettings:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v10.servicesB#AdGroupExtensionSettingServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v10/services;services�GAA�!Google.Ads.GoogleAds.V10.Services�!Google\\Ads\\GoogleAds\\V10\\Services�%Google::Ads::GoogleAds::V10::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

