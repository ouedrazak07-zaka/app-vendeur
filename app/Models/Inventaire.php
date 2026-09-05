<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Inventaire extends Model
{
    protected $table = 'inventaires';
    protected $fillable = ['date', 'nature', 'nbre', 'pu_detail', 'pu_gros', 'total'];
}
