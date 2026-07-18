<?php

declare(strict_types=1);

namespace OCA\Kinship\Import;

class GedcomParser
{
    /**
     * Parse GEDCOM text.
     */
    public function parse(
        string $content
    ): array {

        $lines =
            preg_split(
                "/\r\n|\n|\r/",
                $content
            );


        $records = [];

        foreach ($lines as $line) {

            if (trim($line) === '') {
                continue;
            }


            $parts =
                explode(
                    ' ',
                    $line,
                    3
                );


            $level =
                (int)$parts[0];


            $tag =
                $parts[1] ?? '';


            $value =
                $parts[2] ?? null;


            $records[] = [

                'level' => $level,

                'tag' => $tag,

                'value' => $value

            ];

        }


        return $records;
    }
}
