<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace Google\Cloud\Timeseriesinsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time series.
 *
 * Generated from protobuf message <code>google.cloud.timeseriesinsights.v1.Timeseries</code>
 */
class Timeseries extends \Google\Protobuf\Internal\Message
{
    /**
     * The points in this time series, ordered by their timestamp.
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.TimeseriesPoint point = 1;</code>
     */
    private $point;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Timeseriesinsights\V1\TimeseriesPoint>|\Google\Protobuf\Internal\RepeatedField $point
     *           The points in this time series, ordered by their timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Timeseriesinsights\V1\TimeseriesInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The points in this time series, ordered by their timestamp.
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.TimeseriesPoint point = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * The points in this time series, ordered by their timestamp.
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.TimeseriesPoint point = 1;</code>
     * @param array<\Google\Cloud\Timeseriesinsights\V1\TimeseriesPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPoint($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Timeseriesinsights\V1\TimeseriesPoint::class);
        $this->point = $arr;

        return $this;
    }

}
