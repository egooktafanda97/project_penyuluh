<div class="card" id="data-wilayah-penyuluh">
    <div class="header">
        <div><button class="btn btn-danger btn-circle waves-effect waves-circle waves-float back-card-penyuluh"><i
                    class="fa fa-arrow-left"></i></button> <span style="margin-left: 30px;"><strong>Data {{ $title }}
                </strong></span><button class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#defaultModal" style="float: right;"><i class="material-icons">note_add</i> Tambah
                Data</button></div>

    </div>
    <div class="body">

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Wilayah</th>
                        <th>Desa</th>
                        <th>Dusun</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1?>
                    @foreach ($Wilayah as $element)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $element->id_wilayah }}</td>
                        <td>{{ $element->nama_desa }}</td>
                        <td>{{ $element->nama_dusun }}</td>
                        <td>{{ $element->desc }}</td>

                        <td><button class="btn btn-success btn-sm waves-effect edit_p"
                                data-all="{{ json_encode($element) }}" data-toggle="modal"
                                data-target="#defaultModal"><i class="fa fa-edit"></i></button> | <button
                                class="btn btn-danger btn-sm waves-effect hapus_p"
                                data-id="{{ $element->id_wilayah }}"><i class="fa  fa-trash"></i></button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
