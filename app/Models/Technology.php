<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technology extends Model
{
    public $timestamps = false;
    protected $fillable = ['tech', 'description', 'image', 'project_id'];
    public function project(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_technologies', 'technology_id', 'project_id');
    }
}
