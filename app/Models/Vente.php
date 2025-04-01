<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = ['heuredevente', 'numerodevente', 'article_id', 'vendeur_id'];

    // Une vente est associée à un article
    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }

    // Une vente est réalisée par un vendeur
    public function vendeur()
    {
        return $this->belongsTo(User::class, 'vendeur_id');
    }
}
