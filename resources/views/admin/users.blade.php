@extends('default')
@section('content')
<table style="width:100%">
    @foreach($users as $user)
        @include('admin.components.admin--index')
    @endforeach
</table>
@endsection