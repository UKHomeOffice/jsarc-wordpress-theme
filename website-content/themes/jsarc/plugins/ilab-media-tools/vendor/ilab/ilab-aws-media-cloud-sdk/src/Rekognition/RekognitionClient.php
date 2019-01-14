<?php
namespace ILAB_Aws\Rekognition;

use ILAB_Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Rekognition** service.
 * @method \ILAB_Aws\Result compareFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise compareFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result createCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCollectionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteCollection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCollectionAsync(array $args = [])
 * @method \ILAB_Aws\Result deleteFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result detectFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result detectLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectLabelsAsync(array $args = [])
 * @method \ILAB_Aws\Result detectModerationLabels(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detectModerationLabelsAsync(array $args = [])
 * @method \ILAB_Aws\Result getCelebrityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCelebrityInfoAsync(array $args = [])
 * @method \ILAB_Aws\Result indexFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise indexFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result listCollections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCollectionsAsync(array $args = [])
 * @method \ILAB_Aws\Result listFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result recognizeCelebrities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recognizeCelebritiesAsync(array $args = [])
 * @method \ILAB_Aws\Result searchFaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesAsync(array $args = [])
 * @method \ILAB_Aws\Result searchFacesByImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFacesByImageAsync(array $args = [])
 */
class RekognitionClient extends AwsClient {}
