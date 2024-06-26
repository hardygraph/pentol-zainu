@extends('backend.partial-backend.app')
@section('content')


<br>
<div class="chute chute-center mt-10">

    <div class="mw1000 center-block">

        <!-- -------------- Spec Form -------------- -->
        <div class="allcp-form">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title text-dark"><strong>Tambah Menu minuman</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('minuman.store') }}" id="form-ui" enctype="multipart/form-data">
                        <h6 class="mb10" id="spy1">Jenis minuman</h6>
                        <!-- -------------- minuman -------------- -->
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <input type="text" name="minuman" id="minuman" class="gui-input @error('minuman') is-invalid @enderror" value="{{ old('minuman') }}"
                                               placeholder="Isi Jenis minuman..">
                                    </label>
                                    @error('minuman')
                                    <p class="invalid-feedback text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <h6 class="mb10" id="spy1">Harga</h6>
                        <!-- -------------- Harga -------------- -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <input type="number" name="harga" id="harga" class="gui-input @error('harga') is-invalid @enderror"
                                        value="{{ old('harga') }}" placeholder="Isi Harga">
                                @error('harga')
                                    <p class="invalid-feedback text-danger">{{ $message }}</p>
                                @enderror
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h6 class="mb10" id="spy1">Stok</h6>
                        <!-- -------------- Stok -------------- -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <input type="number" name="stok" id="stok" class="gui-input @error('stok') is-invalid @enderror"
                                        value="{{ old('stok') }}" placeholder="Isi Stok">
                                @error('stok')
                                    <p class="invalid-feedback text-danger">{{ $message }}</p>
                                @enderror
                                    </label>
                                </div>
                            </div>
                        </div>

                        <h6 class="mt40 mb20" id="spy4">Gambar</h6>
                        <!-- -------------- File Uploader -------------- -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field prepend-icon append-button file">
                                        <span class="button">Pilih Gambar</span>
                                        <input type="file" class="gui-file" name="image" id="image"
                                               onChange="document.getElementById('uploader1').value = this.value;">
                                        <input type="text" class="gui-input" id="uploader1"
                                               placeholder="Pilih Gambar">
                                        <label class="field-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="pull-right mt-20">
                                    {{-- <a class="btn btn-primary btn-sm" type="submit"><strong>+ &nbsp; Tambah</strong></a> --}}
                                    <button class="btn btn-primary btn-xl" type="submit"> <strong>+ &nbsp; Tambah</strong> </button>
                                    {{-- <button type="submit" class="btn btn-xs btn-primary btn-block">Primary</button> --}}
                                </div>
                            </div>
                    </form>
                    <!-- -------------- /form -------------- -->
                </div>
            </div>

        </div>

    </div>
    
</div>

@endsection