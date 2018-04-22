<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['name','description','quantity','price','imagem'];
    protected $guarded = ['id','create_at','update_at'];
    protected $table = 'produtos';
}
