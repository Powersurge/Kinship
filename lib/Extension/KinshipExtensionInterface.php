<?php

declare(strict_types=1);

namespace OCA\Kinship\Extension;

interface KinshipExtensionInterface
{
    public function getId(): string;

    public function getName(): string;

    public function getVersion(): string;

    public function register(): void;
}
