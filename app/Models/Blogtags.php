<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogtags extends Model
{
    use HasFactory;

    protected $fillable = [
        'tags',
        'slug',
    ];
    public function blog()
    {
        return $this->hasMany(Blogs::class, 'id_tag');
    }
}
