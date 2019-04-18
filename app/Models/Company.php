<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

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
                  'user_id',
                  'name',
                  'description',
                  'country',
                  'state',
                  'city',
                  'address',
                  'rep_phone',
                  'rep_name',
                  'website',
                  'categories',
                  'employees',
                  'years',
                  'is_active'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
               'deleted_at'
           ];
    
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

    /**
     * Set the categories.
     *
     * @param  string  $value
     * @return void
     */
    public function setCategoriesAttribute($value)
    {
        $this->attributes['categories'] = json_encode($value);
    }

    /**
     * Get categories in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getCategoriesAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    /**
     * Get deleted_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDeletedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

}
