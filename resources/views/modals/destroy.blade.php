<div class="modal fade" id="modal-delete" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('messages.Delete element') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('messages.Are you sure?') }}
                <form id="modal-delete-form" method="post">
                    @csrf
                    @method('delete')
                    @yield('modal-delete-content')
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" id="modal-delete-close-button" data-dismiss="modal">{{ __('messages.Close') }}</button>
                <button type="button" class="btn btn-danger" id="modal-delete-delete-button" onclick="$('#modal-delete-form')[0].submit();">{{ __('messages.Delete') }}</button>
            </div>
        </div>
    </div>
</div>
