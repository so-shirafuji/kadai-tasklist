@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <p>ステータス{{ $task->status }}</p>
    <p>{{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id],['class' => 'btn btn-info']) !!}


    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger'])!!}
    {!! Form::close() !!}
    
@endsection