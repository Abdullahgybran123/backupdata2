<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use \Cartts as Cartts;

class CarttsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cartts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cartts::search(function ($carttsItem, $rowId) use ($request) {
            return $carttsItem->id === $request->id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cartts')->withSuccessMessage('Item is already in your cartts!');
        }

        Cartts::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        return redirect('cartts')->withSuccessMessage('Item was added to your cartts!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5',
        ]);

        if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
        }

        Cartts::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cartts::remove($id);
        return redirect('cartts')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCartts()
    {
        Cartts::destroy();
        return redirect('cartts')->withSuccessMessage('Your cartts has been cleared!');
    }

    /**
     * Switch item from shopping cartts to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cartts::get($id);

        Cartts::remove($id);

        $duplicates = Cartts::instance('wishlist')->search(function ($carttsItem, $rowId) use ($id) {
            return $carttsItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cartts')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cartts::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

        return redirect('cartts')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
