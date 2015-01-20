<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;
$client = S3Client::factory();

$bucket = "acloudguru-phps3bucket";
echo "Creating bucket named {$bucket}\n";
$result = $client->createBucket(array(
    'Bucket' => $bucket
));
?>
