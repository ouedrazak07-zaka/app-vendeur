<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class DebitCredit extends Model
{
    protected $table = 'debit_credit';
    protected $fillable = ['date', 'nom', 'nature', 'debit', 'credit'];
}
