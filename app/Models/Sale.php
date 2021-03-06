<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{

    use SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sales';

    protected $appends = ['type','short_desc','amount','link'];

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
                  'name',
                  'summary',
                  'business_type',
                  'shareholders',
                  'employees',
                  'value',
                  'listed',
                  'selling_conditions',
                  'selling_reasons',
                  'sales_authorization',
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

    public function getLinkAttribute(){
        $link = route('sales.sale.show',$this->id);
        return $link;
    }
    protected $casts = [];

    public function getShortDescAttribute(){
        return substr($this->summary,0,random_int(60,150))."...";
    }

    public function getAmountAttribute(){
        return 'Value: ₦'.$this->value;
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function getTypeAttribute(){
        return 'Sales';
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

    public function getImageAttribute($value){
        if(!$value){
            return 'https://via.placeholder.com/800x350.png?text=B2B Sale';
        }else {
            return url('storage/'.$value);
        }
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
