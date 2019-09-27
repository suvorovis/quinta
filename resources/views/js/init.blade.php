<script type="application/javascript">
    $(function () {
        initDataTable('table.data-table');
        initSimpleSelect2('select');
        initSelect2('select.select2.form-control');
    });

    function initDataTable(selector, options = {}) {
        let params = {
            retrieve: true,
            paging: true,
            lengthChange: true,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            language: {
                processing: '{{ __('datatable.processing') }}',
                search: '{{ __('datatable.search') }} :',
                lengthMenu: '{{ __('datatable.lengthMenu') }}',
                info: '{{ __('datatable.info') }}',
                infoEmpty: '{{ __('datatable.infoEmpty') }}',
                infoFiltered: '{{ __('datatable.infoFiltered') }}',
                infoPostFix: '{{ __('datatable.infoPostFix') }}',
                loadingRecords: '{{ __('datatable.loadingRecords') }}',
                zeroRecords: '{{ __('datatable.zeroRecords') }}',
                emptyTable: '{{ __('datatable.emptyTable') }}',
                paginate: {
                    first: '{{ __('datatable.first') }}',
                    previous: '{{ __('datatable.previous') }}',
                    next: '{{ __('datatable.next') }}',
                    last: '{{ __('datatable.last') }}',
                },
                aria: {
                    sortAscending: '{{ __('datatable.sortAscending') }}',
                    sortDescending: '{{ __('datatable.sortDescending') }}',
                }
            },
            order: [[0, 'asc']],
        };

        $.each(options, function (k, v) {
            params[k] = v;
        });

        $(selector).DataTable(params);
    }

    function initSimpleSelect2(selector, options = {}) {
        let params = {
            minimumResultsForSearch: -1
        };

        $.each(options, function (k, v) {
            params[k] = v;
        });

        $(selector).select2(params);
    }

    function initSelect2(selector, options = {}) {
        let params = {
            width: '100%',
            language: '{{ app()->getLocale() }}'
        };

        $.each(options, function (k, v) {
            params[k] = v;
        });

        $(selector).select2(params);
    }
</script>
