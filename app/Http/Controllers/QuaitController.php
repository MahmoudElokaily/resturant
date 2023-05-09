<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceOrder;
use Illuminate\Http\Request;
use App\Traits\SaveImage;

class QuaitController extends Controller
{
    use SaveImage;
    public function index() {
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('index' , $data);
    }
    public function services() {
        $services = Service::all();
        $data = [
            'services' => $services,
        ];
        return view('services' , $data);
    }
    public function category($id) {
        $category = Category::findOrFail($id);
        $data = [
            'category' => $category,
        ];
        return view('type1' , $data);
    }

    public function dashboard() {
        $categories = Category::all();
        $orders = Order::where('bof' , '!=' , null)->get();
        $service = Service::all();
        $products = Product::all();
        $data = [
            'categories' => $categories,
            'orders'    => $orders,
            'services' => $service,
            'products' => $products
        ];
        return view('dashboard' , $data);
    }

    public function storeProduct(Request $request){
        $file_name1 = $this->saveImage($request->image1, 'Photos/products');
        $file_name2 = $this->saveImage($request->image2, 'Photos/products');
        $file_name3 = $this->saveImage($request->image3, 'Photos/products');
        $file_name4 = $this->saveImage($request->image4, 'Photos/products');
        $product = Product::create([
            'name'      => $request->name,
            'price'     => $request->price,
            'place'     => $request->place,
            'des'       => $request->des,
            'deyafa'    => $request->deyafa,
            'menWwoman' => $request->men,
            'category_id' => $request->category,
            'capacity'  => $request->capacity,
            'image1'    => $file_name1,
            'image2'    => $file_name2,
            'image3'    => $file_name3,
            'image4'    => $file_name4,
        ]);
        if ($product){
            return redirect()->back()->with('success', 'Product saved successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Failed to save the product.');
        }

    }

    public function storeService(Request $request){
        $file_name = $this->saveImage($request->image, 'Photos/services');
        $service = Service::create([
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $file_name
        ]);
        if ($service){
            return redirect()->back()->with('success', 'Product saved successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Failed to save the product.');
        }

    }
    public function storeCategory(Request $request){
        $category = Category::create([
            'name'  => $request->name,
        ]);
        if ($category){
            return redirect()->back()->with('success', 'Category saved successfully.');
        }
        else {
            return redirect()->back()->with('error', 'Failed to save the category.');
        }

    }

    public function bookingProduct($id){
        $product = Product::findorFail($id);
        $data = [
            'product' => $product,
        ];
        return view('booking-product' , $data);
    }

    public function bookingService($id){
        $service = Service::findorFail($id);
        $data = [
            'service' => $service,
        ];
        return view('booking-service' , $data);
    }

    public function storeOrder(Request $request){
        $order = Order::create([
            'name' => $request->name,
            'number'  => $request->number,
            'pay'  => $request->pay,
            'date'  => $request->date,
            'place'  => $request->place,
            'bof'  => $request->bof,
        ]);
        return to_route('home');
    }

    public function storeServiceOrder(Request $request){
        $service = ServiceOrder::create([
            'name' => $request->name,
            'price'  => $request->price,
        ]);
        return to_route('home');
    }

    public function deleteOrder($id){
        $item = Order::findOrFail($id);

        // Delete the item
        $item->delete();

        return redirect()->back();
    }

    public function deleteService($id){

        $item = Service::findOrFail($id);

        // Delete the item
        $item->delete();
        return redirect()->back();
    }

    public function deleteProduct($id){
        $item = Product::findOrFail($id);

        // Delete the item
        $item->delete();

        return redirect()->back();
    }

    public function editProduct($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $data = [
            'product'   => $product,
            'categories' => $categories
        ];
        return view('edit-product' , $data);
    }
    public function updateProduct(Request $request){
        $product = Product::findOrFail($request->id);
        $file_name1 = $this->saveImage($request->image1, 'Photos/services');
        $file_name2 = $this->saveImage($request->image2, 'Photos/products');
        $file_name3 = $this->saveImage($request->image3, 'Photos/products');
        $file_name4 = $this->saveImage($request->image4, 'Photos/products');

        $product->update([
            'name'      => $request->name,
            'price'     => $request->price,
            'place'     => $request->place,
            'des'       => $request->des,
            'deyafa'    => $request->deyafa,
            'menWwoman' => $request->men,
            'category_id' => $request->category,
            'capacity'  => $request->capacity,
            'image1'    => $file_name1,
            'image2'    => $file_name2,
            'image3'    => $file_name3,
            'image4'    => $file_name4,
        ]);
        return to_route('dashboard');
    }

    public function editService($id){
        $service = Service::findOrFail($id);
        $data = [
            'service'   => $service,
        ];
        return view('edit-service' , $data);
    }

    public function updateService(Request $request){
        $service = Service::findOrFail($request->id);
        $file_name = $this->saveImage($request->image, 'Photos/services');
        $service->update([
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $file_name
        ]);
        return to_route('dashboard');

    }

    public function details($id){
        $product = Product::findOrFail($id);
        $data = [
            'product'  => $product,
        ];
        return view('details' , $data);
    }
}
