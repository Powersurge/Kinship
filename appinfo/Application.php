<?php

declare(strict_types=1);

namespace OCA\Kinship\AppInfo;

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

    public function register(IRegistrationContext $context): void
    {
        // Service registrations will be added here.
        //
        // Example:
        //
        // $context->registerService(
        //     PersonService::class,
        //     function ($c) {
        //         return new PersonService(
        //             $c->get(PersonMapper::class)
        //         );
        //     }
        // );
    }

    public function boot(IBootContext $context): void
    {
        // Runtime initialization will be added here.
        //
        // Examples:
        // - Event listeners
        // - Notification handlers
        // - Extension registration
    }
}
