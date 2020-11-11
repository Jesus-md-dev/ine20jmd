<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Product';
    static function Offerings() {
        $sNow = date('Y-m-d H:i:s');

        return Product::where(
            DB::raw('date_format(discountStart_at, "%Y-%m-%d")'),
            '<=', date('Y-m-d', strtotime($sNow)))->
            where(
            DB::raw('date_format(discountEnd_at, "%Y-%m-%d")'),
            '>', date('Y-m-d', strtotime($sNow))
            )->get();
    }

    static function NewProducts() {
        $sNow = date('Y-m-d H:i:s');
        $sLastWeek = date('Y-m-d H:i:s', strtotime($sNow . ' - 1 week'));

        return Product::where(
            DB::raw('date_format(updated_at, "%Y-%m-%d")'),
            '<=', date('Y-m-d', strtotime($sNow)))->
            where(
            DB::raw('date_format(updated_at, "%Y-%m-%d")'),
            '>=',
            date('Y-m-d', strtotime($sLastWeek))
        )->get();
    }

    function HasDiscount() {
        $sNow = date('Y-m-d H:i:s');
        if($this->discountStart_at <= $sNow && $this->discountEnd_at >= $sNow && $this->discountPercent != null)
            return true;
        else
            return false;
    }
}
