<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V10\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of preferences about the planned mix.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.services.Preferences</code>
 */
class Preferences extends \Google\Protobuf\Internal\Message
{
    /**
     * True if ad skippable.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool is_skippable = 6;</code>
     */
    protected $is_skippable = null;
    /**
     * True if ad start with sound.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool starts_with_sound = 7;</code>
     */
    protected $starts_with_sound = null;
    /**
     * The length of the ad.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAdLengthEnum.ReachPlanAdLength ad_length = 3;</code>
     */
    protected $ad_length = 0;
    /**
     * True if ad will only show on the top content.
     * If not set, default is false.
     *
     * Generated from protobuf field <code>optional bool top_content_only = 8;</code>
     */
    protected $top_content_only = null;
    /**
     * True if the price is guaranteed. The cost of serving the ad is agreed
     * upfront and not subject to an auction.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool has_guaranteed_price = 9;</code>
     */
    protected $has_guaranteed_price = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_skippable
     *           True if ad skippable.
     *           If not set, default is any value.
     *     @type bool $starts_with_sound
     *           True if ad start with sound.
     *           If not set, default is any value.
     *     @type int $ad_length
     *           The length of the ad.
     *           If not set, default is any value.
     *     @type bool $top_content_only
     *           True if ad will only show on the top content.
     *           If not set, default is false.
     *     @type bool $has_guaranteed_price
     *           True if the price is guaranteed. The cost of serving the ad is agreed
     *           upfront and not subject to an auction.
     *           If not set, default is any value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * True if ad skippable.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool is_skippable = 6;</code>
     * @return bool
     */
    public function getIsSkippable()
    {
        return isset($this->is_skippable) ? $this->is_skippable : false;
    }

    public function hasIsSkippable()
    {
        return isset($this->is_skippable);
    }

    public function clearIsSkippable()
    {
        unset($this->is_skippable);
    }

    /**
     * True if ad skippable.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool is_skippable = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSkippable($var)
    {
        GPBUtil::checkBool($var);
        $this->is_skippable = $var;

        return $this;
    }

    /**
     * True if ad start with sound.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool starts_with_sound = 7;</code>
     * @return bool
     */
    public function getStartsWithSound()
    {
        return isset($this->starts_with_sound) ? $this->starts_with_sound : false;
    }

    public function hasStartsWithSound()
    {
        return isset($this->starts_with_sound);
    }

    public function clearStartsWithSound()
    {
        unset($this->starts_with_sound);
    }

    /**
     * True if ad start with sound.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool starts_with_sound = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setStartsWithSound($var)
    {
        GPBUtil::checkBool($var);
        $this->starts_with_sound = $var;

        return $this;
    }

    /**
     * The length of the ad.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAdLengthEnum.ReachPlanAdLength ad_length = 3;</code>
     * @return int
     */
    public function getAdLength()
    {
        return $this->ad_length;
    }

    /**
     * The length of the ad.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.ReachPlanAdLengthEnum.ReachPlanAdLength ad_length = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAdLength($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\ReachPlanAdLengthEnum\ReachPlanAdLength::class);
        $this->ad_length = $var;

        return $this;
    }

    /**
     * True if ad will only show on the top content.
     * If not set, default is false.
     *
     * Generated from protobuf field <code>optional bool top_content_only = 8;</code>
     * @return bool
     */
    public function getTopContentOnly()
    {
        return isset($this->top_content_only) ? $this->top_content_only : false;
    }

    public function hasTopContentOnly()
    {
        return isset($this->top_content_only);
    }

    public function clearTopContentOnly()
    {
        unset($this->top_content_only);
    }

    /**
     * True if ad will only show on the top content.
     * If not set, default is false.
     *
     * Generated from protobuf field <code>optional bool top_content_only = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setTopContentOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->top_content_only = $var;

        return $this;
    }

    /**
     * True if the price is guaranteed. The cost of serving the ad is agreed
     * upfront and not subject to an auction.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool has_guaranteed_price = 9;</code>
     * @return bool
     */
    public function getHasGuaranteedPrice()
    {
        return isset($this->has_guaranteed_price) ? $this->has_guaranteed_price : false;
    }

    public function hasHasGuaranteedPrice()
    {
        return isset($this->has_guaranteed_price);
    }

    public function clearHasGuaranteedPrice()
    {
        unset($this->has_guaranteed_price);
    }

    /**
     * True if the price is guaranteed. The cost of serving the ad is agreed
     * upfront and not subject to an auction.
     * If not set, default is any value.
     *
     * Generated from protobuf field <code>optional bool has_guaranteed_price = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasGuaranteedPrice($var)
    {
        GPBUtil::checkBool($var);
        $this->has_guaranteed_price = $var;

        return $this;
    }

}

