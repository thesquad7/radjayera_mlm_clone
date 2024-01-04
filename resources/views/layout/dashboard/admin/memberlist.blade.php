@extends('layout.dashboard.admin.main')
@section('acontainer')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Daftar Member</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Daftar Member</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Member</th>
                      <th>Paket</th>
                      <th>Nama Lengkap</th>
                      <th>Username</th>
                      <th>Tgl Daftar</th>
                      <th>Password</th>
                      <th>PIN</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonis as $testimoni)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                          <td>{{$testimoni->title}}</td>
                          <td>{{$testimoni->slug}}</td>
                          <td>{{$testimoni->author}}</td>
                          <td>{{$testimoni->title}}</td>
                          <td>{{$testimoni->slug}}</td>
                          <td>{{$testimoni->slug}}</td>
                          <td>{{$testimoni->slug}}</td>
                          <td>
                            <a href="{{route('testimoni.show', $testimoni->id)}}"class="badge bg-info"><i class="far fa-circle nav-icon"></i></span></a>
                            <a href="{{route('testimoni.edit',$testimoni->id)}}"class="badge bg-info"><i class="far fa-circle nav-icon"></i></span></a>
                            <a href="/dashboard/member/{{$testimoni->id}}"class="badge bg-info"><i class="far fa-circle nav-icon"></i></span></a>
                          </td>
                        </tr>
                      @endforeach
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
</div>
@endsection