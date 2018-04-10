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

                        <div class="form-group {{ $errors->has('country_id') ? ' has-error' : '' }}">
                            <label>Pilih Conutries</label><br>
                            <select id="basic2" class="show-tick form-control" name="country_id" multiple>
                                <option disabled="" selected="">Pilih Conutries</option>
                                @foreach($country as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('country_id'))
                                <span class="help-block"><strong>{{ $errors->first('country_id') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('nationality_id') ? ' has-error' : '' }}">
                            <label>Pilih Conutries</label><br>
                            <select id="basic2" class="show-tick form-control" name="nationality_id" multiple>
                                <option disabled="" selected="">Pilih Conutries</option>
                                @foreach($nationality as $n)
                                    <option value="{{ $n->id }}">{{ $n->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('nationality_id'))
                                <span class="help-block"><strong>{{ $errors->first('nationality_id') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('hotel_id') ? ' has-error' : '' }}">
                            <label>Pilih Hotel</label><br>
                            <select id="basic2" class="show-tick form-control" name="hotel_id" multiple>
                                <option disabled="" selected="">Pilih Hotel</option>
                                @foreach($user as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('hotel_id'))
                                <span class="help-block"><strong>{{ $errors->first('hotel_id') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('destination_id') ? ' has-error' : '' }}">
                            <label>Pilih Destination</label><br>
                            <select id="basic2" class="show-tick form-control" name="destination_id" multiple>
                                <option disabled="" selected="">Pilih Destination</option>
                                @foreach($user as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('destination_id'))
                                <span class="help-block"><strong>{{ $errors->first('destination_id') }}</strong></span>
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