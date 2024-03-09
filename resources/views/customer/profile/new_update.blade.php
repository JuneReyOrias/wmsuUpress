@extends('customer.customer_dashboard')


    <!-- Header -->
    <header class="">
        @include('customer.body.header')
       </header>
    <!-- ***** Preloader Start ***** -->
    
    <!-- ***** Preloader Start ***** -->
   
    <!-- Page Content -->
  
       
            


  
<section style="background-color: #eee;">
    <div class="container-profile py-5">
      <div class="row">
        <div class="col">
            @if (session()->has('message'))
            <div class="alert alert-success" id="success-alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        
        
                {{session()->get('message')}}
              </div>
              @endif
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0" style="margin-top: 2rem;">
                <h6 class="agent-profile" style="align-content: center;  -webkit-user-select: none; font-size: 20px;
         
                -moz-user-select: none;
              
                -ms-user-select: none;
              
                user-select: none;"
              >Profile</h6>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          
          </nav>
        </div>
      </div>
     
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="/customerimages/{{ $custProfile->image}}" alt="avatar"
                class="profiles img-fluid">
              <h5 class="my-3">{{ $custProfile->firstname.' '.$custProfile->lastname}}</h5>
              <p class="my-3">{{ $custProfile->email}}</p>
              <p class="my-3">{{ $custProfile->agri_district}}</p>
             
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
              </p>
              <p class="mb-1" style="font-size: .77rem;">Web Design</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              {{-- <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
              <div class="progress rounded mb-2" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <form action{{url('custProfile')}} method="post" enctype="multipart/form-data" >        
                @csrf
  
  
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0" name="firstname">FirstName</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control col-sm-9" name="firstname"  id="exampleInputUsername1" autocomplete="off"value="{{ $custProfile->firstname}}">
                </div>
              </div>
              <hr>
              
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0" name="lastname">LastName</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control col-sm-9" name="lastname"  id="exampleInputUsername1" autocomplete="off"value="{{ $custProfile->lastname}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <input type="email" class="form-control col-sm-9" name="email" id="exampleInputEmail1" value="{{ $custProfile->email}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Contact No.</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control col-sm-9"name="contact_no" id="contact_no" autocomplete="off" value="{{ $custProfile->contact_no}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Role</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" class="form-control col-sm-9"name="role" id="role" autocomplete="off" value="{{ $custProfile->role}}">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Password</p>
                </div>
                <div class="col-sm-9">
                  <input type="password" class="form-control col-sm-9" name="password" id="password" autocomplete="off" value="{{ $custProfile->password}}">                <input type="checkbox" class="form-check-input"id="togglePasswordVisibilityCheckbox">
                </div>
                
              </div>
              
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0" for="image">Image</lable>
                </div>
                <div class="col-sm-9">
                  <input type="file" class="custom-file-input" id="inputGroupFile01"
                  aria-describedby="inputGroupFileAddon01" name="image" >
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Image</p>
                </div>
                <div class="col-sm-9">
  
                  <img class="profiles" 
                 name="image" style="width: 150px; height; 140px; border" id="showImage"src="/customerimages/{{ $custProfile->image}}" alt="profile">
                </div>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary me-2">Save Changes</button>
     
            </form>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                  </p>
                  <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </section>
  </div>
  
        </div>
    </div>
    </div>

    <script>
        document.getElementById("togglePasswordVisibilityCheckbox").addEventListener("change", function () {
            var passwordInput = document.getElementById("password");
      
            if (this.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
      </script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      
      <script type="text/javascript">
        $(document).ready(function(){
          $('#inputGroupFile01').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
              $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
          });
        });
      </script>
    


