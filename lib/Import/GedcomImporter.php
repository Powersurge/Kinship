<?php

declare(strict_types=1);

namespace OCA\Kinship\Import;

use OCA\Kinship\Db\Person;
use OCA\Kinship\Service\PersonService;

class GedcomImporter
{

    public function __construct(
        private GedcomParser $parser,
        private PersonService $personService
    ) {
    }


    /**
     * Import GEDCOM file.
     */
    public function import(
        string $content
    ): array {


        $records =
            $this->parser->parse(
                $content
            );


        $people = [];


        foreach ($records as $record) {


            if ($record['tag'] !== 'NAME') {
                continue;
            }


            $person =
                new Person();


            $name =
                $record['value'] ?? '';


            $parts =
                explode(
                    '/',
                    $name
                );


            $person->setFirstName(
                trim(
                    $parts[0]
                )
            );


            $person->setLastName(
                trim(
                    $parts[1] ?? ''
                )
            );


            $saved =
                $this->personService
                    ->create(
                        $person
                    );


            $people[] =
                $saved;

        }


        return $people;

    }

}
