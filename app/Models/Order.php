<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
  
    protected $fillable = [  'Order_Id', 'Order_Nama', 'Order_Kontak', 'Order_Alamat' ];
}
