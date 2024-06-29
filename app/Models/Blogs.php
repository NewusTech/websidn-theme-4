<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi_singkat',
        'keyword',
        'id_kategori',
        'id_tags',
        'deskripsi',
        'status',
        'date',
        'deskripsi',
        'image',
        'nama_penulis',
    ];

    public function kategoris()
    {
        return $this->belongsTo(Blogkategoris::class,'id_kategori');
    }
    public function tags()
    {
        return $this->belongsTo(Blogtags::class,'id_tags');
    }
}
