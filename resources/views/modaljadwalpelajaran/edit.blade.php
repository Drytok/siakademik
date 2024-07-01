<div class="modal fade" id="modalcreate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="modalcreate"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalcreate">New Create Jadwal Pelajaran {{ $item->id }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                {{-- @dd($murid) --}}
                <form action="/jadwal_pelajaran/{{ $item->id }}" method="POST">
                    {{ csrf_field() }}
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jam Masuk
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="time" id="last-name" name="jam_masuk" value="{{ $item->jam_masuk }}"
                                required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hari Masuk
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" class="form-control" type="date" name="hari_masuk"
                                value="{{ $item->hari_masuk }}">
                        </div>
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
