<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	// define table name
	// protected $table = 'my_flights';
	
	protected $primaryKey = 'id';
    protected $fillable = [
        'item_code','item_brand','item_sku','item_name',
        'item_category','supplier_id','item_qty',
        'item_min_qty','status'
    ];

}
