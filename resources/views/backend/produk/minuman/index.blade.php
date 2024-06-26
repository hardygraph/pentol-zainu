@extends('backend.partial-backend.app')
@section('content')


    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">


            <div class="panel" id="spy4">
                <div class="panel-heading">
                    <span class="panel-title text-dark mb-">Menu Minuman</span>
                    <div class="pull-right">
                        <a href="{{ route('minuman.create') }}" class="btn btn-primary btn-sm"><strong>+ &nbsp;
                                Tambah</strong></a>
                        {{-- <button class="btn btn-primary btn-sm" onclick="document.location='{{ route('minuman-add') }}'"> <strong>+ &nbsp; Tambah</strong> </button> --}}
                    </div>
                </div><br>
                @if (Session::has('success'))
                    <div class="col-md-10 mt-4">
                        <div class="text-primary">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif
                <div class="panel-body pn">
                    <div class="table-responsive">

                        <table class="table table-hover ">
                            <thead>
                                <tr class="warning">
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Jenis minuman</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Stok</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($minuman->isNotEmpty())
                                    @foreach ($minuman as $gelas)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gelas->minuman }}</td>
                                            <td>{{ $gelas->harga }}</td>
                                            <td>{{ $gelas->stok }}</td>
                                            <td>
                                                @if ($gelas->image != '')
                                                    <img width="50" src="{{ asset('uploads/minuman/' . $gelas->image) }}"
                                                        alt="">
                                                @endif
                                            </td>
                                            <td>

                                                <a href="{{ route('minuman.edit', $gelas->id) }}" type="submit"
                                                    class="btn btn-warning fa fa-edit"></a>
                                                <a href="" type="submit" class="btn btn-danger fa fa-trash-o"
                                                    data-toggle="modal" data-target="#exampleModal{{ $gelas->id }}"></a>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal flash" id="exampleModal{{ $gelas->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Menghapus Data <b>{{ $gelas->minuman }}</b>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('minuman.destroy', ['id' => $gelas->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-primary"
                                                                data-dismiss="modal">Tidak</button>
                                                            <button type="submit" class="btn btn-danger">Ya! Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
