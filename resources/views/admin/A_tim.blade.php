@extends('Layout.A_master')

@section('artikel')

     <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Tim</h4>
                </div>
                <div>
                    <a type="button" href="/admin_tim/tambah_tim" class="btn btn-primary btn-icon-text ">
                      <i class="ti-plus btn-icon-prepend"></i>Tambah Data
                    </a>
                </div>
              </div>

              @if (session('status'))
                  <div class="alert alert-danger text-center">
                      {{ session('status')}}
                  </div>
              @endif
              
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                      id  
                  </th> 
                  <th>
                      Nama
                  </th>
                  <th>
                    Foto
                </th>
                <th>
                    Jabatan
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($tim as $team)
                <tr>
                  <td>
                    {{$team->id}}
                  </td>
                  <td>
                    {{$team->nama}}
                  </td>
                  <td>
                    <img src="img/poto/tim/{{$team->foto}}" alt="{{$team->foto}}" width="500" height="600">
                  </td>
                  <td>
                    <p style="max-width:70ch; overflow: hidden;">{{$team->jabatan}}</p>
                  </td>
                  <td>
                    <a type="button" href="/admin_tim/{{$team->id}}/edit" class="btn btn-outline-info btn-icon-text">
                        <i class="ti-pencil btn-icon-prepend"></i>                                                    
                        Edit
                    </a>
                  </td>
                  <td>
                    <form action="admin_tim/{{$team -> id}}/hapus" method="POST">
                      @method('delete')
                      @csrf
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data nomer = {{$team->id}} ?')" class="btn btn-outline-danger btn-icon-text" >Hapus</button></form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
@endsection