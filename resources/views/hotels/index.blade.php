@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data hotel</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Owner</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Email</th>
                    <th>Npwp</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($hotel as $h)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td width="16%">{{ $h->name }}</td>
                        <td width="16%">{{ $h->owner }}</td>
                        <td width="16%">{{ $h->address }}</td>
                        <td width="16%">{{ $h->phone }}</td>
                        <td width="16%">{{ $h->fax }}</td>
                        <td width="16%">{{ $h->email }}</td>
                        <td width="16%">{{ $h->npwp }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a href="{{ route('hotel.edit', $h->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat"><i
                                                    class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('hotel.destroy', $h->id)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="window.alert('Hapus hotel ?')" type="submit"
                                                    data-toggle="tooltip" data-placement="top" title="Hapus"
                                                    name="button" class="btn btn-xs btn-danger btn-flat"><span
                                                        class="glyphicon glyphicon-trash"></span></button>
                                        </form>
                                    </div>
                                </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection