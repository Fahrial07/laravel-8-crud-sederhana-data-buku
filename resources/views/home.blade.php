@extends('layouts/main')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Data Buku</h4>
            </div>
            <div class="card-body">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if(session()->has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ session('danger') }}
                </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-hover" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Jml Halaman</th>
                                <th>Tahun Terbit</th>
                                <th>Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $n=1; @endphp
                            @foreach($data As $buku)
                            <tr>
                                <td>{{ $n++ }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#hapus{{ $buku->id_buku }}">Hapus Data</button>
                                        <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#edit{{ $buku->id_buku }}">Edit Data</button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus{{ $buku->id_buku }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="alert alert-warning" role="alert">
                                                                <h6 class="text-center">Apakah anda yakin ingin menghapus data buku : {{ $buku->judul_buku }} ?</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <a href="/hapus-data/{{ $buku->id_buku }}" class="btn btn-danger btn-sm">Hapus Data</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                                <!-- Modal -->
                                <div class="modal fade" id="edit{{ $buku->id_buku }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form action="/update-data/{{ $buku->id_buku }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="">Judul Buku</label>
                                                                <input type="text" name="judul_buku" value="{{ $buku->judul_buku }}" id="" 
                                                                class="form-control @error('judul_buku') is-invalid @enderror">
                                                            </div>
                                                            @error('judul_buku')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label for="">Pengarang</label>
                                                                <input type="text" name="pengarang" value="{{ $buku->pengarang }}" id="" 
                                                                class="form-control @error('pengarang') is-invalid @enderror">
                                                            </div>
                                                            @error('pengarang')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label for="">Jumlah Halaman</label>
                                                                <input type="text" name="jml_halaman" value="{{ $buku->jml_halaman }}" id="" 
                                                                class="form-control  @error('jml_halaman') is-invalid @enderror">
                                                            </div>
                                                            @error('jml_halaman')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label for="">Tahun Terbit</label>
                                                                <input type="date" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" 
                                                                class="form-control  @error('tahun_terbit') is-invalid @enderror">
                                                            </div>
                                                            @error('tahun_terbit')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                            <div class="form-group">
                                                                <label for="">Penerbit</label>
                                                                <input type="text" name="penerbit" value="{{ $buku->penerbit }}" id="" 
                                                                class="form-control @error('penerbit') is-invalid @enderror">
                                                            </div>
                                                            @error('penerbit')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                            <div class="form-group mt-3">
                                                                <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <td>{{ $buku->judul_buku }}</td>
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{ $buku->jml_halaman }} Halaman</td>
                                <td>{{ $buku->tahun_terbit }}</td>
                                <td>{{ $buku->penerbit }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()