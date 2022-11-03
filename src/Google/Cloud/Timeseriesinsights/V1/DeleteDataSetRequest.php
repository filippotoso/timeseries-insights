<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/timeseriesinsights/v1/timeseries_insights.proto

namespace Google\Cloud\Timeseriesinsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unload DataSet request from the serving system.
 *
 * Generated from protobuf message <code>google.cloud.timeseriesinsights.v1.DeleteDataSetRequest</code>
 */
class DeleteDataSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Dataset name in the format of "projects/{project}/datasets/{dataset}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Dataset name in the format of "projects/{project}/datasets/{dataset}"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Timeseriesinsights\V1\TimeseriesInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Dataset name in the format of "projects/{project}/datasets/{dataset}"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Dataset name in the format of "projects/{project}/datasets/{dataset}"
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

}
