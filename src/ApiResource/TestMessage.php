<?php
namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Controller\ApiTestController;

#[ApiResource(
    operations: [
        new Get(
            uriTemplate: '/test',
            controller: ApiTestController::class,
            read: false,
            write: false,
            name: 'api_test',
        )
    ],
    paginationEnabled: false
)]
class TestMessage
{
    public string $message = 'Funciona OK';
}