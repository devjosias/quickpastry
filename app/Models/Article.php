<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'prix', 'quantite', 'user_id'];

    // Un article appartient à un vendeur
    public function vendeur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Un article peut être vendu plusieurs fois
    public function ventes()
    {
        return $this->hasMany(Vente::class, 'article_id');
    }
}
