<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DataEntityResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $colecciones = $this->collection;
        $agrupado = $colecciones->first();
        $settlements = [];

        foreach ($colecciones as $item) {
            $settlements[] = [
                'key' => $item->settlement_key,
                'name' => $item->settlement_name,
                'zone_type' => $item->settlement_zone_type,
                'settlement_type' => [
                    'name' => $item->settlement_type_name
                ]
            ];
        }

        return [
            'zip_code' => $agrupado->zip_code,
            'locality' => $agrupado->locality,
            'federal_entity' => [
                'key' => $agrupado->federal_entity_id,
                'name' => $agrupado->federal_entity_name,
                'code' => $agrupado->federal_entity_code
            ],
            'settlements' => $settlements,
            'municipality' => [
                'key' => $agrupado->municipality_key,
                'name' => $agrupado->municipality_name
            ]
        ];
    }

}
