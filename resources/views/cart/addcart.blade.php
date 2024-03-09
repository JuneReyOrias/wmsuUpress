@extends('customer.customer_dashboard')

@section('customer')
<div class="page-content">

    <nav class="page-breadcrumb">
  
    </nav>
    
    {{-- <div class="progress mb-3">
      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15% Complete</div>
  
    </div> --}}
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          @if($errors->any())
          <ul class="alert alert-warning">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
          @endif
          <div class="card-body">
            @if (session()->has('message'))
            <div class="alert alert-success" id="success-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
        
        
                {{session()->get('message')}}
              </div>
              @endif
              <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('products.index')}}" button  type="submit" class="btn btn-success me-md-2">Add</button></a></p>
              </div>
        
        </br>
          <div>
          <h6 class="card-title"><span>I.</span>Cart</h6>
        </br>
    {{-- <p class="text-muted mb-3">Read the <a href="https://github.com/RobinHerbots/Inputmask" target="_blank"> Official Inputmask Documentation </a>for a full list of instructions and other options.</p> --}}
    
    <div class="table-responsive tab ">
     <table class="table table table-info">
         <thead class="thead-light">
             <tr >
                 <td style="padding:20px">Product Id</td>
                 <td style="padding:20px">Product Name</td>
                 <td style="padding:20px">Description</td>
                 <td style="padding:20px">Unit Price</td>
                 <td style="padding:20px">Stocks</td>
                 <td style="padding:20px">Image</td>
                 <td style="padding:20px">Status</td>
                 <td style="padding:20px">Action</td>
             </tr>
         </thead>
         <tbody>
  
         
          {{-- @foreach ($product as $product)
          <tr class="table-light">
            <td>{{ $product->unique_code_id.'-'.$product->id}}</td>
           <td>{{ $product->product_name }}</td>
           <td>{{ $product->descritpion }}</td>
           <td>{{ $product->unit_price}}</td>
           <td>{{ $product->stocks}}</td>
           <td>
            <img style="height:100px; width:100px;" src="/productimages/{{$product->image}}">
           </td>
           <td>{{ $product->status}}</td>
        
          
                 
  
                 <td>
                    
                   <a href="{{route('products.update_product',$product->id)}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> 
         
                      <form  action="{{route('product.destroy',$product->id)}}"method="post" accept-charset="UTF-8" style="display:inline">
                        @csrf
                        @method('DELETE')
                         <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                  
                    
                         </form>
                     </div>
                 </td>
             </tr>
         @endforeach --}}
        
  
         </tbody>
     </table>
  </div>
  
  
   </div>
  </div>
  </div>
  </div>
   
    <!--end for Production Cost-->
    {{-- <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
              <h6 class="card-title">Import File</h6>
              <p class="text-muted mb-3">Import excel file, csv file or Msacces file only.</p>
              <div class="form-errors"></div>
              <form id="upload-form" method="post" enctype="multipart/form-data" onsubmit="saveForm(event)">
                @csrf
         
                  <div class="form-group mb-3">
                    <label for=inputemail>Upload</label>
                    <input type="file" class ="form-control" id="myDropify" name="upload_file" aria-describedby="emailHelp">
                    <span class="text-danger input_image_err formErrors"></span>
                </div>
              <div class="form-group mb-2 text-center">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
              </div>
               
              </form>
              <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
              integrity="sha384-oBqDVmz9ATKxIep9tiCx5/Z9fNEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
              </script>
              <script sr="https://cdn. jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
              integrity="sha384-7VPbUDkoPSGFnVtY10QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
              </script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
               <script>
                function saveForm(e){
                  e.preventDefault();
                  console.log($('#upload-form'));
                  var uploadForm= $('upload-for,')(0);
                  Var uploadFormData= new FormData(uploadForm);
  
                  $.ajax({
                    method="Post",
                    url:"{{url('saveUploadForm')}}",
                    data:uploadFormData,
                    processData:false,
                    contentType:false,
                    success:function(response){
                      console.log(response);
                      $(#form-errors).html('');
                    },
                    error:function(response){
  
                    }
                  })
                }
               </script> --}}
             
         
          </div>
        </div>
      </div>
    
    </div>
  
  </div>
        </div>
      </div>
    </div>
    <script>$(document).ready (function(){
      $("#success-alert").hide();
      $("#myWish").click(function showAlert() {
         $("#success-alert").alert();
         window.setTimeout(function () { 
            $("#success-alert").alert('close'); 
         }, 2000);             
      });      
   });</script>
@endsection
