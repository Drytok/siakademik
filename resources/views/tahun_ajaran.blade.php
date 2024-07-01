@extends('layouts.main')

@section('container')
    <div class="col-md-12 col-sm-12  ">
        @if (session('status'))
            <div class="alert alert-succes">
                {{ session('status') }}
            </div>
        @endif
        <div class="x_panel">
            <div class="x_title">
                <h2>Tampil Tahun Ajaran</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <button href="#" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalcreate">
                        Data Baru
                    </button>
                    <a href="{{ url('/cetaktahunajaran') }}" target="_blank" class="btn btn-info btn-md">
                        Cetak Report
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="modalcreate" tabindex="-1" role="dialog" aria-labelledby="modalcreate"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modalcreate">New Create Tahun Ajaran</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    {{-- @dd($murid) --}}
                                    <form action="/tahun_ajaran" method="POST">
                                        {{ csrf_field() }}
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="last-name">Tahun Ajaran
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" id="last-name" name="tahun_ajaran" required="required"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="middle-name"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Semester
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input id="middle-name" class="form-control" type="text" name="semester">
                                            </div>
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
                                <th class="column-title">Tahun Ajaran </th>
                                <th class="column-title">Semester </th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tahun_ajaran as $item)
                                {{-- @dd($item->id) --}}
                                <tr>
                                    <td>{{ $item->tahun_ajaran }}</td>
                                    <td>{{ $item->semester }}</td>
                                    <td class=" last">
                                        <a href="#" type="text" class="fa fa-plus-square"data-toggle="modal"
                                            data-target="#modalcreate{{ $item->id }}"> Edit </a>
                                        <a href="#"tittle="teks" class="fa fa-trash"
                                            data-toggle="modal"data-target="#modaldelete"> Hapus </a>
                                    </td>
                                </tr>

                                @include('modaltahunajaran.delete')
                                @include('modaltahunajaran.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
