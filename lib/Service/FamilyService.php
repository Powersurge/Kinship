<?php

declare(strict_types=1);

namespace OCA\Kinship\Service;

use OCA\Kinship\Db\Family;
use OCA\Kinship\Db\FamilyMapper;

class FamilyService
{
    public function __construct(
        private FamilyMapper $mapper
    ) {
    }

    /**
     * Get all families.
     *
     * @return Family[]
     */
    public function getAll(): array
    {
        return $this->mapper->findAll();
    }

    /**
     * Get a family by ID.
     */
    public function get(
        int $id
    ): Family {
        return $this->mapper->find($id);
    }

    /**
     * Delete a family.
     */
    public function delete(
        Family $family
    ): void {
        $this->mapper->delete($family);
    }
}
