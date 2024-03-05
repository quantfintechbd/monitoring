<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Modules\BoAccount\Enums\NomineeTypeEnum;
use App\Modules\BoAccount\Models\BoAccountHolder;
use App\Modules\BoAccount\Models\BoAuthorizeInformation;
use App\Modules\BoAccount\Models\BoBankInformation;
use App\Modules\BoAccount\Models\BoNomineeInformation;
use App\Modules\Main\Enums\ActiveInactiveEnum;
use App\Modules\Main\Enums\DocumentTypeEnum;
use App\Modules\Main\Models\Document;
use App\Modules\Main\Models\Scopes\UserScope;
use App\Modules\Main\Utilities\ActivityLogTrait;
use App\Modules\Main\Utilities\ModelSignatureTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, ModelSignatureTrait, ActivityLogTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new UserScope());
    }

    public function isSuperadmin()
    {
        return $this->hasRole("Super Admin");
    }
  
    public function createdBy()
    {
        return $this->hasOne(User::class,'id','created_by'); 
    }

    public function updatedBy()
    {
        return $this->hasOne(User::class,'id','updated_by'); 
    }

    public function boAccount()
    {
        return $this->hasMany(BoAccountHolder::class, 'user_id', 'id');
    }

    public function boBankInfo()
    {
        return $this->hasOne(BoBankInformation::class, 'user_id', 'id');
    }

    public function boAuthorizeInfo()
    {
        return $this->hasOne(BoAuthorizeInformation::class, 'user_id', 'id');
    }

    public function boNomineeInfo()
    {
        return $this->hasMany(BoNomineeInformation::class, 'user_id', 'id')
            ->where("status", ActiveInactiveEnum::Active)
            ->orderByRaw('FIELD(type, ?, ?, ?, ?)', [
                NomineeTypeEnum::Nominee_1_Of_Acc_Holder,
                NomineeTypeEnum::Guardian_Of_Nominee_1,
                NomineeTypeEnum::Nominee_2_Of_Acc_Holder,
                NomineeTypeEnum::Guardian_Of_Nominee_2
            ])
            ->orderBy("parent_id", "asc");
    }

    public function boDocuments()
    {
        return $this->hasMany(Document::class, 'user_id', 'id')
            ->where("type", DocumentTypeEnum::BoAccount);
    }

}
