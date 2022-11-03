<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace Google\Cloud\Timeseriesinsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for evaluateTimeseries.
 *
 * Generated from protobuf message <code>google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest</code>
 */
class EvaluateTimeseriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Client project name in the format of 'projects/{project}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Evaluate this time series without requiring it was previously loaded in
     * a data set.
     * The evaluated time series point is the last one, analogous to calling
     * evaluateSlice or query with
     * [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] set to
     * `timeseries.point(timeseries.point_size() - 1).time`.
     * The length of the time series must be at least 10.
     * All points must have the same time offset relative to the granularity. For
     * example, if the [granularity][google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest.granularity] is "5s", then the following
     * point.time sequences are valid:
     * - "100s", "105s", "120s", "125s" (no offset)
     * - "102s", "107s", "122s", "127s" (offset is "2s")
     * However, the following sequence is invalid as it has inconsistent offsets:
     * - "100s", "105s", "122s", "127s" (offsets are either "0s" or "2s")
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.Timeseries timeseries = 2;</code>
     */
    protected $timeseries = null;
    /**
     * The granularity of the time series (time distance between two consecutive
     * points).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration granularity = 3;</code>
     */
    protected $granularity = null;
    /**
     * The forecast parameters.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 4;</code>
     */
    protected $forecast_params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Client project name in the format of 'projects/{project}'.
     *     @type \Google\Cloud\Timeseriesinsights\V1\Timeseries $timeseries
     *           Evaluate this time series without requiring it was previously loaded in
     *           a data set.
     *           The evaluated time series point is the last one, analogous to calling
     *           evaluateSlice or query with
     *           [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] set to
     *           `timeseries.point(timeseries.point_size() - 1).time`.
     *           The length of the time series must be at least 10.
     *           All points must have the same time offset relative to the granularity. For
     *           example, if the [granularity][google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest.granularity] is "5s", then the following
     *           point.time sequences are valid:
     *           - "100s", "105s", "120s", "125s" (no offset)
     *           - "102s", "107s", "122s", "127s" (offset is "2s")
     *           However, the following sequence is invalid as it has inconsistent offsets:
     *           - "100s", "105s", "122s", "127s" (offsets are either "0s" or "2s")
     *     @type \Google\Protobuf\Duration $granularity
     *           The granularity of the time series (time distance between two consecutive
     *           points).
     *     @type \Google\Cloud\Timeseriesinsights\V1\ForecastParams $forecast_params
     *           The forecast parameters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Timeseriesinsights\V1\TimeseriesInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Client project name in the format of 'projects/{project}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Client project name in the format of 'projects/{project}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Evaluate this time series without requiring it was previously loaded in
     * a data set.
     * The evaluated time series point is the last one, analogous to calling
     * evaluateSlice or query with
     * [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] set to
     * `timeseries.point(timeseries.point_size() - 1).time`.
     * The length of the time series must be at least 10.
     * All points must have the same time offset relative to the granularity. For
     * example, if the [granularity][google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest.granularity] is "5s", then the following
     * point.time sequences are valid:
     * - "100s", "105s", "120s", "125s" (no offset)
     * - "102s", "107s", "122s", "127s" (offset is "2s")
     * However, the following sequence is invalid as it has inconsistent offsets:
     * - "100s", "105s", "122s", "127s" (offsets are either "0s" or "2s")
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.Timeseries timeseries = 2;</code>
     * @return \Google\Cloud\Timeseriesinsights\V1\Timeseries|null
     */
    public function getTimeseries()
    {
        return $this->timeseries;
    }

    public function hasTimeseries()
    {
        return isset($this->timeseries);
    }

    public function clearTimeseries()
    {
        unset($this->timeseries);
    }

    /**
     * Evaluate this time series without requiring it was previously loaded in
     * a data set.
     * The evaluated time series point is the last one, analogous to calling
     * evaluateSlice or query with
     * [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] set to
     * `timeseries.point(timeseries.point_size() - 1).time`.
     * The length of the time series must be at least 10.
     * All points must have the same time offset relative to the granularity. For
     * example, if the [granularity][google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest.granularity] is "5s", then the following
     * point.time sequences are valid:
     * - "100s", "105s", "120s", "125s" (no offset)
     * - "102s", "107s", "122s", "127s" (offset is "2s")
     * However, the following sequence is invalid as it has inconsistent offsets:
     * - "100s", "105s", "122s", "127s" (offsets are either "0s" or "2s")
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.Timeseries timeseries = 2;</code>
     * @param \Google\Cloud\Timeseriesinsights\V1\Timeseries $var
     * @return $this
     */
    public function setTimeseries($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Timeseriesinsights\V1\Timeseries::class);
        $this->timeseries = $var;

        return $this;
    }

    /**
     * The granularity of the time series (time distance between two consecutive
     * points).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration granularity = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getGranularity()
    {
        return $this->granularity;
    }

    public function hasGranularity()
    {
        return isset($this->granularity);
    }

    public function clearGranularity()
    {
        unset($this->granularity);
    }

    /**
     * The granularity of the time series (time distance between two consecutive
     * points).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration granularity = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setGranularity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->granularity = $var;

        return $this;
    }

    /**
     * The forecast parameters.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 4;</code>
     * @return \Google\Cloud\Timeseriesinsights\V1\ForecastParams|null
     */
    public function getForecastParams()
    {
        return $this->forecast_params;
    }

    public function hasForecastParams()
    {
        return isset($this->forecast_params);
    }

    public function clearForecastParams()
    {
        unset($this->forecast_params);
    }

    /**
     * The forecast parameters.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 4;</code>
     * @param \Google\Cloud\Timeseriesinsights\V1\ForecastParams $var
     * @return $this
     */
    public function setForecastParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Timeseriesinsights\V1\ForecastParams::class);
        $this->forecast_params = $var;

        return $this;
    }

}

