<?php

namespace App\Modules\BoAccount\Models;

use App\Modules\Main\Enums\ActiveInactiveEnum;
use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{
    protected $table = 'bank_branches';
    protected $primaryKey = 'id';  
    protected $fillable = ['bank_id', 'branch_name', 'status']; // Add fillable fields

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id'); 
    }

    public static function dropdown($bankId)
    {
        if (empty($bankId)) {
            return [];
        }

        return self::whereHas('bank', function($query) {
                $query->where('status', ActiveInactiveEnum::Active);
            })
            ->where(function ($query) use ($bankId) {
                $query->where('status', ActiveInactiveEnum::Active);

                if (!empty($bankId)) {
                    $query->where('bank_id', $bankId);
                }
            })
            ->pluck("branch_name", "id");
    }

    public static function routingDropdown($branchId)
    {
        return self::where("id", $branchId)->pluck("routing_number", "routing_number");
    }

}