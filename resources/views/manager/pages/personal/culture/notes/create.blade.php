@extends('admin.layout')

@section('title', 'Create new note')

@section('css') @endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">
                            <small>Create new note</small>
                        </h3>
                    </div>

                    <div class="box-body pad">
                        <form method="POST" action="{{ URL::route('note.store') }}" id="add-note">
                            {{ csrf_field() }}
                            <!-- /.box-header -->
                            <div class="col-md-6">
                                <!-- general form elements disabled -->
                                <div class="box box-info">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <!-- text input -->
                                        <div class="col-md-12 form-group @if ($errors->has('title')) has-error @endif">
                                            <label class="label-box-create"><i class="fa fa-edit"></i> Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Enter title" value="{{ old('title') }}">
                                            @if ($errors->has('title'))
                                                <span class="help-block">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                        <!-- textarea -->
                                        <div class="col-md-12 form-group @if ($errors->has('description')) has-error @endif">
                                            <label class="label-box-create"><i class="fa fa-archive"></i> Description</label>
                                            @if(old('description'))
                                                <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                                            @else
                                                <textarea name="description" class="form-control" rows="3">Some note in {{ date('d-m-Y') }}</textarea>
                                            @endif
                                            @if ($errors->has('description'))
                                                <span class="help-block">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label class="label-box-create"><i class="fa fa-newspaper-o"></i> Notification</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <input name="notification" id="notification" type="checkbox" value="1" @if(old('notification_date')) checked @endif>
                                                </span>
                                                <input type="text" name="notification_date" id="notification_date" class="form-control" disabled value="{{ old('notification_date') }}">
                                            </div>
                                        </div>

                                        <!-- select -->
                                        <div class="col-md-12 form-group">
                                            <label class="label-box-create"><i class="fa fa-check-circle"> </i> Select status</label>
                                            <select name="status" class="form-control" value="{{ old('status') }}">
                                                @foreach($status as $key => $value)
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>

                            <div class="col-md-6">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="col-md-12 form-group @if ($errors->has('content')) has-error @endif">
                                            <textarea class="form-control" id="note_editer" name="content" rows="8" cols="60">{{ old('content') }}</textarea>
                                            @if ($errors->has('content'))
                                                <span class="help-block">{{ $errors->first('content') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="box-footer text-center">
                        <a href="{{ URL::route('note.index') }}" type="submit" class="btn btn-primary">Back</a>
                        <button form="add-note" type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary">Clear</button>
                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function () {
            CKEDITOR.replace('note_editer')
            $('.textarea').wysihtml5()

            if($('#notification').is(":checked")){
                $('#notification_date').prop('disabled', false);
            }
        })

        $('#notification_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        })

        $('#notification').click(function() {
            if($('#notification').is(":checked")){
                $('#notification_date').prop('disabled', false);
            } else {
                $('#notification_date').prop('disabled', true);
            }
        })
    </script>
@endsection
