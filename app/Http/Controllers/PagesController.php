<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Item;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}

	public function view(){
		$data = DB::table('items')->get();
		// $data = DB::table('customers')->insert();
		// $data = DB::table('customers')->update(['id'=>123,'name'=>'andi']);
		// $data = DB::table('customers')->delete();
		// $data = DB::table('customers')->get();
		return $data;
	}

	public function add(){
		return view('pages.add');
	}

	public function insert(Request $request){
		$data = $request->all();

        Item::create([
            'item_code' => $data['itemCode'],
            'item_brand' => $data['itemBrand'],
            'item_sku' => $data['itemSku'],
            'item_name' => $data['itemName'],
            'item_category' => $data['itemCategory'],
            'supplier_id' => $data['supplierId'],
            // 'supplier_id' => NULL,
            'item_qty' => $data['itemQty'],
            'item_min_qty' => $data['itemMinQty'],
            'status' => '1'
        ]);

        $insertedItem = Item::all()->last();

        return view('pages.index');
	}
	
	// public function(Request $request){
	// 	$data = $request->all();
	// }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
