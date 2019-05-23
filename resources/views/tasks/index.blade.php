@extends('layouts.app')

@section('content')

        <h1>タスク一覧</h1>
        
        @if(count($tasks)>0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td class="col-xs-1 col-ms-1 col-md-1 col-lg-1">{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td class="col-xs-2 col-ms-2 col-md-2 col-lg-2">{!! $task->status !!}</td>
                        <td class="col-xs-6 col-ms-6 col-md-6 col-lg-6">{!! $task->content !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary']) !!}


@endsection