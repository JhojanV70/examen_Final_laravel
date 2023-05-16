<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datails extends Model
{
    use HasFactory;
    protected $table = 'datails';
    protected $primarykey = 'id';
    public $tamestamps = false;
}
