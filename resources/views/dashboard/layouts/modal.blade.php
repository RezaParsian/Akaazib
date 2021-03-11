<!-- modal -->
<div class="modal fade text-dark" id="singout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">خروج</div>
            <div class="modal-body">
                آیا میخواهید خارج شوید؟
            </div>
            <div class="modal-footer">
            <form method="POST" action="{{route("logout")}}">
                @csrf
                    <input type="submit" value="خروج" class="btn btn-danger">
                </form>
                <button class="btn btn btn-outline-dark" data-dismiss="modal">لغو</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal -->
