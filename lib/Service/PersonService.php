<?php

declare(strict_types=1);

namespace OCA\Kinship\Service;

use OCA\Kinship\Db\Person;
use OCA\Kinship\Db\PersonMapper;

class PersonService
{
    public function __construct(
        private PersonMapper $mapper
    ) {
    }

    /**
     * Get all people.
     *
     * @return Person[]
     */
    public function getAll(): array
    {
        return $this->mapper->findAll();
    }

    /**
     * Get a person by ID.
     */
    public function get(int $id): Person
    {
        return $this->mapper->find($id);
    }

    /**
     * Delete a person.
     */
    public function delete(Person $person): void
    {
        $this->mapper->delete($person);
    }
}
