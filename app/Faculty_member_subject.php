<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty_member_subject extends Model
{
    const CREATED_AT = 'fmsCreatedAt';
    const UPDATED_AT = 'fmsUpdatedAt';
    protected $primaryKey = "fmsId";
}
