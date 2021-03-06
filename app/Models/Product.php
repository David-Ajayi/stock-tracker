<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function inStock()
    {
        return $this->stock()->where('in_stock', true)->exists();
        //return all the stick associated with this product id where the in_stock attribute is true
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);

    }

    public function track()
    {
//        $this->stock->each->track();
        $this->stock->each->track();
//        $this->stock->each->track();
        //this product has stock at different retailer, we need to track them
        //for each product it is stock in many locations.
        //a prduct can track all of its stock. ie where it exists and also a single piece of stock
        // can be tracked
        //grab stock associated with each product

        //almost like a listener listen for ehrn stock is tracked then record the history
        //for each stock tack it and return the updated state of that stock stock for record history to save


    }

//

    public function history()
    {
        return $this->hasMany(History::class);
    }
}
