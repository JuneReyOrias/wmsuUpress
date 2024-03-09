<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UniqueCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class AdminController extends Controller
{


    public function accounts(){
        return view('admin.accounts.create_account');
    }
    public function adminDashb(){
        return view('admin.index');
    }//end method

        public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }//end 
    public function AdminLogin(){
         return view('admin.admin_login');
    }//end

    public function AdminProfile(){
        $id =Auth::user()->id;
        $profileData = User:: find($id);
        return view('admin.admin_profile', compact('profileData'));
    }
  
    public function updateAdmin(Request $request){
       
        try {
             $id =Auth::user()->id;
        $data= User:: find($id);
        if ($data) {
            // Check if a file is present in the request and if it's valid
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                // Retrieve the image file from the request
                $image = $request->file('image');

                // Generate a unique image name using current timestamp and file extension
                $imagename = time() . '.' . $image->getClientOriginalExtension();

                // Move the uploaded image to the 'productimages' directory with the generated name
                $image->move('adminimages', $imagename);

                // Delete the previous image file, if exists
                if ($data->image) {
                    Storage::delete('adminimages/' . $data->image);
                }

                // Set the image name in the Product data
                $data->image = $imagename;
            }

       
        $data->username= $request->username;
        $data->firstname= $request->firstname;
        $data->lastname= $request->lastname;
        $data->email= $request->email;
        $data->contact_no= $request->contact_no;
        $data->role= $request->role;
         
         
       $data->save();
         // Redirect back after processing
         return redirect()->route('products.add_product')->with('message', 'Product updated successfully');
        } else {
            // Redirect back with error message if product not found
            return redirect()->back()->with('error', 'Product not found');
        }
    } catch (\Exception $e) {
        dd($e);
        // Handle any exceptions and redirect back with error message
        return redirect()->back()->with('error', 'Error updating product: ' . $e->getMessage());
    }
}

public function UniqueCode(){
    $uniques=UniqueCode::all();
    return view('code.add_codename',compact('uniques'));
}

public function addcodes(Request $request){
  
    $data= New UniqueCode;

    $data->unique_name=$request->unique_name;
    $data->save();

    return redirect()->back()->with('message','Product Added Successfully');
}

public function fetchcode(){
    $coder= UniqueCode::all();
    return view('products.index',compact('coder'));
}

public function addproduct(ProductRequest $request){
    // Create a new Product instance
    // $prefix = "161815400"; 
    // $id=IdGenerator::generate(['table'=> 'service_parameter','field'=> 'id','length'=>7,'prefix'=>$prefix]);
    $data= $request->validated();
    $data= $request->all();
    $data = new Product;
   
    // Check if a file is present in the request and if it's valid
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        // Retrieve the image file from the request
        $image = $request->file('image');

        // Generate a unique image name using current timestamp and file extension
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the 'productimages' directory with the generated name
        $image->move('productimages', $imagename);

        // Set the image name in the Product data
        $data->image = $imagename;
    } else {
        // Handle case where no valid image was uploaded
        // You can return an error message or perform any other action
        return redirect()->back()->with('error', 'No valid image uploaded.');
    }

    // Assign other fields from the request to the Product data
    $data->prod_code = $request->prod_code;
    $data->product_name = $request->product_name;
    $data->descritpion = $request->descritpion;
    $data->unit_price = $request->unit_price;
    $data->stocks = $request->stocks;
    $data->status = $request->status;
    // dd($data);
    // Save the Product data to the database
    $data->save();

    // Debugging: Dump and die to inspect $data
   

    // Redirect back after processing
    return redirect()->route('products.add_product')->with('message','Product Added Successfully');
}


// fetching the product deteils to databse to customer product


}
