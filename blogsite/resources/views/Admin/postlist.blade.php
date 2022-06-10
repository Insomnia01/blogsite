@extends('layouts.Admin')

@section('title', 'post List')

@section('content')


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
    <h1>Gönderiler</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">post</li>
    </ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="card">
<div class="card-header">
<a href="{{ route('admin_post_add') }}" type="button" class="btn btn-block btn-success col-1">Gönderi Ekle</a>
</div>
<div class="card-body">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table table-fluid" id="myTable">
                        <thead>
                            <tr>
                                <th>Başlık</th>
                                <th>Durum</th>
                                <th>Eylemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($posts)
                                @foreach ($posts as $rs)
                                    <tr>
                                        <td>{{ $rs->title }}</td>
                                        <td>{{ $rs->status }}</td>
                                        <td>
                                            <a href="#"
                                                class='btn btn-primary'> Düzenle</a>
                                            <a href="#"
                                                class='btn btn-danger'
                                                onclick="return confirm('You are about to delete a post. Are you sure?')">Sil</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
</div>
</div>
</section>
</div>

<script type="text/javascript" src="{{ asset('assets') }}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/admin/plugins/jszip/jszip.min.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script>
$('#myTable').DataTable({
"sPaginationType": "full_numbers",
dom: '<"top"lBf>rt<"bottom"ip><"clear">',
buttons: [{
extend: 'copy',
exportOptions: {
    columns: [0, 1]
}
},
{
extend: 'pdf',
exportOptions: {
    columns: [0, 1]
}
},
{
extend: 'excel',
title: 'Gönderiler',
exportOptions: {
    columns: [0, 1]
}
}
]
});
</script>
@endsection

<!--
    <a href="{/{ route('admin_post_edit', ['id' => $rs->id]) }}"
                                                class='btn btn-primary'> Edit</a>
                                            <a href="{/{ route('admin_post_delete', ['id' => $rs->id]) }}"
                                                class='btn btn-danger'
                                                onclick="return confirm('You are about to delete a post. Are you sure?')">Delete</a>
                                            -->