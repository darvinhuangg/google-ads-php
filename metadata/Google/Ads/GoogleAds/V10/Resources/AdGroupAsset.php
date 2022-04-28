<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/ad_group_asset.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class AdGroupAsset
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
�
5google/ads/googleads/v10/enums/asset_field_type.protogoogle.ads.googleads.v10.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTIONB�
"com.google.ads.googleads.v10.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
6google/ads/googleads/v10/enums/asset_link_status.protogoogle.ads.googleads.v10.enums"l
AssetLinkStatusEnum"U
AssetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

PAUSEDB�
"com.google.ads.googleads.v10.enumsBAssetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
7google/ads/googleads/v10/resources/ad_group_asset.proto"google.ads.googleads.v10.resources6google/ads/googleads/v10/enums/asset_link_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AdGroupAssetD
resource_name (	B-�A�A\'
%googleads.googleapis.com/AdGroupAsset=
ad_group (	B+�A�A�A"
 googleads.googleapis.com/AdGroup8
asset (	B)�A�A�A 
googleads.googleapis.com/Asset]

field_type (2A.google.ads.googleads.v10.enums.AssetFieldTypeEnum.AssetFieldTypeB�A�AS
status (2C.google.ads.googleads.v10.enums.AssetLinkStatusEnum.AssetLinkStatus:w�At
%googleads.googleapis.com/AdGroupAssetKcustomers/{customer_id}/adGroupAssets/{ad_group_id}~{asset_id}~{field_type}B�
&com.google.ads.googleads.v10.resourcesBAdGroupAssetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

