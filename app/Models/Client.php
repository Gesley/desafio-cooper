<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Client
 * @package App\Models
 * @version July 3, 2019, 6:02 am UTC
 *
 * @property string name
 * @property string adress
 * @property string cep
 * @property string uf
 * @property string municipio
 * @property string bairro
 * @property string rua
 * @property string status
 */
class Client extends Model
{

    public $table = 'client';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'adress',
        'cep',
        'uf',
        'municipio',
        'bairro',
        'rua',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'adress' => 'string',
        'cep' => 'string',
        'uf' => 'string',
        'municipio' => 'string',
        'bairro' => 'string',
        'rua' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
