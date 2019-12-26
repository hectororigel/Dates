<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{


     protected $table = 'dates';
    protected $fillable =
        [
            'name', 'lastName',
            'phoneNumber', 'email',
            'datetimepicker1', 'datetimepicker2',
            'reservation_date', 'reservation_end_date',
            'user_id', 'comment'

        ];

    public function owner(){
        return $this->belongsTo(User::class);
    }

}
