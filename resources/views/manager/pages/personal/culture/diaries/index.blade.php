<?php
    use \App\Helpers\Date\DateHelper;
?>

@extends('admin.layout')

@section('title', 'Diaries')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pages/culture.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title last-title-box-index">My diaries</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ URL::route('diary.create') }}" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add new diary</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                    <ul class="todo-list">
                        @foreach($diaries as $key => $diary)
                        <li>
                            <!-- Emphasis label -->
                            <span class="text crop-span">
                                <small class="label label-info" id="time-ago"><i class="fa fa-clock-o"></i>  {{ DateHelper::getPeriodOfTime($diary->created_at) }}</small>
                            </span>
                            <!-- drag handle -->
                            <span class="handle crop-span" id="crop-span-ellipsis">
                                <i class="fa fa-ellipsis-v"></i>
                                <i class="fa fa-ellipsis-v"></i>
                            </span>

                            <span class="text crop-title-75" id="title-note-index"><a href="{{ URL::route('diary.show', $diary->id) }}">{{ $diary->title }}</a> </span>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <a href="{{ URL::route('diary.edit', $diary->id) }}"><i class="fa fa-edit"></i></a>
                                <a href="#" id="test"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <div class="box-tools pull-right">
                        {{ $diaries->links() }}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- About Me Box -->
            <div class="box box-primary" id="box-last-note">
                <div class="box-header with-border">
                    <i class="fa fa-pencil margin-r-5"></i>
                    <h3 class="box-title last-title-box-index">Last Diary |
                        @if($lastDiary)
                        <small class="crop-title-75"><a href="{{ URL::route('diary.show', $lastDiary->id) }}">{{ $lastDiary->title }}</a></small>
                        @endif
                    </h3>

                    @if($lastDiary)
                    <div class="col-md-12">
                        @if($lastDiary->status == 1)
                            <small><span class="label label-success">Enable</span></small>
                        @else
                            <small><span class="label label-warning">Disable</span></small>
                        @endif
                        <i class="{{ $lastDiary->emotion_icon }}">{{ $lastDiary->emotion_name }}</i> -
                        <i class="{{ $lastDiary->weather_icon }}">{{ $lastDiary->weather_name }}</i>
                    @endif
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if($lastDiary)
                        <strong><i class="fa fa-book margin-r-5"></i> Description</strong>
                        <p class="text-muted"> {{ $lastDiary->description }}</p>
                        <hr>
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Diary content</strong>
                        <p>{!! $lastDiary->content !!}</p>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
@endsection

@section('script')

@endsection
