@push('css_lib')
    @include('layouts.datatables_css')
@endpush

{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts_lib')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush

<?php
// use App\Lang\lang_database;
// lang_database::trans();
?>
