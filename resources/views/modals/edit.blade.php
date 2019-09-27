<div class="modal fade" id="modal-edit" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('messages.Edit element') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal-edit-form" method="post">
                    @csrf
                    @method('patch')
                    @yield('modal-edit-content')
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" id="modal-edit-close-button" data-dismiss="modal">{{ __('messages.Close') }}</button>
                <button type="button" class="btn btn-primary" id="modal-edit-save-button">{{ __('messages.Save') }}</button>
            </div>
        </div>
    </div>
</div>
