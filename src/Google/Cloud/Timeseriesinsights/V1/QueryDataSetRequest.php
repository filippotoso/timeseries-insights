<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace Google\Cloud\Timeseriesinsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for performing a query against a loaded DataSet.
 *
 * Generated from protobuf message <code>google.cloud.timeseriesinsights.v1.QueryDataSetRequest</code>
 */
class QueryDataSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Loaded DataSet to be queried in the format of
     * "projects/{project}/datasets/{dataset}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. This is the point in time that we want to probe for anomalies.
     * The corresponding [TimeseriesPoint][google.cloud.timeseriesinsights.v1.TimeseriesPoint] is referred to as the
     * detection point.
     * **NOTE**: As with any other time series point, the value is given by
     * aggregating all events in the slice that are in the
     * [detectionTime, detectionTime + granularity) time interval, where
     * the granularity is specified in the
     * [timeseriesParams.granularity][google.cloud.timeseriesinsights.v1.TimeseriesParams.granularity] field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp detection_time = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $detection_time = null;
    /**
     * How many slices are returned in
     * [QueryDataSetResponse.slices][google.cloud.timeseriesinsights.v1.QueryDataSetResponse.slices].
     * The returned slices are tentatively the ones with the highest
     * [anomaly scores][google.cloud.timeseriesinsights.v1.EvaluatedSlice.anomaly_score] in the dataset that match
     * the query, but it is not guaranteed.
     * Reducing this number will improve query performance, both in terms of
     * latency and resource usage.
     * Defaults to 50.
     *
     * Generated from protobuf field <code>optional int32 num_returned_slices = 13;</code>
     */
    protected $num_returned_slices = null;
    /**
     * Parameters controlling how we will split the dataset into the slices that
     * we will analyze.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.SlicingParams slicing_params = 9;</code>
     */
    protected $slicing_params = null;
    /**
     * Parameters controlling how we will build the time series used to predict
     * the [detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time] value for each slice.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.TimeseriesParams timeseries_params = 10;</code>
     */
    protected $timeseries_params = null;
    /**
     * Parameters that control the time series forecasting models, such as the
     * sensitivity of the anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 5;</code>
     */
    protected $forecast_params = null;
    /**
     * If specified, we will return the actual and forecasted time for all
     * returned slices.
     * The time series are returned in the
     * [EvaluatedSlice.history][google.cloud.timeseriesinsights.v1.EvaluatedSlice.history] and
     * [EvaluatedSlice.forecast][google.cloud.timeseriesinsights.v1.EvaluatedSlice.forecast] fields.
     *
     * Generated from protobuf field <code>bool return_timeseries = 8;</code>
     */
    protected $return_timeseries = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Loaded DataSet to be queried in the format of
     *           "projects/{project}/datasets/{dataset}"
     *     @type \Google\Protobuf\Timestamp $detection_time
     *           Required. This is the point in time that we want to probe for anomalies.
     *           The corresponding [TimeseriesPoint][google.cloud.timeseriesinsights.v1.TimeseriesPoint] is referred to as the
     *           detection point.
     *           **NOTE**: As with any other time series point, the value is given by
     *           aggregating all events in the slice that are in the
     *           [detectionTime, detectionTime + granularity) time interval, where
     *           the granularity is specified in the
     *           [timeseriesParams.granularity][google.cloud.timeseriesinsights.v1.TimeseriesParams.granularity] field.
     *     @type int $num_returned_slices
     *           How many slices are returned in
     *           [QueryDataSetResponse.slices][google.cloud.timeseriesinsights.v1.QueryDataSetResponse.slices].
     *           The returned slices are tentatively the ones with the highest
     *           [anomaly scores][google.cloud.timeseriesinsights.v1.EvaluatedSlice.anomaly_score] in the dataset that match
     *           the query, but it is not guaranteed.
     *           Reducing this number will improve query performance, both in terms of
     *           latency and resource usage.
     *           Defaults to 50.
     *     @type \Google\Cloud\Timeseriesinsights\V1\SlicingParams $slicing_params
     *           Parameters controlling how we will split the dataset into the slices that
     *           we will analyze.
     *     @type \Google\Cloud\Timeseriesinsights\V1\TimeseriesParams $timeseries_params
     *           Parameters controlling how we will build the time series used to predict
     *           the [detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time] value for each slice.
     *     @type \Google\Cloud\Timeseriesinsights\V1\ForecastParams $forecast_params
     *           Parameters that control the time series forecasting models, such as the
     *           sensitivity of the anomaly detection.
     *     @type bool $return_timeseries
     *           If specified, we will return the actual and forecasted time for all
     *           returned slices.
     *           The time series are returned in the
     *           [EvaluatedSlice.history][google.cloud.timeseriesinsights.v1.EvaluatedSlice.history] and
     *           [EvaluatedSlice.forecast][google.cloud.timeseriesinsights.v1.EvaluatedSlice.forecast] fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Timeseriesinsights\V1\TimeseriesInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Loaded DataSet to be queried in the format of
     * "projects/{project}/datasets/{dataset}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Loaded DataSet to be queried in the format of
     * "projects/{project}/datasets/{dataset}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. This is the point in time that we want to probe for anomalies.
     * The corresponding [TimeseriesPoint][google.cloud.timeseriesinsights.v1.TimeseriesPoint] is referred to as the
     * detection point.
     * **NOTE**: As with any other time series point, the value is given by
     * aggregating all events in the slice that are in the
     * [detectionTime, detectionTime + granularity) time interval, where
     * the granularity is specified in the
     * [timeseriesParams.granularity][google.cloud.timeseriesinsights.v1.TimeseriesParams.granularity] field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp detection_time = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDetectionTime()
    {
        return $this->detection_time;
    }

    public function hasDetectionTime()
    {
        return isset($this->detection_time);
    }

    public function clearDetectionTime()
    {
        unset($this->detection_time);
    }

    /**
     * Required. This is the point in time that we want to probe for anomalies.
     * The corresponding [TimeseriesPoint][google.cloud.timeseriesinsights.v1.TimeseriesPoint] is referred to as the
     * detection point.
     * **NOTE**: As with any other time series point, the value is given by
     * aggregating all events in the slice that are in the
     * [detectionTime, detectionTime + granularity) time interval, where
     * the granularity is specified in the
     * [timeseriesParams.granularity][google.cloud.timeseriesinsights.v1.TimeseriesParams.granularity] field.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp detection_time = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDetectionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->detection_time = $var;

        return $this;
    }

    /**
     * How many slices are returned in
     * [QueryDataSetResponse.slices][google.cloud.timeseriesinsights.v1.QueryDataSetResponse.slices].
     * The returned slices are tentatively the ones with the highest
     * [anomaly scores][google.cloud.timeseriesinsights.v1.EvaluatedSlice.anomaly_score] in the dataset that match
     * the query, but it is not guaranteed.
     * Reducing this number will improve query performance, both in terms of
     * latency and resource usage.
     * Defaults to 50.
     *
     * Generated from protobuf field <code>optional int32 num_returned_slices = 13;</code>
     * @return int
     */
    public function getNumReturnedSlices()
    {
        return isset($this->num_returned_slices) ? $this->num_returned_slices : 0;
    }

    public function hasNumReturnedSlices()
    {
        return isset($this->num_returned_slices);
    }

    public function clearNumReturnedSlices()
    {
        unset($this->num_returned_slices);
    }

    /**
     * How many slices are returned in
     * [QueryDataSetResponse.slices][google.cloud.timeseriesinsights.v1.QueryDataSetResponse.slices].
     * The returned slices are tentatively the ones with the highest
     * [anomaly scores][google.cloud.timeseriesinsights.v1.EvaluatedSlice.anomaly_score] in the dataset that match
     * the query, but it is not guaranteed.
     * Reducing this number will improve query performance, both in terms of
     * latency and resource usage.
     * Defaults to 50.
     *
     * Generated from protobuf field <code>optional int32 num_returned_slices = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setNumReturnedSlices($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_returned_slices = $var;

        return $this;
    }

    /**
     * Parameters controlling how we will split the dataset into the slices that
     * we will analyze.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.SlicingParams slicing_params = 9;</code>
     * @return \Google\Cloud\Timeseriesinsights\V1\SlicingParams|null
     */
    public function getSlicingParams()
    {
        return $this->slicing_params;
    }

    public function hasSlicingParams()
    {
        return isset($this->slicing_params);
    }

    public function clearSlicingParams()
    {
        unset($this->slicing_params);
    }

    /**
     * Parameters controlling how we will split the dataset into the slices that
     * we will analyze.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.SlicingParams slicing_params = 9;</code>
     * @param \Google\Cloud\Timeseriesinsights\V1\SlicingParams $var
     * @return $this
     */
    public function setSlicingParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Timeseriesinsights\V1\SlicingParams::class);
        $this->slicing_params = $var;

        return $this;
    }

    /**
     * Parameters controlling how we will build the time series used to predict
     * the [detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time] value for each slice.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.TimeseriesParams timeseries_params = 10;</code>
     * @return \Google\Cloud\Timeseriesinsights\V1\TimeseriesParams|null
     */
    public function getTimeseriesParams()
    {
        return $this->timeseries_params;
    }

    public function hasTimeseriesParams()
    {
        return isset($this->timeseries_params);
    }

    public function clearTimeseriesParams()
    {
        unset($this->timeseries_params);
    }

    /**
     * Parameters controlling how we will build the time series used to predict
     * the [detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time] value for each slice.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.TimeseriesParams timeseries_params = 10;</code>
     * @param \Google\Cloud\Timeseriesinsights\V1\TimeseriesParams $var
     * @return $this
     */
    public function setTimeseriesParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Timeseriesinsights\V1\TimeseriesParams::class);
        $this->timeseries_params = $var;

        return $this;
    }

    /**
     * Parameters that control the time series forecasting models, such as the
     * sensitivity of the anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 5;</code>
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
     * Parameters that control the time series forecasting models, such as the
     * sensitivity of the anomaly detection.
     *
     * Generated from protobuf field <code>.google.cloud.timeseriesinsights.v1.ForecastParams forecast_params = 5;</code>
     * @param \Google\Cloud\Timeseriesinsights\V1\ForecastParams $var
     * @return $this
     */
    public function setForecastParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Timeseriesinsights\V1\ForecastParams::class);
        $this->forecast_params = $var;

        return $this;
    }

    /**
     * If specified, we will return the actual and forecasted time for all
     * returned slices.
     * The time series are returned in the
     * [EvaluatedSlice.history][google.cloud.timeseriesinsights.v1.EvaluatedSlice.history] and
     * [EvaluatedSlice.forecast][google.cloud.timeseriesinsights.v1.EvaluatedSlice.forecast] fields.
     *
     * Generated from protobuf field <code>bool return_timeseries = 8;</code>
     * @return bool
     */
    public function getReturnTimeseries()
    {
        return $this->return_timeseries;
    }

    /**
     * If specified, we will return the actual and forecasted time for all
     * returned slices.
     * The time series are returned in the
     * [EvaluatedSlice.history][google.cloud.timeseriesinsights.v1.EvaluatedSlice.history] and
     * [EvaluatedSlice.forecast][google.cloud.timeseriesinsights.v1.EvaluatedSlice.forecast] fields.
     *
     * Generated from protobuf field <code>bool return_timeseries = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnTimeseries($var)
    {
        GPBUtil::checkBool($var);
        $this->return_timeseries = $var;

        return $this;
    }

}
