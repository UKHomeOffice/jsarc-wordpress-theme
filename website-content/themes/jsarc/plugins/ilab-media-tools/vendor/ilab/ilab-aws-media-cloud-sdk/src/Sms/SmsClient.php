<?php
namespace ILAB_Aws\Sms;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Server Migration Service** service.
 * @method \ILAB_Aws\Result createReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationJobAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationJobAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerCatalogAsync(array $args = [])
 * @method \ILAB_Aws\Result disassociateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectorAsync(array $args = [])
 * @method \ILAB_Aws\Result getConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorsAsync(array $args = [])
 * @method \ILAB_Aws\Result getReplicationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationJobsAsync(array $args = [])
 * @method \ILAB_Aws\Result getReplicationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationRunsAsync(array $args = [])
 * @method \ILAB_Aws\Result getServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServersAsync(array $args = [])
 * @method \ILAB_Aws\Result importServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importServerCatalogAsync(array $args = [])
 * @method \ILAB_Aws\Result startOnDemandReplicationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOnDemandReplicationRunAsync(array $args = [])
 * @method \ILAB_Aws\Result updateReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationJobAsync(array $args = [])
 */
class SmsClient extends AwsClient {}
