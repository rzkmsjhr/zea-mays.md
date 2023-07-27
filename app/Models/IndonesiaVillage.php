<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndonesiaVillage extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'district_code', 'name', 'meta'];

    public static function rules($id = null)
    {
        return [
            'code' => 'required|max:10|unique:indonesia_villages,code,' . $id . ',id',
            'district_code' => 'required|max:7',
            'name' => 'required|max:255',
        ];
    }
}
