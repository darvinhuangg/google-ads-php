<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/managed_placement_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class ManagedPlacementView
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
?google/ads/googleads/v10/resources/managed_placement_view.proto"google.ads.googleads.v10.resourcesgoogle/api/resource.proto"�
ManagedPlacementViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/ManagedPlacementView:~�A{
-googleads.googleapis.com/ManagedPlacementViewJcustomers/{customer_id}/managedPlacementViews/{ad_group_id}~{criterion_id}B�
&com.google.ads.googleads.v10.resourcesBManagedPlacementViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

