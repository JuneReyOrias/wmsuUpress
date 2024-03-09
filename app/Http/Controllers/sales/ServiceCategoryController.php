<?php

namespace App\Http\Controllers\sales;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function ServicesCat(){
        $servicescat= ServiceCategory::all();
        
        return view('servicescat.add_services',compact('servicescat'));
    }

    
//insrtion data to database
public function addservices(Request $request){

    // $prefix = "1951822000"; 
    // $id=IdGenerator::generate(['table'=> 'service_parameter','field'=> 'id','length'=>6,'prefix'=>$prefix]);
 
    $data= $request->validated();
    $data= $request->all();
    $data= New ServiceCategory;
   
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
     return redirect()->back()->with('message','Services Category Added Successfully');
}

//services views
public function serviceshow($id){
    $servicescat= ServiceCategory::find($id);
     return view('servicescat.update_services', compact('servicescat'));

}

//update the serviceCategory content
public function updateservices(Request $request,$id){
    try {
        $data= ServiceCategory::find($id);

        // Assign other fields from the request to the Product data
        $data->category = $request->category;
        $data->description = $request->description;
        
    
        // Save the Product data to the database
        $data->save();
            // Redirect back after processing
            return redirect()->route('servicescat.add_services')->with('message', 'Servicess updated successfully');
        
    } catch (\Exception $e) {
        dd($e);
        // Handle any exceptions and redirect back with error message
        return redirect()->back()->with('error', 'Error updating product: ' . $e->getMessage());
    }
}

public function servicesdelete($id){
    try {
        // Find the product by ID
        $servicescat = ServiceCategory::find($id);
    
        // Check if the product exists
       
            // Delete the product data from the database
            $servicescat->delete();

            // Redirect back with success message
            return redirect()->back()->with('message', 'Services deleted successfully');
        
    } catch (\Exception $e) {
        // Handle any exceptions and redirect back with error message
        return redirect()->back()->with('error', 'Error deleting Services: ' . $e->getMessage());
    }
}

//fetch the primary key
public function serviceParam(){

    $category= ServiceCategory::all();

        return view('servicescat.new_servcat',compact('category'));
       
}
}
