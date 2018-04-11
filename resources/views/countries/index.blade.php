@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">Data country</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($country as $c)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td width="16%">{{ $c->name }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a href="{{ route('country.edit', $c->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat"><i
                                                    class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('country.destroy', $c->id)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="window.alert('Hapus country ?')" type="submit"
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
        <!-- /.box-body -->
    </div>
@endsection