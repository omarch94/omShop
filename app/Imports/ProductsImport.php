<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'=>$row['name'],
            'slug'=>$row['slug'], 
            'description' => $row['description'],
            'original_price'=>$row['original_price'],
            'selling_price'=>$row['selling_price'],
            'qty'=>$row['qty'],
            'trending'=>$row['trending']
        ]);
    }
}
