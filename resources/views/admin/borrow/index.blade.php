@extends('admin.templates.default');

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            Data Peminjam Buku
        </h3>
    </div>


    <div class="box-body">

    

    <table id="dataTable" class="table table-bordered table-hover">
        <thead>
                <tr>
                  <th>id</th>
                  <th>nama</th>
                  <th>judul buku</th>
                  <th>aksi</th>
                </tr>
        </thead>
        <tbody>
     
        </tbody>
    </table>
    </div>
    
</div>

<form action="" method="post" id="returnForm">
@csrf
@method("PUT")
<input type="submit" value="Return" style="display : none">
</form>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
    @include('admin.templates.partials.alerts');
    <script>
        $(function () {
            $('#dataTable').dataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('borrow.data') }}',
                columns:[
                    { data: 'DT_RowIndex', orderable: false, searchable: false},
                    { data: 'user'},
                    { data: 'book_title'},
                    { data: 'action'}
                ]
            });
        });
    </script>
@endpush