@extends('layouts.master')
@section('title')
Ubah Password
@endsection
@section('main')
<section class="content-header">
    <h1>
      Data Master
    <small>Ubah Password</small>
      </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Profile</a></li>
      <li class="active">Ubah Password</li>
    </ol>
</section>



<form method="post" action="{{route('profile.update ', Auth::user()->id)}}">
  {{csrf_field()}} {{ method field('PATCH')}}


  <section class="content">
      <div class="row">
        <!-- left column -->
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Profile</h3>
            </div>
           
            <form role="form">
              <div class="box-body">
                
                <div class="form-group col-md-8">
                  
                  <label for="name">Name</label>
                  <input {{$profile->name}} name="name" type="name" class="form-control" id="name" placeholder="Enter name">

                </div>

                <div class="form-group col-md-8">
                  
                  <label for="nim">NIM / NIK</label>
                  <input  name="nim" type="nim" class="form-control" id="nim" placeholder="Enter nim">
                  
                </div>

                <div class="form-group col-md-8">
                  
                  <label for="emil">Email address</label>
                  <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">

                </div>

                <div class="form-group col-md-8">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                </div>

                <div class="box-footer col-md-8">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="box-footer col-md-8">
                    &copy;2017 Nanda & Kevin                    
                  </div>
                
              </div>
            </form>
          </div>
  </form>

<form method="post" action="{{route('user.changePass', Auth::user()->id)}}">
  {{csrf_field()}} {{}}

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <form role="form">
              <div class="box-body">

              <div class="box-header with-border">
                <h3 class="box-title">Ubah Password</h3>
              </div>
                
                <div class="form-group col-md-8">
                    <label for="current_pass">Password Lama</label>
                    <input type="password" class="form-control" name="current_pass" id="current_pass" placeholder="Enter password">
                </div>

                <div class="form-group col-md-8">
                    <label for="new_pass">Password Baru</label>
                    <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="Enter password">
                </div>

                <div class="form-group col-md-8">
                    <label for="confirmed">Password Konfirmasi</label>
                    <input type="password" class="form-control" name="confirmed" id="confirmed" placeholder="Enter password">
                </div>

                <div class="form-group col-md-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                  <!-- /.box-body -->

                  <div class="box-footer col-md-8">
                    &copy;2017 Nanda & Kevin                    
                  </div>
              </div>
            </form>          
        </div>

     </div> 
  </div>
  </section>

</form>


@endsection

