<?php

declare(strict_types=1);

namespace OCA\Kinship\Migration;

use OCP\DB\ISchemaWrapper;
use OCP\Migration\SimpleMigrationStep;
use OCP\Migration\IOutput;

class Version0006Date20260718000000
extends SimpleMigrationStep
{

    public function changeSchema(
        IOutput $output,
        ISchemaWrapper $schema
    ): ?ISchemaWrapper {


        $table =
            $schema->getTable(
                'kinship_events'
            );


        if (
            !$table->hasColumn(
                'person_id'
            )
        ) {

            $table->addColumn(
                'person_id',
                [
                    'type' =>
                        'integer',

                    'notnull' =>
                        false
                ]
            );

        }


        if (
            !$table->hasColumn(
                'family_id'
            )
        ) {

            $table->addColumn(
                'family_id',
                [
                    'type' =>
                        'integer',

                    'notnull' =>
                        false
                ]
            );

        }


        return $schema;

    }

}
