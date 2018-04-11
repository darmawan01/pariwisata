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
                    <th>Passport ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Nationality</th>
                    <th>Destination</th>
                    <th>Hotel</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tourist as $t)
                    <tr>
                        <td width="3%">{{ $loop->index + 1 }}</td>
                        <td width="16%">{{ $t->passport_id }}</td>
                        <td width="16%">{{ $t->name }}</td>
                        <td width="16%">{{ $t->gender }}</td>
                        <td width="16%">{{ $t->age }}</td>
                        <td width="16%">{{ $t->country_id }}</td>
                        <td width="16%">{{ $t->nationality_id }}</td>
                        <td width="16%">{{ $t->destination_id }}</td>
                        <td width="16%">{{ $t->hotel_id }}</td>
                        <td width="16%" class="text-center">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <a href="{{ route('tourists.update', $t->id) }}"
                                           data-toggle="tooltip" data-placement="top" title="Edit"
                                           class="btn btn-xs btn-warning btn-flat"><i
                                                    class="glyphicon glyphicon-edit"></i></a>
                                    </div>
                                    <div class="col col-sm-2">
                                        <form class="" action="{{ route('tourists.destroy', $t->id)}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button onclick="window.alert('Hapus tourists ?')" type="submit"
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