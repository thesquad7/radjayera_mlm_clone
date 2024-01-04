@extends('layout.dashboard.admin.main')
@section('acontainer')
<div class="content-wrapper ">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Member</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Member</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="main-body">
          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                    <div class="mt-3">
                      <h4>{{$data->author}}</h4>
                      <p class="text-secondary mb-1">{{$data->title}}</p>
                      <p class="text-muted font-size-sm">Address</p>
                    </div>
                  </div>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-8 " >
              <div class="card">
                <div class="card-body">
                  <form action="{{route('testimoni.update', $data->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$data->author}}" name="author">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$data->slug}}" name="slug">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">title</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$data->title}}" name="title">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                      </div>
                  </form> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
@endsection