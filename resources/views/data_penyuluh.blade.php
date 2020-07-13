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
            @include('layout.fragment.table_data_penyuluh')
            @include('layout.fragment.table_wilayah_penyuluh')
            @include('layout.fragment.table_data_akun_penyuluh')
            
                    
            {{-- card wilayah --}}
        </div>



	</div>
</section>

<!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Input data Penyuluh</h4>
                        </div>
                        <div class="modal-body">
                           <input type="hidden" id="inp_hidden" value="">
                            <div class="form-group">
                                <label>Nik</label>
                                <div class="form-line">
                                    <input type="text" onkeyup="numeric('niks')" id="nik" class="form-control niks" placeholder="Nik" maxlength="16">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-line">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control show-tick" id="agama">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Katolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <label>Jenis Klamin</label>
                            <div class="demo-radio-button">
                                <input name="group1" type="radio" id="radio_1" class="jekel" checked value="laki-laki">
                                <label for="radio_1">Laki Laki</label>
                                <input name="group1" type="radio" id="radio_2" class="jekel" value="perempuan">
                                <label for="radio_2">Perempuan</label>
                            </div>
                        </div>


                           
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="form-line">
                                    <textarea rows="2" id="alamat" class="form-control no-resize" placeholder="Alamat"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            <button type="button" id="sav" class="btn btn-primary waves-effect" onclick="save_penyuluh()">Save</button>
                            
                        </div>
                    </div>
                </div>
            </div>

@endsection




