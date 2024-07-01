@extends('layouts.main')

@section('container')
    <div class="col-md-12 col-sm-12 ">
        @if (session('status'))
            <div class="alert alert-succes">
                {{ session('status') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2>Tampil Nilai</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <button href="#" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalcreate">
                        Data Baru
                    </button>
                    <a href="{{ url('/cetaknilai') }}" target="_blank" class="btn btn-info btn-md">
                        Cetak Report
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modalcreate"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modalcreate">New Create Nilai</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    {{-- @dd($murid) --}}
                                    <form action="/nilai" method="POST">
                                        {{ csrf_field() }}
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="first-name">Nama
                                                <span class="required">*</span>
                                            </label>
                                            <select name="nama" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($murid as $item)
                                                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="last-name">Kelas
                                                <span class="required">*</span>
                                            </label>
                                            <select name="kelas" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($kelas as $item)
                                                    <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="item form-group">
                                            <label for="middle-name"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Semester
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="middle-name" class="form-control" type="text" name="semester">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="last-name">Nilai UTS<span class="required">*</span>
                                            </label>
                                            <select name="nilai_uts" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($nilai_uts as $item)
                                                    <option value="{{ $item->nilai_uts }}">{{ $item->nilai_uts }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="last-name">Nilai UAS<span class="required">*</span>
                                            </label>
                                            <select name="nilai_uas" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($nilai_uas as $item)
                                                    <option value="{{ $item->nilai_uas }}">{{ $item->nilai_uas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="last-name">Nilai Tugas<span class="required">*</span>
                                            </label>
                                            <select name="nilai_tugas" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($nilai_tugas as $item)
                                                    <option value="{{ $item->nilai_tugas }}">{{ $item->nilai_tugas }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Nama </th>
                                <th class="column-title">Kelas </th>
                                <th class="column-title">Semester </th>
                                <th class="column-title">Nilai UTS </th>
                                <th class="column-title">Nilai UAS </th>
                                <th class="column-title">Nilai Tugas </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($nilai as $item)
                                {{-- @dd($item->id) --}}
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>{{ $item->semester }}</td>
                                    <td>{{ $item->nilai_uts }}</td>
                                    <td>{{ $item->nilai_uas }}</td>
                                    <td>{{ $item->nilai_tugas }}</td>
                                    <td class=" last">
                                        <a href="#" type="text" class="fa fa-plus-square"data-toggle="modal"
                                            data-target="#modalcreate{{ $item->id }}"> Edit </a>
                                        <a href="#"tittle="teks" class="fa fa-trash"
                                            data-toggle="modal"data-target="#modaldelete"> Hapus </a>
                                    </td>
                                </tr>
                                @include('modalnilai.delete')
                                @include('modalnilai.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
