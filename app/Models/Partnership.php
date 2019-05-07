<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Partnership extends Model
{
    
    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partnerships';

    protected $appends = ['type','business_type '];

    public function getTypeAttribute(){
        return 'Open Partnership';
    }

    public function setBusinessTypeAttribute($value)
    {
        $this->attributes['business_type'] = json_encode($value);
    }

    public function getBusinessTypeAttribute(){
        $type = 'partnership';

        return json_decode($type) ?: [];
//        return $type;
    }
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'name',
                  'summary',
                  'partnership',
                  'expected_profit',
                  'project_stage',
                  'company_type',
                  'image',
                  'user_id'
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
     * Get deleted_at in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getDeletedAtAttribute($value)
    {
        return \DateTime::createFromFormat('j/n/Y g:i A', $value);

    }

    public function getImageAttribute($value){
        if($value == 'https://via.placeholder.com/800x350.png?text=Partnership'){
            return $value;
        }else {
            return url('storage/'.$value);
        }
    }

}
