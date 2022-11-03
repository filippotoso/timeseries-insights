<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace Google\Cloud\Timeseriesinsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters that control how we slice the dataset and, optionally, filter
 * slices that have some specific values on some dimensions (pinned dimensions).
 *
 * Generated from protobuf message <code>google.cloud.timeseriesinsights.v1.SlicingParams</code>
 */
class SlicingParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Dimensions over which we will group the events in slices. The names
     * specified here come from the
     * [EventDimension.name][google.cloud.timeseriesinsights.v1.EventDimension.name] field. At least
     * one dimension name must be specified. All dimension names that do not exist
     * in the queried `DataSet` will be ignored.
     * Currently only dimensions that hold string values can be specified here.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dimension_names;
    /**
     * Optional. We will only analyze slices for which
     * [EvaluatedSlice.dimensions][google.cloud.timeseriesinsights.v1.EvaluatedSlice.dimensions] contain all of the
     * following pinned dimensions. A query with a pinned dimension `{ name: "d3"
     * stringVal: "v3" }` will only analyze events which contain the dimension `{
     * name: "d3" stringVal: "v3" }`.
     * The [pinnedDimensions][google.cloud.timeseriesinsights.v1.SlicingParams.pinned_dimensions] and
     * [dimensionNames][google.cloud.timeseriesinsights.v1.SlicingParams.dimension_names] fields can **not**
     * share the same dimension names.
     * Example a valid specification:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d3" stringVal: "v3" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     * In the previous example we will slice the dataset by dimensions "d1",
     * "d2", "d3" and "d4", but we will only analyze slices for which "d3=v3" and
     * "d4=v4".
     * The following example is **invalid** as "d2" is present in both
     * dimensionNames and pinnedDimensions:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d2" stringVal: "v2" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.PinnedDimension pinned_dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $pinned_dimensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $dimension_names
     *           Required. Dimensions over which we will group the events in slices. The names
     *           specified here come from the
     *           [EventDimension.name][google.cloud.timeseriesinsights.v1.EventDimension.name] field. At least
     *           one dimension name must be specified. All dimension names that do not exist
     *           in the queried `DataSet` will be ignored.
     *           Currently only dimensions that hold string values can be specified here.
     *     @type array<\Google\Cloud\Timeseriesinsights\V1\PinnedDimension>|\Google\Protobuf\Internal\RepeatedField $pinned_dimensions
     *           Optional. We will only analyze slices for which
     *           [EvaluatedSlice.dimensions][google.cloud.timeseriesinsights.v1.EvaluatedSlice.dimensions] contain all of the
     *           following pinned dimensions. A query with a pinned dimension `{ name: "d3"
     *           stringVal: "v3" }` will only analyze events which contain the dimension `{
     *           name: "d3" stringVal: "v3" }`.
     *           The [pinnedDimensions][google.cloud.timeseriesinsights.v1.SlicingParams.pinned_dimensions] and
     *           [dimensionNames][google.cloud.timeseriesinsights.v1.SlicingParams.dimension_names] fields can **not**
     *           share the same dimension names.
     *           Example a valid specification:
     *           ```json
     *           {
     *             dimensionNames: ["d1", "d2"],
     *             pinnedDimensions: [
     *               { name: "d3" stringVal: "v3" },
     *               { name: "d4" stringVal: "v4" }
     *             ]
     *           }
     *           ```
     *           In the previous example we will slice the dataset by dimensions "d1",
     *           "d2", "d3" and "d4", but we will only analyze slices for which "d3=v3" and
     *           "d4=v4".
     *           The following example is **invalid** as "d2" is present in both
     *           dimensionNames and pinnedDimensions:
     *           ```json
     *           {
     *             dimensionNames: ["d1", "d2"],
     *             pinnedDimensions: [
     *               { name: "d2" stringVal: "v2" },
     *               { name: "d4" stringVal: "v4" }
     *             ]
     *           }
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Timeseriesinsights\V1\TimeseriesInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Dimensions over which we will group the events in slices. The names
     * specified here come from the
     * [EventDimension.name][google.cloud.timeseriesinsights.v1.EventDimension.name] field. At least
     * one dimension name must be specified. All dimension names that do not exist
     * in the queried `DataSet` will be ignored.
     * Currently only dimensions that hold string values can be specified here.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionNames()
    {
        return $this->dimension_names;
    }

    /**
     * Required. Dimensions over which we will group the events in slices. The names
     * specified here come from the
     * [EventDimension.name][google.cloud.timeseriesinsights.v1.EventDimension.name] field. At least
     * one dimension name must be specified. All dimension names that do not exist
     * in the queried `DataSet` will be ignored.
     * Currently only dimensions that hold string values can be specified here.
     *
     * Generated from protobuf field <code>repeated string dimension_names = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->dimension_names = $arr;

        return $this;
    }

    /**
     * Optional. We will only analyze slices for which
     * [EvaluatedSlice.dimensions][google.cloud.timeseriesinsights.v1.EvaluatedSlice.dimensions] contain all of the
     * following pinned dimensions. A query with a pinned dimension `{ name: "d3"
     * stringVal: "v3" }` will only analyze events which contain the dimension `{
     * name: "d3" stringVal: "v3" }`.
     * The [pinnedDimensions][google.cloud.timeseriesinsights.v1.SlicingParams.pinned_dimensions] and
     * [dimensionNames][google.cloud.timeseriesinsights.v1.SlicingParams.dimension_names] fields can **not**
     * share the same dimension names.
     * Example a valid specification:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d3" stringVal: "v3" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     * In the previous example we will slice the dataset by dimensions "d1",
     * "d2", "d3" and "d4", but we will only analyze slices for which "d3=v3" and
     * "d4=v4".
     * The following example is **invalid** as "d2" is present in both
     * dimensionNames and pinnedDimensions:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d2" stringVal: "v2" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.PinnedDimension pinned_dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPinnedDimensions()
    {
        return $this->pinned_dimensions;
    }

    /**
     * Optional. We will only analyze slices for which
     * [EvaluatedSlice.dimensions][google.cloud.timeseriesinsights.v1.EvaluatedSlice.dimensions] contain all of the
     * following pinned dimensions. A query with a pinned dimension `{ name: "d3"
     * stringVal: "v3" }` will only analyze events which contain the dimension `{
     * name: "d3" stringVal: "v3" }`.
     * The [pinnedDimensions][google.cloud.timeseriesinsights.v1.SlicingParams.pinned_dimensions] and
     * [dimensionNames][google.cloud.timeseriesinsights.v1.SlicingParams.dimension_names] fields can **not**
     * share the same dimension names.
     * Example a valid specification:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d3" stringVal: "v3" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     * In the previous example we will slice the dataset by dimensions "d1",
     * "d2", "d3" and "d4", but we will only analyze slices for which "d3=v3" and
     * "d4=v4".
     * The following example is **invalid** as "d2" is present in both
     * dimensionNames and pinnedDimensions:
     * ```json
     * {
     *   dimensionNames: ["d1", "d2"],
     *   pinnedDimensions: [
     *     { name: "d2" stringVal: "v2" },
     *     { name: "d4" stringVal: "v4" }
     *   ]
     * }
     * ```
     *
     * Generated from protobuf field <code>repeated .google.cloud.timeseriesinsights.v1.PinnedDimension pinned_dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Timeseriesinsights\V1\PinnedDimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPinnedDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Timeseriesinsights\V1\PinnedDimension::class);
        $this->pinned_dimensions = $arr;

        return $this;
    }

}
