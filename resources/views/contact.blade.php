@extends('main')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           <h2>DASHBOARD</h2>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>TASK INFOS</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{ url('/save') }}" method="post">
                                @csrf
                            	<label>Nama</label>
                            	<div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control date" placeholder="Nama">
                                        </div>
                                    </div>

                                <label>Alamat</label>
                            	<div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control date" placeholder="Nama">
                                        </div>
                                    </div>
                                <br>
                                <button class="btn btn-primary">Simpan</button>

                            </form>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cont as $element)
                                        <tr>
                                            <td>{{ $element->id }}</td>
                                            <td>{{ $element->name }}</td>
                                            <td>{{ $element->alamat }}</td>
                                             <td><button>Edit</button></td>
                                            <td><button>Hapus</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



	</div>
</section>



@endsection