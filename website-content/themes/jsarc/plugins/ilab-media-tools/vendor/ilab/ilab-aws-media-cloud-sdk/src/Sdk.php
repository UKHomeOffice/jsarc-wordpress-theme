<?php
namespace ILAB_Aws;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \ILAB_Aws\Acm\AcmClient createAcm(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \ILAB_Aws\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \ILAB_Aws\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \ILAB_Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \ILAB_Aws\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \ILAB_Aws\Athena\AthenaClient createAthena(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method \ILAB_Aws\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \ILAB_Aws\Batch\BatchClient createBatch(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \ILAB_Aws\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \ILAB_Aws\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method \ILAB_Aws\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \ILAB_Aws\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \ILAB_Aws\CloudHSMV2\CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method \ILAB_Aws\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \ILAB_Aws\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \ILAB_Aws\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \ILAB_Aws\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \ILAB_Aws\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \ILAB_Aws\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \ILAB_Aws\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \ILAB_Aws\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \ILAB_Aws\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \ILAB_Aws\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \ILAB_Aws\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \ILAB_Aws\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method \ILAB_Aws\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \ILAB_Aws\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \ILAB_Aws\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \ILAB_Aws\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \ILAB_Aws\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method \ILAB_Aws\DAX\DAXClient createDAX(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method \ILAB_Aws\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \ILAB_Aws\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \ILAB_Aws\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \ILAB_Aws\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \ILAB_Aws\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \ILAB_Aws\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \ILAB_Aws\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \ILAB_Aws\Ec2\Ec2Client createEc2(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \ILAB_Aws\Ecr\EcrClient createEcr(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \ILAB_Aws\Ecs\EcsClient createEcs(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \ILAB_Aws\Efs\EfsClient createEfs(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \ILAB_Aws\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \ILAB_Aws\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \ILAB_Aws\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \ILAB_Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \ILAB_Aws\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \ILAB_Aws\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \ILAB_Aws\Emr\EmrClient createEmr(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \ILAB_Aws\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \ILAB_Aws\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \ILAB_Aws\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \ILAB_Aws\Glue\GlueClient createGlue(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method \ILAB_Aws\Greengrass\GreengrassClient createGreengrass(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method \ILAB_Aws\Health\HealthClient createHealth(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \ILAB_Aws\Iam\IamClient createIam(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \ILAB_Aws\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \ILAB_Aws\Inspector\InspectorClient createInspector(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \ILAB_Aws\Iot\IotClient createIot(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \ILAB_Aws\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \ILAB_Aws\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \ILAB_Aws\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \ILAB_Aws\Kms\KmsClient createKms(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \ILAB_Aws\Lambda\LambdaClient createLambda(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \ILAB_Aws\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method \ILAB_Aws\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method \ILAB_Aws\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \ILAB_Aws\MTurk\MTurkClient createMTurk(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method \ILAB_Aws\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \ILAB_Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \ILAB_Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method \ILAB_Aws\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \ILAB_Aws\MigrationHub\MigrationHubClient createMigrationHub(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method \ILAB_Aws\Mobile\MobileClient createMobile(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method \ILAB_Aws\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \ILAB_Aws\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \ILAB_Aws\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method \ILAB_Aws\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \ILAB_Aws\Polly\PollyClient createPolly(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \ILAB_Aws\Rds\RdsClient createRds(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \ILAB_Aws\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \ILAB_Aws\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \ILAB_Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method \ILAB_Aws\Route53\Route53Client createRoute53(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \ILAB_Aws\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \ILAB_Aws\S3\S3Client createS3(array $args = [])
 * @method \ILAB_Aws\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \ILAB_Aws\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \ILAB_Aws\Ses\SesClient createSes(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \ILAB_Aws\Sfn\SfnClient createSfn(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \ILAB_Aws\Shield\ShieldClient createShield(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \ILAB_Aws\Sms\SmsClient createSms(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \ILAB_Aws\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \ILAB_Aws\Sns\SnsClient createSns(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \ILAB_Aws\Sqs\SqsClient createSqs(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \ILAB_Aws\Ssm\SsmClient createSsm(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \ILAB_Aws\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \ILAB_Aws\Sts\StsClient createSts(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \ILAB_Aws\Support\SupportClient createSupport(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \ILAB_Aws\Swf\SwfClient createSwf(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \ILAB_Aws\Waf\WafClient createWaf(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \ILAB_Aws\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \ILAB_Aws\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method \ILAB_Aws\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \ILAB_Aws\XRay\XRayClient createXRay(array $args = [])
 * @method \ILAB_Aws\MultiRegionClient createMultiRegionXRay(array $args = [])
 */
class Sdk
{
    const VERSION = '3.36.4';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see Aws\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        } elseif (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see Aws\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "ILAB_Aws\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "ILAB_Aws\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'ILAB_Aws\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\ILAB_Aws\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
