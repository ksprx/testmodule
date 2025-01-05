<?php

return [
    'default' => env('FILESYSTEM_DRIVER', 'local'),

    'disks' => [
        'local' => [
            'adapter' => 'local',
            'root' => storage_path('app'),
        ],
        's3' => [
            'adapter' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID', ''),
            'secret' => env('AWS_SECRET_ACCESS_KEY', ''),
            'region' => env('AWS_DEFAULT_REGION', 'us-west-2'),
            'bucket' => env('AWS_BUCKET', ''),
            'url' => env('AWS_URL', ''),
            'endpoint' => env('AWS_ENDPOINT', ''),
        ],
        'gcs' => [
            'adapter' => 'gcs',
            'project_id' => env('GCS_PROJECT_ID'),
            'key_file' => env('GCS_KEY_FILE'),
            'bucket' => env('GCS_BUCKET'),
        ],
    ],
];
