<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invest extends Model
{

    use SoftDeletes;

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'brand_name'
            ]
        ];
    }
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invests';

    protected $appends = ['image','type','summary'];

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
                  'brand_name',
                  'business_type',
                  'profile_summary',
                  'maximum_capital',
        'slug'
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
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    /**
     * Set the business_type.
     *
     * @param  string  $value
     * @return void
     */
    public function setBusinessTypeAttribute($value)
    {
        $this->attributes['business_type'] = json_encode($value);
    }

    /**
     * Get business_type in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getBusinessTypeAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function getTypeAttribute(){
        return 'Investors';
    }
    public function getSummaryAttribute(){
        return $this->profile_summary;
    }


    public function getImageAttribute($value){
        if(!$value){
            return 'https://via.placeholder.com/800x350.png?text=B2B Invest';
        }else {
            return url('storage/'.$value);
        }
    }
}
