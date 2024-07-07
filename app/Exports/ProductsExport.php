<?php

namespace App\Exports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Products::all();
    }

    public function headings(): array
    {
        return [
            'category_id',
            'name',
            'description',
            'satuan',
            'harga_beli',
            'harga_jual',
            'ukuran_kemasan',
            'volume',
            'berat',
            'stok',
            'aktif',
        ];
    }
}
