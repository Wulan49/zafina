<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops'; // Ganti 'shops' jika nama tabelnya berbeda
   // app/Models/Shop.php

protected $fillable = [
    'image',
    'title',
    'keterangan',
    'harga',
];

}
