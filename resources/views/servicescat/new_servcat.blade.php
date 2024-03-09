@extends('admin.dashb')

@section('admin')

<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
 
    @if (session('message'))
    <div class="alert alert-success" role="alert">
      {{ session('message')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
       
    @endif
   
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        

         

              <div class="row mb-4">
                
                <div>
                  

                  <h4 class="mb-3 mb-md-0">Welcome Back! Create New Services</h4>
                </div>
                <div class="container">
                  <div class="title">New Services</div>
                  <div class="content">
                    <form action{{url('addproduct')}} method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="user-details">
                        <div class="input-box">
                          <span class="details">Services:</span>
                          <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" placeholder="Enter product name"value="{{ old('product_name') }}" >
                          @error('product_name')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="input-box">
                          <span class="details">Description:</span>
                          <input type="text"name="descritpion" class="form-control @error('descritpion') is-invalid @enderror" placeholder="Enter description" value="{{ old('descritpion') }}" >
                          @error('descritpion')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="input-box">
                          <span class="details">Unit Price:</span>
                          <input type="text"name="unit_price" class="form-control @error('unit_price') is-invalid @enderror" placeholder="Enter unit price"value="{{ old('unit_price') }}"  >
                          @error('unit_price')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="input-box">
                          <span class="details">Product Stock</span>
                          <input type="text"name="stocks" class="form-control @error('stocks') is-invalid @enderror" placeholder="Enter product stocks"id="stocks" autocomplete="current-password" value="{{ old('stocks') }}" >
                          @error('stocks')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>

                        <div class="input-box">
                          <span class="details">Status</span>
                          <select class="form-select  @error('status') is-invalid @enderror"" name="status"id="validationCustom01" aria-label="Floating label select e">
                            <option selected disabled >Select status</option>
                            <option value="Available" {{ old('status') == 'Available' ? 'selected' : '' }}>Available</option>
                            <option value="Not available" {{ old('status') == 'Not available' ? 'selected' : '' }}>Not available</option>
                          
                          </select>
                          @error('status')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="input-box">
                          <span class="details">Product Code</span>
                          <input type="text"name="prod_code" class="form-control @error('prod_code') is-invalid @enderror" placeholder="Enter product code"  value="{{ old('prod_code') }}">
                          @error('prod_code')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="input-box">
                          <span class="details">Product Image</span>
                          <div class="input-group">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"name="image" accept=".png, .jpeg, .jpg">
                              <label class="custom-file-label" for="inputGroupFile01" style="color: white;">Choose file</label>
                          </div>
                          @error('unit_price')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                      
                      </div>
                 
                      <div class="button d-flex justify-content-end"> <!-- Use d-flex and justify-content-end to align the button to the end -->
                        <input type="submit" class="register-button" value="Add">
                    </div>
                    
                      <a  href="{{route('servicescat.add_services')}}"button  class="btn btn-success ">Back</button></a></p>
                    </form>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  
   
  
  
  </div>
  
  @endsection