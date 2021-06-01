<?php

namespace App\Models;

use App\Models\StructurePart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShedStructure extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parts()
    {
        return $this->hasMany(StructurePart::class);
    }
}
