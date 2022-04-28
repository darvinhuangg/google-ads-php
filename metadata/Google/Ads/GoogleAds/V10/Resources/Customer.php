<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/customer.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class Customer
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
Dgoogle/ads/googleads/v10/enums/conversion_tracking_status_enum.protogoogle.ads.googleads.v10.enums"�
ConversionTrackingStatusEnum"�
ConversionTrackingStatus
UNSPECIFIED 
UNKNOWN
NOT_CONVERSION_TRACKED\'
#CONVERSION_TRACKING_MANAGED_BY_SELF/
+CONVERSION_TRACKING_MANAGED_BY_THIS_MANAGER2
.CONVERSION_TRACKING_MANAGED_BY_ANOTHER_MANAGERB�
"com.google.ads.googleads.v10.enumsB!ConversionTrackingStatusEnumProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
[google/ads/googleads/v10/enums/customer_pay_per_conversion_eligibility_failure_reason.protogoogle.ads.googleads.v10.enums"�
4CustomerPayPerConversionEligibilityFailureReasonEnum"�
0CustomerPayPerConversionEligibilityFailureReason
UNSPECIFIED 
UNKNOWN
NOT_ENOUGH_CONVERSIONS
CONVERSION_LAG_TOO_HIGH#
HAS_CAMPAIGN_WITH_SHARED_BUDGET 
HAS_UPLOAD_CLICKS_CONVERSION 
AVERAGE_DAILY_SPEND_TOO_HIGH
ANALYSIS_NOT_COMPLETE	
OTHERB�
"com.google.ads.googleads.v10.enumsB5CustomerPayPerConversionEligibilityFailureReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
4google/ads/googleads/v10/enums/customer_status.protogoogle.ads.googleads.v10.enums"z
CustomerStatusEnum"d
CustomerStatus
UNSPECIFIED 
UNKNOWN
ENABLED
CANCELED
	SUSPENDED

CLOSEDB�
"com.google.ads.googleads.v10.enumsBCustomerStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
1google/ads/googleads/v10/resources/customer.proto"google.ads.googleads.v10.resources[google/ads/googleads/v10/enums/customer_pay_per_conversion_eligibility_failure_reason.proto4google/ads/googleads/v10/enums/customer_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�

Customer@
resource_name (	B)�A�A#
!googleads.googleapis.com/Customer
id (B�AH �
descriptive_name (	H�
currency_code (	B�AH�
	time_zone (	B�AH�"
tracking_url_template (	H�
final_url_suffix (	H�!
auto_tagging_enabled (H�$
has_partners_badge (B�AH�
manager (B�AH�
test_account (B�AH	�X
call_reporting_setting
 (28.google.ads.googleads.v10.resources.CallReportingSettingg
conversion_tracking_setting (2=.google.ads.googleads.v10.resources.ConversionTrackingSettingB�AX
remarketing_setting (26.google.ads.googleads.v10.resources.RemarketingSettingB�A�
.pay_per_conversion_eligibility_failure_reasons (2�.google.ads.googleads.v10.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReasonB�A$
optimization_score (B�AH
�&
optimization_score_weight (B�AV
status$ (2A.google.ads.googleads.v10.enums.CustomerStatusEnum.CustomerStatusB�A:?�A<
!googleads.googleapis.com/Customercustomers/{customer_id}B
_idB
_descriptive_nameB
_currency_codeB

_time_zoneB
_tracking_url_templateB
_final_url_suffixB
_auto_tagging_enabledB
_has_partners_badgeB

_managerB
_test_accountB
_optimization_score"�
CallReportingSetting#
call_reporting_enabled
 (H �.
!call_conversion_reporting_enabled (H�S
call_conversion_action (	B.�A+
)googleads.googleapis.com/ConversionActionH�B
_call_reporting_enabledB$
"_call_conversion_reporting_enabledB
_call_conversion_action"�
ConversionTrackingSetting(
conversion_tracking_id (B�AH �6
$cross_account_conversion_tracking_id (B�AH�)
accepted_customer_data_terms (B�A~
conversion_tracking_status (2U.google.ads.googleads.v10.enums.ConversionTrackingStatusEnum.ConversionTrackingStatusB�A3
&enhanced_conversions_for_leads_enabled (B�A+
google_ads_conversion_customer (	B�AB
_conversion_tracking_idB\'
%_cross_account_conversion_tracking_id"Y
RemarketingSetting(
google_global_site_tag (	B�AH �B
_google_global_site_tagB�
&com.google.ads.googleads.v10.resourcesBCustomerProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

