<?php

namespace App\Imports;

use App\Models\LpTranslates;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LpTranslatesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LpTranslates([
            "category" => $row['category'],
            "key" => $row['key'],
            "landing_ids" => $row['landing_ids'],
            'en' => $row['en'],
            'pl' => $row['pl'],
            'es' => $row['es'],
            'ru' => $row['ru'],
            'de' => $row['de'],
            'th' => $row['th'],
            'pt-br' => $row['pt_br'],
        ]);
    }

    public function headingRow(): int {
        return 1;
    }
}
