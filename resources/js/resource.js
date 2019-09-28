var param_id = '#id#';

function edit(id, url) {
    url = url.replace(param_id, id);
    $.getJSON(url, function (data) {
        $.each(data, function (k, v) {
            let element = $('#modal-edit-form :input[name=' + k + ']');
            if (element.is('input[type=checkbox]')) {
                element.prop('checked', v).trigger('change');
            } else {
                element.val(v).trigger('change');
            }
        });
        $('#modal-edit-save-button').attr('onclick', 'update(' + id + ', \'' + url.replace('/edit', '') + '\');');
        $('#modal-edit').modal('show');
    });
}

function update(id, url) {
    $('#modal-edit-form').attr('action', url.replace(param_id, id)).submit();
}

function destroy(id, url) {
    url = url.replace(param_id, id);
    $('#modal-delete-form').attr('action', url);
    $('#modal-delete').modal('show');
}

function create(url) {
    $('#modal-add-form')[0].reset();
    $('#modal-add-form').attr('action', url);
    $('#modal-add').modal('show');
}
