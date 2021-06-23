@extends('Layout.A_master')

@section('dashboard')


 
    

<div class="main-panel">
    <div class="content-wrapper">
{{-- tempat berada --}}
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Dashboard Fathan Motor</h4>
                </div>
              </div>
            </div>
          </div>
{{-- isi --}}
      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Data Artikel</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$hitung_artikel}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
              </div>  
            </div>
          </div>
        </div>  

        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Data Tim</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$hitung_tim}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                {{-- <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button> --}}
              </div>  
            </div>
          </div>
        </div>  
        
        {{-- <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Jumlah Data Galeri</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$hitung_galeri}}</h3>
                <i class="ti-layers icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                {{-- <button type="button" class="btn btn-outline-success btn-fw" href="" data-toggle="modal" data-target="#edit">Edit</button> --}}
              {{-- </div>  
            </div>
          </div>
        </div>   --}} 

        
    </div>
    {{-- pemisah --}}
        
    
    
     
@endsection