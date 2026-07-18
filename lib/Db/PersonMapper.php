<?php

declare(strict_types=1);

namespace OCA\Kinship\Db;

use OCP\AppFramework\Db\QBMapper;
use OCP\DB\QueryBuilder\IQueryBuilder;
use OCP\IDBConnection;

class PersonMapper extends QBMapper
{
    public function __construct(IDBConnection $db)
    {
        parent::__construct($db, 'kinship_persons', Person::class);
    }

    /**
     * Return all people.
     *
     * @return Person[]
     */
    public function findAll(): array
    {
        $qb = $this->db->getQueryBuilder();

        $qb->select('*')
            ->from($this->getTableName());

        return $this->findEntities($qb);
    }

    /**
     * Find a person by ID.
     *
     * @param int $id
     * @return Person
     */
    public function find(int $id): Person
    {
        $qb = $this->db->getQueryBuilder();

        $qb->select('*')
            ->from($this->getTableName())
            ->where(
                $qb->expr()->eq(
                    'id',
                    $qb->createNamedParameter($id, IQueryBuilder::PARAM_INT)
                )
            );

        return $this->findEntity($qb);
    }

    /**
     * Delete a person.
     *
     * @param Person $person
     */
    public function delete(Person $person): void
    {
        $this->deleteEntity($person);
    }
}
