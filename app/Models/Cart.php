<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Cart extends Model
{
    use HasFactory;
    public $aItem = [];
    public $iTotalItems = 0;
    public $dTotalPrice = 0;

    public function __Construct(Cart $cCart = null) { 
        if($cCart != null) {
            $this->aItem = $cCart->aItem;
            $this->iTotalItems = $cCart->iTotalItems;
            $this->dTotalPrice = $cCart->dTotalPrice;
        }
    }

    public function add(Product $pProduct) {
        if(array_key_exists($pProduct->id, $this->aItem))
            $this->aItem[$pProduct->id]['quantity'] += 1;
        else
            $this->aItem[$pProduct->id] = array(
                'id' => $pProduct->id, 
                'name' => $pProduct->name,
                'imgurl' => $pProduct->imgurl, 
                'price' => $pProduct->price * (1 - ($pProduct->discountPercent / 100)), 
                'quantity' => 1);

        $this->iTotalItems += 1;
        $this->dTotalPrice += $this->aItem[$pProduct->id]['price'];
    }

    public function remove(Product $pProduct) { 
        if(array_key_exists($pProduct->id, $this->aItem) && $this->aItem[$pProduct->id]['quantity'] > 0) {
            $this->aItem[$pProduct->id]['quantity'] -= 1;
            $this->iTotalItems -= 1;
            $this->dTotalPrice -= $this->aItem[$pProduct->id]['price'];
        }
    }

    public function removeAll(Product $pProduct) { 
        if(array_key_exists($pProduct->id, $this->aItem)) {
            $this->iTotalItems -= $this->aItem[$pProduct->id]['quantity'];
            $this->dTotalPrice -= $this->aItem[$pProduct->id]['quantity'] * $this->aItem[$pProduct->id]['price'];
            unset($this->aItem[$pProduct->id]);
        }
    }
}
 