<?php

namespace App\Models;

use App\Models\ShedStructure;
use App\Models\PartComponent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructurePart extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $with = ['sets'];

    public function structure()
    {
        return $this->belongsTo(ShedStructure::class);
    }

    public function components()
    {
        return $this->hasMany(PartComponent::class);
    }

    public function sets()
    {
        return $this->hasMany(PartSet::class);
    }

    public function overrides()
    {
        return $this->hasMany(PartSetOverride::class);
    }
}
