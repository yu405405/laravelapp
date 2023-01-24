@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/person/add" method="post">
        @csrf
        <tr>
            <th>name: </th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>mail: </th>
            <td><input type="text" name="mail" value="{{old('mail')}}"></td>
        </tr>
        <tr>
            <th>age: </th>
            <td><input type="number" name="Field4" value="{{old('Field4')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="send"></td>
        </tr>
    </form>
@endsection

@section('footer')
    copuright 2020 tuyano.
@endsection