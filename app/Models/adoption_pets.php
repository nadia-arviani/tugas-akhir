<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adoption_pets extends Model
{
    use HasFactory;

    protected $fillable = [
        'shelter_id',
        'pet_name',
        'species',
        'breed',
        'age',
        'health_status',
        'status',
        'image',
    ];

    public function shelter()
    {
        return $this->belongsTo(User::class, 'shelter_id');
    }

    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }
    public function medicalHistory()
{
    return $this->hasMany(PetMedicalHistory::class, 'pet_id');
}

}
