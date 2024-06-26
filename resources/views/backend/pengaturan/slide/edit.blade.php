@extends('backend.partial-backend.app')
@section('content')


<br>
<div class="chute chute-center mt-10">

    <div class="mw1000 center-block">

        <!-- -------------- Spec Form -------------- -->
        <div class="allcp-form">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title text-dark"><strong>Tambah Silde</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('slide.update',['id'=>$slide->id]) }}" id="form-ui" enctype="multipart/form-data">
                        <h6 class="mb10" id="spy1">Judul Slide</h6>
                        <!-- -------------- slide -------------- -->
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <input type="text" name="judul" id="judul" class="gui-input @error('judul') is-invalid @enderror"
                                               value="{{ old('judul',$slide->judul) }}">
                                    </label>
                                    @error('judul')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <h6 class="mb10" id="spy1">Keterangan</h6>
                        <!-- -------------- Harga -------------- -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section">
                                    <label class="field">
                                        <input type="text" name="keterangan" id="keterangan" class="gui-input @error('keterangan') is-invalid @enderror"
                                        value="{{ old('keterangan',$slide->keterangan) }}">
                                    </label>
                                    @error('keterangan')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
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
                                        >
                                        <label class="field-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                        </label>
                                    </label>
                                    @if ($slide->image != "")
                                    <img  class="w-50 my-3" src="{{ asset('uploads/slide/'.$slide->image) }}" alt="" width="50">
                                @endif
                                </div>
                                <div class="pull-right mt-20">
                                    {{-- <a class="btn btn-primary btn-sm" type="submit"><strong>+ &nbsp; Tambah</strong></a> --}}
                                    <button class="btn btn-primary btn-xl" type="submit"> <strong> Update</strong> </button>
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