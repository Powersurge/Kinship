<?php

declare(strict_types=1);

namespace OCA\Kinship\Migration;

use OCP\DB\ISchemaWrapper;
use OCP\Migration\SimpleMigrationStep;
use OCP\Migration\IOutput;

class Version0005Date20260718000000 extends SimpleMigrationStep
{
    public function changeSchema(
        IOutput $output,
        ISchemaWrapper $schema
    ): ?ISchemaWrapper {

        /*
         * Registered Kinship extensions
         */
        if (!$schema->hasTable('kinship_extensions')) {

            $table = $schema->createTable(
                'kinship_extensions'
            );

            $table->addColumn(
                'id',
                [
                    'type' => 'integer',
                    'autoincrement' => true,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'extension_id',
                [
                    'type' => 'string',
                    'length' => 64,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'name',
                [
                    'type' => 'string',
                    'length' => 128,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'description',
                [
                    'type' => 'text',
                    'notnull' => false
                ]
            );

            $table->addColumn(
                'version',
                [
                    'type' => 'string',
                    'length' => 32,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'enabled',
                [
                    'type' => 'boolean',
                    'notnull' => true,
                    'default' => false
                ]
            );

            $table->addColumn(
                'created_at',
                [
                    'type' => 'integer',
                    'notnull' => true
                ]
            );

            $table->setPrimaryKey(
                ['id']
            );

            $table->addUniqueIndex(
                ['extension_id'],
                'kinship_ext_unique'
            );
        }


        /*
         * Extension configuration storage
         *
         * Allows extensions to keep small
         * settings without creating their
         * own table.
         */
        if (!$schema->hasTable('kinship_extension_config')) {

            $table = $schema->createTable(
                'kinship_extension_config'
            );

            $table->addColumn(
                'id',
                [
                    'type' => 'integer',
                    'autoincrement' => true,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'extension_id',
                [
                    'type' => 'string',
                    'length' => 64,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'config_key',
                [
                    'type' => 'string',
                    'length' => 128,
                    'notnull' => true
                ]
            );

            $table->addColumn(
                'config_value',
                [
                    'type' => 'text',
                    'notnull' => false
                ]
            );

            $table->setPrimaryKey(
                ['id']
            );

            $table->addIndex(
                ['extension_id'],
                'kinship_ext_cfg_idx'
            );

            $table->addUniqueIndex(
                [
                    'extension_id',
                    'config_key'
                ],
                'kinship_ext_cfg_unique'
            );
        }


        return $schema;
    }
}
