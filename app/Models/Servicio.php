<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','descripcion','image','category_id'];

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
