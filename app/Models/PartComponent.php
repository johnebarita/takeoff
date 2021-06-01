<?php

namespace App\Models;

use App\Models\PartUsage;
use App\Models\StructurePart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartComponent extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function part(){
        return $this->belongsTo(StructurePart::class);
    }

    public function usage(){
        return $this->belongsTo(PartUsage::class,'part_usage_id');
    }
}
