<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'messages';

//    protected $with = ['receiver'];

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'sender_id',
                  'receiver_id',
                  'text'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the sender for this model.
     */
    public function sender()
    {
        return $this->belongsTo('App\User','sender_id');
    }

    /**
     * Get the receiver for this model.
     */
    public function receiver()
    {
        return $this->belongsTo('App\User','receiver_id');
    }



}
