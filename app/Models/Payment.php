<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payments';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $with = ['user'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */

    protected $fillable = [
                  'user_id',
                  'month',
                  'valid_till',
                  'amount',
                  'rrr'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['valid_till'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }



}
