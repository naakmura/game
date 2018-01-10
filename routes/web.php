<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/detail/",function(){
    return view("detail");
});

//Route::get("/cart",function(){
//    return view("cart");
//});
Route::get("/session_test",function(){
    $count = request()->session()->get("COUNTER",0);
    $count = $count + 1;
    request()->session()->put("COUNTER",$count);
    return "{$count}回目のアクセスです";
});

// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }


});
// [POST] /cart/{item_id} カートの消去
Route::post("/cart_delete",function(){
    $cartItems = request()->session()->forget("CART");
    return redirect("/cart");
});


// [POST] /cart/delete/{index} カートの個別削除
Route::post("/cart/delete/{index}",function($index){
    $items = DB::select("SELECT * FROM items where id = ?",[$index]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }
    unset($cartItems[$index]);
});

// [GET] /cart カートの表示
Route::get("/cart",function(){
    $cartItems = request()->session()->get("CART",[]);
    return view("cart",[
        "items" => $cartItems
    ]);
});

Route::get("/",function(){
    $items = DB::select("SELECT * FROM items");
    return view("toppage",[
        "items" => $items
    ]);
});

Route::get("/detail/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        return view("detail",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }

});
//購入画面
Route::get("buy",function(){
    return view("buy");
});

//購入処理
Route::post("buy",function(){
    $validator = Validator::make(request()->all(), [
        'name' => ['required','max:10'],
        'email' => ['required','email'],
    ])->validate();
    // ここで購入情報を記録する。
    return redirect("thanks");
});

//購入後画面
Route::get("thanks",function(){
    return view("thanks");
});


Route::get("roguin/",function(){
    return view("roguin");
});