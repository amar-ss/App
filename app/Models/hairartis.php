<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hairartis extends Model
{
    public function hairartiss()
    {
        return $this->hasone(Hairartis::class, "id","hairartis_id");
    }
}
