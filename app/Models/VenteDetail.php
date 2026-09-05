<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class VenteDetail extends Model
{
    protected $table = 'ventes_detail';
    protected $fillable = ['nom_client', 'date', 'nature', 'nbre', 'pu', 'total'];
}
