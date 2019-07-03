<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Order
 * @package App\Models
 * @version July 3, 2019, 5:38 am UTC
 *
 * @property integer product_id
 * @property integer client_id
 * @property decimal value
 * @property integer quantity
 * @property string solicitante
 * @property string despachante
 */
class Order extends Model
{

    public $table = 'order';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'product_id',
        'client_id',
        'value',
        'quantity',
        'solicitante',
        'despachante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'client_id' => 'integer',
        'quantity' => 'integer',
        'solicitante' => 'string',
        'despachante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function products()
    {
        return $this->hasOne('App\Models\Product', 'id', "product_id");

    }

    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', "client_id");

    }

}
