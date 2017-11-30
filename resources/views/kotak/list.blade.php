@extends('layouts.master')
@section('title')
Dashboard PNC
@endsection
@section('main')
<section class="content-header">
      <h1>
        Kritik dan Saran
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kritik dan Saran</li>
      </ol>
    </section>

    @if(Auth::user()->level == 'admin')
    <section class="content">
    
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Jenis</th>
                  <th>Status</th>
                </tr>
              	</table>
            </div>
           </div>
          </div>
         </div>
        </section>
        @endif

@endsection