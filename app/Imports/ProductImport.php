<?php

namespace App\Imports;

use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Products([
            'category_id' => $row[0],
            'name' => $row[1],
            'description' => $row[2],
            'satuan' => $row[3],
            'harga_beli' => $row[4],
            'harga_jual' => $row[5],
            'ukuran_kemasan' => $row[6],
            'volume' => $row[7],
            'berat' => $row[8],
            'stok' => $row[9],
            'aktif' => $row[10]
        ]);
    }
}
