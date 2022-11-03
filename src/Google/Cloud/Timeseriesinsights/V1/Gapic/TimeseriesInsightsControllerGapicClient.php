<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/timeseriesinsights/v1/timeseries_insights.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Timeseriesinsights\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Timeseriesinsights\V1\AppendEventsRequest;
use Google\Cloud\Timeseriesinsights\V1\AppendEventsResponse;
use Google\Cloud\Timeseriesinsights\V1\CreateDataSetRequest;
use Google\Cloud\Timeseriesinsights\V1\DataSet;
use Google\Cloud\Timeseriesinsights\V1\DeleteDataSetRequest;
use Google\Cloud\Timeseriesinsights\V1\EvaluatedSlice;
use Google\Cloud\Timeseriesinsights\V1\EvaluateSliceRequest;
use Google\Cloud\Timeseriesinsights\V1\EvaluateTimeseriesRequest;
use Google\Cloud\Timeseriesinsights\V1\Event;
use Google\Cloud\Timeseriesinsights\V1\ForecastParams;
use Google\Cloud\Timeseriesinsights\V1\ListDataSetsRequest;
use Google\Cloud\Timeseriesinsights\V1\ListDataSetsResponse;
use Google\Cloud\Timeseriesinsights\V1\PinnedDimension;
use Google\Cloud\Timeseriesinsights\V1\QueryDataSetRequest;
use Google\Cloud\Timeseriesinsights\V1\QueryDataSetResponse;
use Google\Cloud\Timeseriesinsights\V1\SlicingParams;
use Google\Cloud\Timeseriesinsights\V1\Timeseries;
use Google\Cloud\Timeseriesinsights\V1\TimeseriesParams;
use Google\Protobuf\Duration;
use Google\Protobuf\GPBEmpty;
use Google\Protobuf\Timestamp;

/**
 * Service Description:
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
 * try {
 *     $formattedDataset = $timeseriesInsightsControllerClient->datasetName('[PROJECT]', '[DATASET]');
 *     $response = $timeseriesInsightsControllerClient->appendEvents($formattedDataset);
 * } finally {
 *     $timeseriesInsightsControllerClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class TimeseriesInsightsControllerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.timeseriesinsights.v1.TimeseriesInsightsController';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'timeseriesinsights.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $datasetNameTemplate;

    private static $projectNameTemplate;

    private static $projectDatasetNameTemplate;

    private static $projectLocationDatasetNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/timeseries_insights_controller_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/timeseries_insights_controller_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/timeseries_insights_controller_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/timeseries_insights_controller_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getDatasetNameTemplate()
    {
        if (self::$datasetNameTemplate == null) {
            self::$datasetNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}');
        }

        return self::$datasetNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getProjectDatasetNameTemplate()
    {
        if (self::$projectDatasetNameTemplate == null) {
            self::$projectDatasetNameTemplate = new PathTemplate('projects/{project}/datasets/{dataset}');
        }

        return self::$projectDatasetNameTemplate;
    }

    private static function getProjectLocationDatasetNameTemplate()
    {
        if (self::$projectLocationDatasetNameTemplate == null) {
            self::$projectLocationDatasetNameTemplate = new PathTemplate('projects/{project}/locations/{location}/datasets/{dataset}');
        }

        return self::$projectLocationDatasetNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'dataset' => self::getDatasetNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'projectDataset' => self::getProjectDatasetNameTemplate(),
                'projectLocationDataset' => self::getProjectLocationDatasetNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a dataset
     * resource.
     *
     * @param string $project
     * @param string $dataset
     *
     * @return string The formatted dataset resource.
     */
    public static function datasetName($project, $dataset)
    {
        return self::getDatasetNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_dataset resource.
     *
     * @param string $project
     * @param string $dataset
     *
     * @return string The formatted project_dataset resource.
     */
    public static function projectDatasetName($project, $dataset)
    {
        return self::getProjectDatasetNameTemplate()->render([
            'project' => $project,
            'dataset' => $dataset,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_dataset resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataset
     *
     * @return string The formatted project_location_dataset resource.
     */
    public static function projectLocationDatasetName($project, $location, $dataset)
    {
        return self::getProjectLocationDatasetNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'dataset' => $dataset,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - dataset: projects/{project}/datasets/{dataset}
     * - project: projects/{project}
     * - projectDataset: projects/{project}/datasets/{dataset}
     * - projectLocationDataset: projects/{project}/locations/{location}/datasets/{dataset}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'timeseriesinsights.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Append events to a `LOADED` [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedDataset = $timeseriesInsightsControllerClient->datasetName('[PROJECT]', '[DATASET]');
     *     $response = $timeseriesInsightsControllerClient->appendEvents($formattedDataset);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string $dataset      Required. The DataSet to which we want to append to in the format of
     *                             "projects/{project}/datasets/{dataset}"
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type Event[] $events
     *           Events to be appended.
     *
     *           Note:
     *
     *           0. The [DataSet][google.cloud.timeseriesinsights.v1.DataSet] must be shown in a `LOADED` state
     *           in the results of `list` method; otherwise, all events from
     *           the append request will be dropped, and a `NOT_FOUND` status will be
     *           returned.
     *           0. All events in a single request must have the same
     *           [groupId][google.cloud.timeseriesinsights.v1.Event.group_id] if set; otherwise, an
     *           `INVALID_ARGUMENT` status will be returned.
     *           0. If [groupId][google.cloud.timeseriesinsights.v1.Event.group_id] is not set (or 0), there
     *           should be only 1 event; otherwise, an `INVALID_ARGUMENT` status will be
     *           returned.
     *           0. The events must be newer than the current time minus
     *           [DataSet TTL][google.cloud.timeseriesinsights.v1.DataSet.ttl] or they will be dropped.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Timeseriesinsights\V1\AppendEventsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function appendEvents($dataset, array $optionalArgs = [])
    {
        $request = new AppendEventsRequest();
        $requestParamHeaders = [];
        $request->setDataset($dataset);
        $requestParamHeaders['dataset'] = $dataset;
        if (isset($optionalArgs['events'])) {
            $request->setEvents($optionalArgs['events']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('AppendEvents', AppendEventsResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * Create a [DataSet][google.cloud.timeseriesinsights.v1.DataSet] from data stored on Cloud
     * Storage.
     *
     * The data must stay immutable while we process the
     * [DataSet][google.cloud.timeseriesinsights.v1.DataSet] creation; otherwise, undefined outcomes
     * might result.  For more information, see [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedParent = $timeseriesInsightsControllerClient->projectName('[PROJECT]');
     *     $dataset = new DataSet();
     *     $response = $timeseriesInsightsControllerClient->createDataSet($formattedParent, $dataset);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string  $parent       Required. Client project name which will own this DataSet in the format of
     *                              'projects/{project}'.
     * @param DataSet $dataset      Required. Dataset to be loaded.
     * @param array   $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Timeseriesinsights\V1\DataSet
     *
     * @throws ApiException if the remote call fails
     */
    public function createDataSet($parent, $dataset, array $optionalArgs = [])
    {
        $request = new CreateDataSetRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setDataset($dataset);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateDataSet', DataSet::class, $optionalArgs, $request)->wait();
    }

    /**
     * Delete a [DataSet][google.cloud.timeseriesinsights.v1.DataSet] from the system.
     *
     * **NOTE**: If the [DataSet][google.cloud.timeseriesinsights.v1.DataSet] is still being
     * processed, it will be aborted and deleted.
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedName = $timeseriesInsightsControllerClient->datasetName('[PROJECT]', '[DATASET]');
     *     $timeseriesInsightsControllerClient->deleteDataSet($formattedName);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Dataset name in the format of "projects/{project}/datasets/{dataset}"
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     */
    public function deleteDataSet($name, array $optionalArgs = [])
    {
        $request = new DeleteDataSetRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteDataSet', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Evaluate an explicit slice from a loaded [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedDataset = $timeseriesInsightsControllerClient->datasetName('[PROJECT]', '[DATASET]');
     *     $pinnedDimensions = [];
     *     $detectionTime = new Timestamp();
     *     $response = $timeseriesInsightsControllerClient->evaluateSlice($formattedDataset, $pinnedDimensions, $detectionTime);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string            $dataset          Required. Loaded DataSet to be queried in the format of
     *                                            "projects/{project}/datasets/{dataset}"
     * @param PinnedDimension[] $pinnedDimensions Required. Dimensions with pinned values that specify the slice for which we will
     *                                            fetch the time series.
     * @param Timestamp         $detectionTime    Required. This is the point in time that we want to probe for anomalies.
     *
     *                                            See documentation for
     *                                            [QueryDataSetRequest.detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time].
     * @param array             $optionalArgs     {
     *     Optional.
     *
     *     @type TimeseriesParams $timeseriesParams
     *           Parameters controlling how we will build the time series used to predict
     *           the [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] value for this slice.
     *     @type ForecastParams $forecastParams
     *           Parameters that control the time series forecasting models, such as the
     *           sensitivity of the anomaly detection.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Timeseriesinsights\V1\EvaluatedSlice
     *
     * @throws ApiException if the remote call fails
     */
    public function evaluateSlice($dataset, $pinnedDimensions, $detectionTime, array $optionalArgs = [])
    {
        $request = new EvaluateSliceRequest();
        $requestParamHeaders = [];
        $request->setDataset($dataset);
        $request->setPinnedDimensions($pinnedDimensions);
        $request->setDetectionTime($detectionTime);
        $requestParamHeaders['dataset'] = $dataset;
        if (isset($optionalArgs['timeseriesParams'])) {
            $request->setTimeseriesParams($optionalArgs['timeseriesParams']);
        }

        if (isset($optionalArgs['forecastParams'])) {
            $request->setForecastParams($optionalArgs['forecastParams']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('EvaluateSlice', EvaluatedSlice::class, $optionalArgs, $request)->wait();
    }

    /**
     * Evaluate an explicit timeseries.
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedParent = $timeseriesInsightsControllerClient->projectName('[PROJECT]');
     *     $response = $timeseriesInsightsControllerClient->evaluateTimeseries($formattedParent);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Client project name in the format of 'projects/{project}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type Timeseries $timeseries
     *           Evaluate this time series without requiring it was previously loaded in
     *           a data set.
     *
     *           The evaluated time series point is the last one, analogous to calling
     *           evaluateSlice or query with
     *           [detectionTime][google.cloud.timeseriesinsights.v1.EvaluateSliceRequest.detection_time] set to
     *           `timeseries.point(timeseries.point_size() - 1).time`.
     *
     *           The length of the time series must be at least 10.
     *
     *           All points must have the same time offset relative to the granularity. For
     *           example, if the [granularity][google.cloud.timeseriesinsights.v1.EvaluateTimeseriesRequest.granularity] is "5s", then the following
     *           point.time sequences are valid:
     *           - "100s", "105s", "120s", "125s" (no offset)
     *           - "102s", "107s", "122s", "127s" (offset is "2s")
     *           However, the following sequence is invalid as it has inconsistent offsets:
     *           - "100s", "105s", "122s", "127s" (offsets are either "0s" or "2s")
     *     @type Duration $granularity
     *           The granularity of the time series (time distance between two consecutive
     *           points).
     *     @type ForecastParams $forecastParams
     *           The forecast parameters.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Timeseriesinsights\V1\EvaluatedSlice
     *
     * @throws ApiException if the remote call fails
     */
    public function evaluateTimeseries($parent, array $optionalArgs = [])
    {
        $request = new EvaluateTimeseriesRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['timeseries'])) {
            $request->setTimeseries($optionalArgs['timeseries']);
        }

        if (isset($optionalArgs['granularity'])) {
            $request->setGranularity($optionalArgs['granularity']);
        }

        if (isset($optionalArgs['forecastParams'])) {
            $request->setForecastParams($optionalArgs['forecastParams']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('EvaluateTimeseries', EvaluatedSlice::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists [DataSets][google.cloud.timeseriesinsights.v1.DataSet] under the project.
     *
     * The order of the results is unspecified but deterministic. Newly created
     * [DataSets][google.cloud.timeseriesinsights.v1.DataSet] will not necessarily be added to the end
     * of this list.
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedParent = $timeseriesInsightsControllerClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $timeseriesInsightsControllerClient->listDataSets($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $timeseriesInsightsControllerClient->listDataSets($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Project owning the DataSet in the format of "projects/{project}".
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listDataSets($parent, array $optionalArgs = [])
    {
        $request = new ListDataSetsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListDataSets', $optionalArgs, ListDataSetsResponse::class, $request);
    }

    /**
     * Execute a Timeseries Insights query over a loaded
     * [DataSet][google.cloud.timeseriesinsights.v1.DataSet].
     *
     * Sample code:
     * ```
     * $timeseriesInsightsControllerClient = new TimeseriesInsightsControllerClient();
     * try {
     *     $formattedName = $timeseriesInsightsControllerClient->datasetName('[PROJECT]', '[DATASET]');
     *     $detectionTime = new Timestamp();
     *     $response = $timeseriesInsightsControllerClient->queryDataSet($formattedName, $detectionTime);
     * } finally {
     *     $timeseriesInsightsControllerClient->close();
     * }
     * ```
     *
     * @param string    $name          Required. Loaded DataSet to be queried in the format of
     *                                 "projects/{project}/datasets/{dataset}"
     * @param Timestamp $detectionTime Required. This is the point in time that we want to probe for anomalies.
     *
     *                                 The corresponding [TimeseriesPoint][google.cloud.timeseriesinsights.v1.TimeseriesPoint] is referred to as the
     *                                 detection point.
     *
     *                                 **NOTE**: As with any other time series point, the value is given by
     *                                 aggregating all events in the slice that are in the
     *                                 [detectionTime, detectionTime + granularity) time interval, where
     *                                 the granularity is specified in the
     *                                 [timeseriesParams.granularity][google.cloud.timeseriesinsights.v1.TimeseriesParams.granularity] field.
     * @param array     $optionalArgs  {
     *     Optional.
     *
     *     @type int $numReturnedSlices
     *           How many slices are returned in
     *           [QueryDataSetResponse.slices][google.cloud.timeseriesinsights.v1.QueryDataSetResponse.slices].
     *
     *           The returned slices are tentatively the ones with the highest
     *           [anomaly scores][google.cloud.timeseriesinsights.v1.EvaluatedSlice.anomaly_score] in the dataset that match
     *           the query, but it is not guaranteed.
     *
     *           Reducing this number will improve query performance, both in terms of
     *           latency and resource usage.
     *
     *           Defaults to 50.
     *     @type SlicingParams $slicingParams
     *           Parameters controlling how we will split the dataset into the slices that
     *           we will analyze.
     *     @type TimeseriesParams $timeseriesParams
     *           Parameters controlling how we will build the time series used to predict
     *           the [detectionTime][google.cloud.timeseriesinsights.v1.QueryDataSetRequest.detection_time] value for each slice.
     *     @type ForecastParams $forecastParams
     *           Parameters that control the time series forecasting models, such as the
     *           sensitivity of the anomaly detection.
     *     @type bool $returnTimeseries
     *           If specified, we will return the actual and forecasted time for all
     *           returned slices.
     *
     *           The time series are returned in the
     *           [EvaluatedSlice.history][google.cloud.timeseriesinsights.v1.EvaluatedSlice.history] and
     *           [EvaluatedSlice.forecast][google.cloud.timeseriesinsights.v1.EvaluatedSlice.forecast] fields.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Timeseriesinsights\V1\QueryDataSetResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function queryDataSet($name, $detectionTime, array $optionalArgs = [])
    {
        $request = new QueryDataSetRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $request->setDetectionTime($detectionTime);
        $requestParamHeaders['name'] = $name;
        if (isset($optionalArgs['numReturnedSlices'])) {
            $request->setNumReturnedSlices($optionalArgs['numReturnedSlices']);
        }

        if (isset($optionalArgs['slicingParams'])) {
            $request->setSlicingParams($optionalArgs['slicingParams']);
        }

        if (isset($optionalArgs['timeseriesParams'])) {
            $request->setTimeseriesParams($optionalArgs['timeseriesParams']);
        }

        if (isset($optionalArgs['forecastParams'])) {
            $request->setForecastParams($optionalArgs['forecastParams']);
        }

        if (isset($optionalArgs['returnTimeseries'])) {
            $request->setReturnTimeseries($optionalArgs['returnTimeseries']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('QueryDataSet', QueryDataSetResponse::class, $optionalArgs, $request)->wait();
    }
}