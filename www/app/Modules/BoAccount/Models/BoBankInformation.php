<?php

namespace App\Modules\BoAccount\Models;

use App\Modules\BoAccount\Models\Scopes\BoBankInformationScope;
use App\Modules\Main\Utilities\ActivityLogTrait;
use Illuminate\Database\Eloquent\Model;

class BoBankInformation extends Model
{
    use ActivityLogTrait;

    protected $fillable = ["*"];
    protected $table = 'bo_bank_information';
    protected $primaryKey = 'id';  

    protected static function booted(): void
    {
        static::addGlobalScope(new BoBankInformationScope());
    }

    public function bank()
    {
        return $this->hasOne(Bank::class, "id", "bank_id");
    }

    public function branch()
    {
        return $this->hasOne(BankBranch::class, "id", "branch_id");
    }
}
