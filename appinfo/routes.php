<?php

declare(strict_types=1);

return [
    'routes' => [
        [
            'name' => 'person#index',
            'url' => '/api/v1/people',
            'verb' => 'GET',
        ],
        [
            'name' => 'person#create',
            'url' => '/api/v1/people',
            'verb' => 'POST',
        ],
        [
            'name' => 'person#show',
            'url' => '/api/v1/people/{id}',
            'verb' => 'GET',
        ],
        [
            'name' => 'person#update',
            'url' => '/api/v1/people/{id}',
            'verb' => 'PUT',
        ],
        [
            'name' => 'person#destroy',
            'url' => '/api/v1/people/{id}',
            'verb' => 'DELETE',
        ],

        [
            'name' => 'family#index',
            'url' => '/api/v1/families',
            'verb' => 'GET',
        ],
        [
            'name' => 'event#index',
            'url' => '/api/v1/events',
            'verb' => 'GET',
        ],
    ],
];
