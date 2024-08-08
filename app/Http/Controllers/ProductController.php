<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Arders;
use App\Models\Ord;
use App\Models\Wishlist;
use App\Models\Website;


use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;




class ProductController extends Controller
{
  public function index(){
    $data= product::all();
    return view('product',['products'=>$data]);
  }
  
  public function detail($id){
    $product=product::find($id);

  
    return view('detail', ['items' => $product]);
}

public function search(Request $req)
  {
   $data=product::where('name','like','%'.$req->input('query').'%')->get();

    return view('search', ['products' => $data]);
}

public function addtocart(Request $req)
{
    if ($req->session()->has('user')) {
        $cart = new Cart;
        $cart->Users_id = $req->session()->get('user')['id'];
        $cart->Products_id = $req->product_id;
        $cart->save();
        
        $userId = $req->session()->get('user')['id'];
        
        Wishlist::where('Users_id', $userId)
                ->where('Products_id', $req->product_id)
                ->delete();
        
        return redirect('product');
    } else {
        return redirect('login');
    }
}


static public function cartitem()
{
  $user = Session::get('user');

  if (!$user || !isset($user['id'])) {
      return 0; // Return 0 or handle the case where the user is not logged in
  }

  $userid = $user['id'];

  return Cart::where('Users_id', $userid)->count();
}

static public function wishlistitem()
{
  $user = Session::get('user');

  if (!$user || !isset($user['id'])) {
      return 0; // Return 0 or handle the case where the user is not logged in
  }

  $userid = $user['id'];

  return Wishlist::where('Users_id', $userid)->count();
}



// static public function cartitem()
// {
//   $userid=Session::get('user')['id'];
//   return Cart::where('Users_id',$userid)->count();
// }

public function cartlist()
{
      $userid=Session::get('user')['id'];
      $products= DB::table('carts')
            ->join('products', 'carts.Products_id', '=', 'products.id')
            ->select('products.*', 'carts.id as cartid')
            ->where('carts.Users_id', $userid)
            ->get();
       return view('cartlist',['products'=>$products]);

}
public function remove($id){
  Cart::destroy($id);
  return redirect('cartlist');
 }


public function addtowishlist(Request $req){
  if($req->session()->has('user')){
    $cart=new Wishlist;
    $cart->Users_id=$req->session()->get('user')['id'];
    $cart->Products_id=$req->product_id;
    $cart->save();
    return redirect('product');
  
  }else{
    return redirect('login');
  }
  }

public function wishlist()
{
      $userid=Session::get('user')['id'];
      $products= DB::table('wishlists')
            ->join('products', 'wishlists.Products_id', '=', 'products.id')
            ->select('products.*', 'wishlists.id as wishlistid')
            ->where('wishlists.Users_id', $userid)
            ->get();
       return view('wishlist',['products'=>$products]);

}
public function removed($id){
  Wishlist::destroy($id);
  return redirect('wishlist');
 }


public function ordernow(){
  $userid=Session::get('user')['id'];
  $products= DB::table('carts')
        ->join('products', 'carts.Products_id', '=', 'products.id')
        ->where('carts.Users_id', $userid)
        ->sum('products.price');
   return view('ordernow',['products'=>$products]);
}

public function orderplace(Request $req){
  $userid=Session::get('user')['id'];
  $allcart= Cart::where('Users_id',$userid)->get();
  foreach($allcart as $cart){
    $order=new Order;
    $order->product_id=$cart['Products_id'];  
    $order->user_id=$cart['Users_id'];
    $order->status="pending..";
    $order->payment_method=$req->payment;
    $order->payment_status="pending..";
    $order->address=$req->address;
    $order->save();
    Cart::where('Users_id',$userid)->delete();
  }
   $req->input();
   return redirect('product');

}

public function orders(){
  $userid=Session::get('user')['id'];
  $products= DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userid)
        ->get();
   return view('myorder',['products'=>$products]);
}

public function buy($id){
  $product=product::find($id);


  return view('buy', ['items' => $product]);
}

public function shop(){
  $data= product::all();
  return view('shop',['products'=>$data]);
}
// ------------------------------------------

public function home(){
  $data= product::all();
  return view('admin-pproduct',['products'=>$data]);
}
 

public function delete(){
  $data= product::all();
  return view('delete',['products'=>$data]);
} 

public function delproduct($id){
  $data=product::find($id);
  $data->delete();
  return redirect('pro');
}

public function admindetail($id){
  $product=product::find($id);


  return view('admin-detail', ['items' => $product]);
}

static public function count(){
  return product::all()->count();
}

public function pro(){
  $data= product::all();
  return view('admin-add',['products'=>$data]);
}
public function categ(){
  $data= product::all();
  return view('category',['products'=>$data]);
}

static public function ordercount(){
  return Order::all()->count();
}
// public function adminorders(){
//   $userid=Session::get('user')['id'];
//   $products= DB::table('orders')
//         ->join('products', 'orders.product_id', '=', 'products.id')
//         ->where('orders.user_id', $userid)
//         ->get();
//    return view('admin-order',['products'=>$products]);
// }
public function aorderplace(Request $request)
{
    $userid = Session::get('user')['id'];
    $user = Session::get('user')['name'];

    $cartItems = DB::table('carts')
        ->join('products', 'carts.Products_id', '=', 'products.id')
        ->where('carts.Users_id', $userid)
        ->get();

    foreach ($cartItems as $item) {
        $order = new Ord;
        $order->product_id = $item->Products_id;
        $order->user_id = $userid;
        $order->price = $item->price;
        $order->pname = $item->name; // Assuming 'name' is a column in 'products' table
        $order->cname = $user; // Assuming 'category' is a column in 'products' table
        $order->payment_method = $request->payment;
        $order->payment_status = 'pending';
        $order->address = $request->address;
        $order->save();
    }

    // Clear the cart after order placement
    DB::table('carts')->where('Users_id', $userid)->delete();

    return redirect('product')->with('success', 'Order placed successfully!');
}


public function adminorders(){
  $userSession = Session::get('user');
  
  if ($userSession) {
      $userid = $userSession['id'] ?? null;
      $username = $userSession['name'] ?? 'Guest'; 
  } else {
      $userid = null;
      $username = 'Guest';
  }

  $products = Ord::all();

  return view('admin-order', [
      'products' => $products,
      'username' => $username 
  ]);
}

static public function orderscount(){
  return Ord::all()->count();
}

public function cancel($id)
{
    $order = Ord::find($id);

    if ($order) {
        $order->delete();
        return redirect('adminorder');
    }

    return redirect('adminorder');
}


public function del($id)
{
    $order = product::find($id);

    if ($order) {
        $order->delete();
        return redirect('admin-pproduct');
    }

    return redirect('admin-pproduct');
}
public function prosearch(Request $req)
  {
   $data=product::where('name','like','%'.$req->input('query').'%')->get();

    return view('product-search', ['products' => $data]);

}
public function ordsearch(Request $req)
  {
   $data=Ord::where('cname','like','%'.$req->input('query').'%')->get();

    return view('ordsearch', ['products' => $data]);

}
public function custsearch(Request $req)
  {
   $data=Website::where('cname','like','%'.$req->input('query').'%')->get();

    return view('custsearch', ['products' => $data]);

}

public function adminaddpro(Request $req) {
  $data = new product;
  $data->name = $req->name;
  $data->price = $req->price;
  $data->category = $req->category;
  $data->description = $req->description; // Ensure you are saving the description as well

  if ($req->hasFile('gallery')) { // Check the correct input name for file
      $file = $req->file('gallery');

      // Get the original file name
      $fileName = time() . '_' . $file->getClientOriginalName(); // Adding timestamp to ensure unique filename

      // Define a path to store the uploaded file
      $path = 'uploads';

      // Move the file to the defined path
      $file->move(public_path($path), $fileName);

      // Save file info to database
      $data->gallery = $fileName;
  } else {
      return redirect()->back()->with('error', 'No file uploaded');
  }
  // $data->gallery=$req->file('file')->getClientOriginalName();
  // $req->file('file')->move('uploads',$data->gallery);

  $data->save(); // Save the data before redirecting

  return redirect('adminaddpro');
}


public function furniture(){
  $data=product::where('category','like','%'.'furniture'.'%')->get();
  return view('furniture',['items'=>$data]);
}

public function cloth(){
  $data=product::where('category','like','%'.'cloth'.'%')->get();
  return view('cloth',['items'=>$data]);
}

public function kitchen(){
  $data=product::where('category','like','%'.'kitchen'.'%')->get();
  return view('kitchen',['items'=>$data]);
}


public function fashion(){
  $data=product::where('category','like','%'.'fashion'.'%')->get();
  return view('fashion',['items'=>$data]);
}

public function electronics(){
  $data=product::where('category','like','%'.'electronics'.'%')->get();
  return view('electronics',['items'=>$data]);
}

public function addproducts(Request $req) {
  $data = new product;
  $data->name = $req->name;
  $data->price = $req->price;
  $data->category = $req->category;
  $data->subcategory = $req->subcategory;
  $data->description = $req->description; // Ensure you are saving the description as well

  if ($req->hasFile('gallery')) {
      $file = $req->file('gallery');

      $fileName = time() . '_' . $file->getClientOriginalName(); // Adding timestamp to ensure unique filename

      $path = 'uploads';

      $file->move(public_path($path), $fileName);

      $data->gallery = $fileName;
  } else {
      return redirect()->back()->with('error', 'No file uploaded');
  }


  $data->save(); // Save the data before redirecting

  return redirect()->back()->with('success', 'Product added successfully');
}

public function bed(){
  $data=product::where('subcategory','like','%'.'bed'.'%')->get();
  return view('bed',['items'=>$data]);
}
public function chair(){
  $data=product::where('subcategory','like','%'.'chair'.'%')->get();
  return view('chair',['items'=>$data]);
}
public function sofa(){
  $data=product::where('subcategory','like','%'.'sofa'.'%')->get();
  return view('sofa',['items'=>$data]);
}

public function men(){
  $data=product::where('subcategory','like','%'.'men'.'%')->get();
  return view('men',['items'=>$data]);
}
public function woman(){
  $data=product::where('subcategory','like','%'.'woman'.'%')->get();
  return view('woman',['items'=>$data]);
}
public function winter(){
  $data=product::where('subcategory','like','%'.'winter'.'%')->get();
  return view('winter',['items'=>$data]);
}
public function summer(){
  $data=product::where('subcategory','like','%'.'summer'.'%')->get();
  return view('summer',['items'=>$data]);
}

public function glasses(){
  $data=product::where('subcategory','like','%'.'glasses'.'%')->get();
  return view('glasses',['items'=>$data]);
}public function jewllery(){
  $data=product::where('subcategory','like','%'.'jewellery'.'%')->get();
  return view('jewllery',['items'=>$data]);
}public function ring(){
  $data=product::where('subcategory','like','%'.'ring'.'%')->get();
  return view('ring',['items'=>$data]);
}

public function led(){
  $data=product::where('subcategory','like','%'.'led'.'%')->get();
  return view('led',['items'=>$data]);
}
public function mobile(){
  $data=product::where('subcategory','like','%'.'mobile'.'%')->get();
  return view('mobile',['items'=>$data]);
}
public function machine(){
  $data=product::where('subcategory','like','%'.'machine'.'%')->get();
  return view('machine',['items'=>$data]);
}
public function laptop(){
  $data=product::where('subcategory','like','%'.'laptop'.'%')->get();
  return view('laptop',['items'=>$data]);
}
public function fan(){
  $data=product::where('subcategory','like','%'.'fan'.'%')->get();
  return view('fan',['items'=>$data]);
}
}

