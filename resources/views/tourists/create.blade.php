@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Hotel</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    @include('template.alert')
                    <form action="{{ route('hotel.store') }}" method="post" enctype="multipart/form-data"
                          id="contactForm">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label>Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label>Name</label>
                            <input value="{{ old('gender') }}" type="text" class="form-control" name="gender">
                            @if ($errors->has('gender'))
                                <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                            <label>Name</label>
                            <input value="{{ old('age') }}" type="text" class="form-control" name="age">
                            @if ($errors->has('age'))
                                <span class="help-block"><strong>{{ $errors->first('age') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('staf') ? ' has-error' : '' }}">
                            <label>Pilih Conutries</label><br>
                            <select id="basic2" class="show-tick form-control" name="staf" multiple>
                                <option disabled="" selected="">Pilih Conutries</option>
                                @foreach($country as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('staf'))
                                <span class="help-block"><strong>{{ $errors->first('staf') }}</strong></span>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-primary btn-flat" name="submit"><span
                                    class="glyphicon glyphicon-send"></span> Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection