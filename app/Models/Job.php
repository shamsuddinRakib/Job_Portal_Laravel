<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Job extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags():BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(
            ['name' => $name]
        );
        $this->tags()->attach($tag);
    }

}
