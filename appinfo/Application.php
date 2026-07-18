<?php

declare(strict_types=1);

namespace OCA\Kinship\AppInfo;

use OCA\Kinship\Db\PersonMapper;
use OCA\Kinship\Service\PersonService;
use OCA\Kinship\Db\FamilyMapper;
use OCA\Kinship\Service\FamilyService;
use OCA\Kinship\Db\RelationshipMapper;
use OCA\Kinship\Service\RelationshipService;
use OCA\Kinship\Db\EventMapper;
use OCA\Kinship\Service\EventService;
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

        $context->registerService(
            FamilyMapper::class,
            function ($c) {
                return new FamilyMapper(
                    $c->get(\OCP\IDBConnection::class)
                );
            }
        );

        $context->registerService(
            FamilyService::class,
            function ($c) {
                return new FamilyService(
                    $c->get(FamilyMapper::class)
                );
            }
        );

        $context->registerService(
            RelationshipMapper::class,
            function ($c) {
                return new RelationshipMapper(
                    $c->get(\OCP\IDBConnection::class)
                );
            }
        );

        $context->registerService(
            RelationshipService::class,
            function ($c) {
                return new RelationshipService(
                    $c->get(RelationshipMapper::class)
                );
            }
        );

        $context->registerService(
            EventMapper::class,
            function ($c) {
                return new EventMapper(
                    $c->get(\OCP\IDBConnection::class)
                );
            }
        );

        $context->registerService(
            EventService::class,
            function ($c) {
                return new EventService(
                    $c->get(EventMapper::class)
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
