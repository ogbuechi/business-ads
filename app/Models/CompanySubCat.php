<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySubCat extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company_sub_cats';

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
                  'company_cat_id',
                  'name'
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
     * Get the companyCat for this model.
     */
    public function companyCat()
    {
        return $this->belongsTo('App\Models\CompanyCat','company_cat_id');
    }



}
