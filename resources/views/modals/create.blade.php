<div class="modal fade" id="modal-add" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('messages.Add element') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="modal-add-form" method="get">
                    @yield('modal-add-content')
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" id="modal-add-close-button" data-dismiss="modal">{{ __('messages.Close') }}</button>
                <button type="button" class="btn btn-success" id="modal-add-save-button">{{ __('messages.Add') }}</button>
            </div>
        </div>
    </div>
</div>
