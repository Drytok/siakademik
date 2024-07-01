<!-- Modal delete-->
<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="modaldelete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modaldelete">Delete Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Apakah kamu Yakin Mau Menghapus Data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                <form action="/wali_murid/{{ $item->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
