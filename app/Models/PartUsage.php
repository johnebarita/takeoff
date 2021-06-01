<?php

namespace App\Models;

use App\Models\PartComponent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartUsage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function components()
    {
        return $this->hasMany(PartComponent::class);
    }
}
