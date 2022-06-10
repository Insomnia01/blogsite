@extends('layouts.Admin')

@section('title', 'Inbox')

@section('content')


<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
    <h1>Mesajlar</h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Inbox</li>
    </ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="card">
<div class="card-body">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <table class="table table-fluid" id="myTable">
                        <thead>
                            <tr>
                                <th>Tarih</th>
                                <th>İsim</th>
                                <th>Telefon</th>
                                <th>E-posta</th>
                                <th>Mesaj</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($inbox)
                                @foreach ($inbox as $rs)
                                    <tr>
                                        <td>{{ $rs->date }}</td>
                                        <td>{{ $rs->name }}</td>
                                        <td>{{ $rs->phone }}</td>
                                        <td><a href="mailto:{{ $rs->mail }}">{{ $rs->mail }}</a></td>
                                        <td>{{ $rs->message }}</td>
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