<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
    protected $table = 'checklist';
    protected $fillable = array('passport', 'financing', 'insurance', 'pass', 'visaform', 'picture', 'travelreservation', 'hotelreservation', 'employment', 'travelinsurance', 'financial_means', 'passcopy', 'consularfee', 'user_id', 'students_id');

    /**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param  array  $attributes
     * @param  array  $values
     * @return static
     */

}
