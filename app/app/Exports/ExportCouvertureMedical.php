<?php

namespace App\Exports;

use App\Models\couvertureMedical;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportCouvertureMedical implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return couvertureMedical::select("nom","description")->get();
    }
    public function headings(): array
    {
        return [ "Nom", "Description"];
    }
}
