<?php

namespace App;



class Produtos extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'produto', 'em_estoque',
    ];

   protected $table = 'produtos';
}
