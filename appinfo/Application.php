<?php

declare(strict_types=1);

namespace OCA\Kinship\AppInfo;

use OCA\Kinship\Db\PersonMapper;
use OCA\Kinship\Service\PersonService;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap
{
    public const APP_ID = 'kinship';

    public function __construct()
    {
        parent::__construct(self::APP_ID);
    }

    public function register(
        IRegistrationContext $context
    ): void {
        $context->registerService(
            PersonMapper::class,
            function ($c) {
                return new PersonMapper(
                    $c->get(\OCP\IDBConnection::class)
                );
            }
        );

        $context->registerService(
            PersonService::class,
            function ($c) {
                return new PersonService(
                    $c->get(PersonMapper::class)
                );
            }
        );
    }

    public function boot(
        IBootContext $context
    ): void {
        // Runtime initialization will be added here.
    }
}
