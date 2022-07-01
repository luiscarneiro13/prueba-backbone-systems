<?php

use App\Imports\EntityFederalImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ImportDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new EntityFederalImport(), base_path('app/Data/CPdescarga.csv'));
    }
}
