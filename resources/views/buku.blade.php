@extends('layouts/main')

@section('content')

<div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h5>Tambah Buku</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/proses" method="post" enctype="multipart/form-data">
                            <div class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Judul Buku</label>
                                        <input type="text" name="judul_buku" id="" value="{{ old('judul_buku') }}" class="form-control @error('judul_buku') is-invalid @enderror">
                                    </div>
                                    @error('judul_buku')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Pengarang</label>
                                        <input type="text" name="pengarang" value="{{ old('pengarang') }}" id="" class="form-control  @error('pengarang') is-invalid @enderror">
                                    </div>
                                    @error('pengarang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Jumlah Halaman</label>
                                        <input type="text" name="jml_halaman" value="{{ old('jml_halaman') }}" id="" class="form-control  @error('jml_halaman') is-invalid @enderror">
                                    </div>
                                    @error('jml_halaman')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tahun Terbit</label>
                                        <input type="date" name="tahun_terbit" value="{{ old('tahun_terbit') }}" class="form-control  @error('tahun_terbit') is-invalid @enderror">
                                    </div>
                                    @error('tahun_terbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Penerbit</label>
                                        <input type="text" name="penerbit" value="{{ old('penerbit') }}" id="" class="form-control  @error('penerbit') is-invalid @enderror">
                                    </div>
                                    @error('penerbit')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group mt-3">
                                        <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()