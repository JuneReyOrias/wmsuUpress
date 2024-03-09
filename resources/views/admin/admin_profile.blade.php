@extends('admin.dashb')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</script>
<div class="page-content">

<div class="row">
<div class="col-13 grid-margin">
<div class="card">



</div>
<div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
      <div class="card rounded">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between mb-2">
            
          </div>
          <div>
            <img class="wd-70 rounded-circle" id="Showimage" style="height:100px; width:130px;" src="/adminimages/{{$profileData->image}}"alt="profile">
            {{-- <span class="h4 ms-3 ">{{$profileData->image}}</span> --}}
          </div>
     
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-lowercase">Name:</label>
            <p class="text-muted">{{$profileData->firstname.' '.$profileData->lastname}}</p>
          </div>
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-lowercase">Email:</label>
            <p class="text-muted">{{$profileData->email}}</p>
          </div>
          {{-- <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-uppercase">Agri_District:</label>
            <p class="text-muted">{{$profileData->agri_district}}</p>
          </div> --}}
          <div class="mt-3">
            <label class="tx-11 fw-bolder mb-0 text-lowercase">Role:</label>
            <p class="text-muted">{{$profileData->role}}</p>
          </div>
        <!--  <div class="mt-3 d-flex social-links">
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <i data-feather="github"></i>
            </a>
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <i data-feather="twitter"></i>
            </a>
            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
              <i data-feather="instagram"></i>
            </a>
          </div>-->
        </div>
      </div>
    </div>
    <!-- left wrapper end -->
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
              
                <div class="card-body">

                  <h6 class="card-title">Update admin Profile</h6>
  
                  <form action{{url('productupdate')}} method="post" enctype="multipart/form-data"  class="forms-sample">
                 
                  @csrf
                 
                    <div class="mb-3">
                      <label for="exampleInputUsername1" name="username" class="form-label">Username</label>
                      <input type="text" class="form-control" name="username"  id="exampleInputUsername1" autocomplete="off"value="{{$profileData->username}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputUsername1" name="firstname" class="form-label">Firstname</label>
                      <input type="text" class="form-control" name="firstname"  id="exampleInputUsername1" autocomplete="off"value="{{$profileData->firstname}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputUsername1" name="lastname" class="form-label">Lastname</label>
                      <input type="text" class="form-control" name="lastname"  id="exampleInputUsername1" autocomplete="off"value="{{$profileData->lastname}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" name="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{$profileData->email}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" name="contact_no" class="form-label">Contact no.</label>
                      <input type="text" class="form-control"name="contact_no" id="agri_district" autocomplete="off" value="{{$profileData->contact_no}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" name="role" class="form-label">Role</label>
                      <input type="text" class="form-control"name="role" id="role" autocomplete="off" value="{{$profileData->role}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" name="password"class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" value="{{$profileData->password}}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Photo</label>
                      <input type="file" class="form-control" name="image" id="image">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" name="password"class="form-label">    </label>
                    <img class="wd-70 rounded-circle" id="showImage"src="/adminimages/{{$profileData->image}}" alt="profile">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
   
                  </form>
                </div>
           

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- right wrapper end -->
  </div>

  <script type="text/javascript">
        $(document).ready(function(){
          $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
              $('#showImage').attr('src', e.target.result);
            }
           reader.readAsDataURL(e.target.files['0'])
         });
         });

        

  </script>

</body>
</html>








	@endsection