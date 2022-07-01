<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataEntity extends Model
{

    protected $table = 'data_entities';
    public $timestamps = false;

    protected $fillable = [
        'zip_code',
        'locality',
        'federal_entity_id',
        'federal_entity_name',
        'federal_entity_code',
        'settlement_key',
        'settlement_name',
        'settlement_zone_type',
        'settlement_type_name',
        'municipality_key',
        'municipality_name',
    ];

    public function getLocalityAttribute($value)
    {
        return strtoupper(quitarTildes($value));
    }

    public function getFederalEntityNameAttribute($value)
    {
        return strtoupper(quitarTildes($value));
    }

    public function getSettlementZoneTypeAttribute($value)
    {
        return strtoupper(quitarTildes($value));
    }
    
    public function getMunicipalityNameAttribute($value)
    {
        return strtoupper(quitarTildes($value));
    }

    public function getSettlementNameAttribute($value)
    {
        return strtoupper(quitarTildes($value));
    }
    
    public function getSettlementKeyAttribute($value)
    {
        return (int)$value;
    }
    
    public function getMunicipalityKeyAttribute($value)
    {
        return (int)$value;
    }

}
