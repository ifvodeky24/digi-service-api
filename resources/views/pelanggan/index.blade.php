@extends('layouts/main')

@section('judul_halaman','Data Pelanggan')

@section('konten')

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">

            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-config_info">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pelanggan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ url('foto-pelanggan/') }}/{{ $item->pelanggan_foto }}" alt="Foto tidak ditemukan" width="50px" height="50px"></td>
                            <td>{{ $item->pelanggan_nama }}</td>
                            <td>{{ $item->pelanggan_alamat }}</td>
                            <td>{{ $item->pelanggan_hp }}</td>
                            <td class="text-center"><a href="#" onclick="return confirm('Yakin ingin menghapus?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection