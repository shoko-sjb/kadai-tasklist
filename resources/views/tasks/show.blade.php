@extends('layouts.app')

@section('content')

        <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
        
        <table class="table table-bordered">
            <tr>
                <th class="col-xs-2 col-ms-2 col-md-2 col-lg-2">id</th>
                <td class="col-xs-6 col-ms-6 col-md-6 col-lg-6">{{ $task -> id }}</td>
            </tr>
            <tr>
                <th class="col-xs-2 col-ms-2 col-md-2 col-lg-2">ステータス</th>
                <td class="col-xs-6 col-ms-6 col-md-6 col-lg-6">{{ $task -> status }}</td>
            </tr>
            <tr>
                <th class="col-xs-2 col-ms-2 col-md-2 col-lg-2">タスク</th>
                <td class="col-xs-6 col-ms-6 col-md-6 col-lg-6">{{ $task -> content }}</td>
            </tr>
        </table>
        
         {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
        
@endsection