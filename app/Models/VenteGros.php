<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class VenteGros extends Model
{
    protected $table = 'ventes_gros';
    protected $fillable = ['date', 'nom', 'nature', 'nbre', 'prix', 'total'];
}
