<div class="modal fade" id="modalcreate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalcreate"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalcreate">New Create Nilai {{ $item->id }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {{-- @dd($murid) --}}
                <form action="/nilai/{{ $item->id }}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama
                            <span class="required">*</span>
                        </label>
                        <select name="nama" class="form-control ">
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                            @foreach ($murid as $item)
                                <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kelas<span
                                class="required">*</span>
                        </label>
                        <select name="kelas" class="form-control ">
                            <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Semester
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="last-name" name="semester" value="{{ $item->semester }}"
                                required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nilai UTS <span
                                class="required">*</span>
                        </label>
                        <select name="nilai_uts" class="form-control ">
                            <option value="{{ $item->nilai_uts }}">{{ $item->nilai_uts }}</option>
                            @foreach ($nilai_uts as $item)
                                <option value="{{ $item->nilai_uts }}">{{ $item->nilai_uts }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nilai UAS <span
                                class="required">*</span>
                        </label>
                        <select name="nilai_uas" class="form-control ">
                            <option value="{{ $item->nilai_uas }}">{{ $item->nilai_uas }}</option>
                            @foreach ($nilai_uas as $item)
                                <option value="{{ $item->nilai_uas }}">{{ $item->nilai_uas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nilai Tugas <span
                                class="required">*</span>
                        </label>
                        <select name="nilai_tugas" class="form-control ">
                            <option value="{{ $item->nilai_tugas }}">{{ $item->nilai_tugas }}</option>
                            @foreach ($nilai_tugas as $item)
                                <option value="{{ $item->nilai_tugas }}">{{ $item->nilai_tugas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
