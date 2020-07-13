<div class="card" id="data-penyuluh">
    <div class="header">
        <div><span style="margin-left: 30px;"><strong>Data {{ $title }}</strong></span>
            <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" style="float: right;"><i class="material-icons">note_add</i> Tambah
                Data</button></div>

    </div>
    <div class="body">


        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Agama</th>
                        <th>Jenis Klamin</th>
                        <th>Alamat</th>
                        <th>Form Akun</th>
                        <th>Wilayah</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1?>
                    @foreach ($allData as $element)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $element->nik }}</td>
                        <td>{{ $element->nama }}</td>
                        <td>{{ $element->agama }}</td>
                        <td>{{ $element->jekel }}</td>
                        <td>{{ $element->alamat }}</td>
                        <td><button class="btn bg-teal btn-block btn-lg waves-effect btn-sm btn-akun">Akun</button></td>
                        <td class="text-center">
                            <button
                                class="btn btn-info btn-sm waves-effect btn-wilayah"
                                data-id="{{ $element->id_wilayah }}"><i class="fa  fa-map-marker"></i></button>
                        </td>
                        <td><button class="btn btn-success btn-sm waves-effect edit_p"
                                data-all="{{ json_encode($element) }}" data-toggle="modal"
                                data-target="#defaultModal">Edit</button> | <button
                                class="btn btn-danger btn-sm waves-effect hapus_p"
                                data-id="{{ $element->id_penyuluh }}">Hapus</button></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
