@extends('layout.main')
{{-- @yield('title', 'default') --}}
@section('title')
  {{ !empty($title)?$title:'main' }}
 @stop
@section('content')ontent">
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card" id="card-petani">
                        <div class="header">
                            <h2><a href=""></a> Data Petani <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" style="float: right;"><i class="material-icons">note_add</i> Tambah Data</button></h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Jenis Klamin</th>
                                            <th>Alamat</th>
                                            <th>Jenis Tani</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1?>
                                       @foreach ($allData as $element)
                                        <tr> 
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $element->nik }}</td>
                                            <td>{{ $element->nama }}</td>
                                            <td>{{ $element->jekel }}</td>
                                            <td>{{ $element->alamat }}</td>
                                            <td>{{ $element->j_tani }}</td>
                                            <td><button class="btn btn-success btn-sm waves-effect edit_p" data-all = "{{ json_encode($element) }}" data-toggle="modal" data-target="#defaultModal"><i class="fa fa-edit"></i></button> | <button class="btn btn-danger btn-sm waves-effect hapus_p" data-id = "{{ $element->id_petani }}">Hapus</button></td>
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

<!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input data Petani</h4>
                        </div>
                        <div class="modal-body">
                           <input type="hidden" id="inp_hidden" value="">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" onkeyup="numeric('niks')" id="nik" class="form-control niks" placeholder="Nik" maxlength="16">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama">
                                </div>
                            </div>

                            
                            <div class="demo-radio-button">
                                <input name="group1" type="radio" id="radio_1" class="jekel" checked value="laki-laki">
                                <label for="radio_1">Laki Laki</label>
                                <input name="group1" type="radio" id="radio_2" class="jekel" value="perempuan">
                                <label for="radio_2">Perempuan</label>
                            </div>

                           
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="2" id="alamat" class="form-control no-resize" placeholder="Alamat"></textarea>
                                </div>
                            </div>

                          
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="jtani" class="form-control" placeholder="Jenis Tani">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <button type="button" id="sav" class="btn btn-link waves-effect" onclick="save_petani()">Save</button>
                            
                        </div>
                    </div>
                </div>
            </div>

@endsection




