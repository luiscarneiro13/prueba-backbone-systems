<?php

namespace App\Imports;

use App\DataEntity;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class EntityFederalImport implements ToModel, WithCustomCsvSettings, WithHeadingRow
{
    public function model(array $row)
    {
        DataEntity::create($row);
    }

    public function getCsvSettings(): array
    {
        return [
            'input_encoding' => 'ISO-8859-1'
        ];
    }
}
