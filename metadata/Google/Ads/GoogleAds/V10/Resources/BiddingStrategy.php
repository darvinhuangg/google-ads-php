<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/bidding_strategy.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class BiddingStrategy
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
�
Egoogle/ads/googleads/v10/enums/target_impression_share_location.protogoogle.ads.googleads.v10.enums"�
!TargetImpressionShareLocationEnum"~
TargetImpressionShareLocation
UNSPECIFIED 
UNKNOWN
ANYWHERE_ON_PAGE
TOP_OF_PAGE
ABSOLUTE_TOP_OF_PAGEB�
"com.google.ads.googleads.v10.enumsB"TargetImpressionShareLocationProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
-google/ads/googleads/v10/common/bidding.protogoogle.ads.googleads.v10.common"L

Commission#
commission_rate_micros (H �B
_commission_rate_micros"
EnhancedCpc"G
	ManualCpc!
enhanced_cpc_enabled (H �B
_enhanced_cpc_enabled"
	ManualCpm"
	ManualCpv"g
MaximizeConversions

target_cpa (
cpc_bid_ceiling_micros (
cpc_bid_floor_micros ("l
MaximizeConversionValue
target_roas (
cpc_bid_ceiling_micros (
cpc_bid_floor_micros ("�
	TargetCpa
target_cpa_micros (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_cpa_microsB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"
	TargetCpm"�
TargetImpressionShareq
location (2_.google.ads.googleads.v10.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation%
location_fraction_micros (H �#
cpc_bid_ceiling_micros (H�B
_location_fraction_microsB
_cpc_bid_ceiling_micros"�

TargetRoas
target_roas (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_roasB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"�
TargetSpend$
target_spend_micros (BH �#
cpc_bid_ceiling_micros (H�B
_target_spend_microsB
_cpc_bid_ceiling_micros"�

PercentCpc#
cpc_bid_ceiling_micros (H �!
enhanced_cpc_enabled (H�B
_cpc_bid_ceiling_microsB
_enhanced_cpc_enabledB�
#com.google.ads.googleads.v10.commonBBiddingProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/common;common�GAA�Google.Ads.GoogleAds.V10.Common�Google\\Ads\\GoogleAds\\V10\\Common�#Google::Ads::GoogleAds::V10::Commonbproto3
�
<google/ads/googleads/v10/enums/bidding_strategy_status.protogoogle.ads.googleads.v10.enums"l
BiddingStrategyStatusEnum"O
BiddingStrategyStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v10.enumsBBiddingStrategyStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
:google/ads/googleads/v10/enums/bidding_strategy_type.protogoogle.ads.googleads.v10.enums"�
BiddingStrategyTypeEnum"�
BiddingStrategyType
UNSPECIFIED 
UNKNOWN

COMMISSION
ENHANCED_CPC
INVALID

MANUAL_CPC

MANUAL_CPM

MANUAL_CPV
MAXIMIZE_CONVERSIONS

MAXIMIZE_CONVERSION_VALUE
PAGE_ONE_PROMOTED
PERCENT_CPC

TARGET_CPA

TARGET_CPM
TARGET_IMPRESSION_SHARE
TARGET_OUTRANK_SHARE
TARGET_ROAS
TARGET_SPEND	B�
"com.google.ads.googleads.v10.enumsBBiddingStrategyTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
9google/ads/googleads/v10/resources/bidding_strategy.proto"google.ads.googleads.v10.resources<google/ads/googleads/v10/enums/bidding_strategy_status.proto:google/ads/googleads/v10/enums/bidding_strategy_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�	
BiddingStrategyG
resource_name (	B0�A�A*
(googleads.googleapis.com/BiddingStrategy
id (B�AH�
name (	H�d
status (2O.google.ads.googleads.v10.enums.BiddingStrategyStatusEnum.BiddingStrategyStatusB�A^
type (2K.google.ads.googleads.v10.enums.BiddingStrategyTypeEnum.BiddingStrategyTypeB�A
currency_code (	B�A)
effective_currency_code (	B�AH� 
campaign_count (B�AH�,
non_removed_campaign_count (B�AH�D
enhanced_cpc (2,.google.ads.googleads.v10.common.EnhancedCpcH ]
maximize_conversion_value (28.google.ads.googleads.v10.common.MaximizeConversionValueH T
maximize_conversions (24.google.ads.googleads.v10.common.MaximizeConversionsH @

target_cpa	 (2*.google.ads.googleads.v10.common.TargetCpaH Y
target_impression_share0 (26.google.ads.googleads.v10.common.TargetImpressionShareH B
target_roas (2+.google.ads.googleads.v10.common.TargetRoasH D
target_spend (2,.google.ads.googleads.v10.common.TargetSpendH :n�Ak
(googleads.googleapis.com/BiddingStrategy?customers/{customer_id}/biddingStrategies/{bidding_strategy_id}B
schemeB
_idB
_nameB
_effective_currency_codeB
_campaign_countB
_non_removed_campaign_countB�
&com.google.ads.googleads.v10.resourcesBBiddingStrategyProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

