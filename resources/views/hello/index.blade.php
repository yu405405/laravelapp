@extends('layouts.helloapp')

@section('title', 'Index')

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->Field4}}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copuright 2020 tuyano.
@endsection