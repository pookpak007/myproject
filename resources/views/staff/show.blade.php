@extends('layouts.app')

@section('content')
<div class="container">
<h1>Staff #{{ $staff->id }}</h1>
<table class="table table-sm" style="width:100%">
    <tbody>
        <tr><th> ID </th><td>{{ $staff->id }}</td></tr>
        <tr><th> Name  </th><td> {{ $staff->name }} </td></tr>
        <tr><th> Age   </th><td> {{ $staff->age }} </td></tr>
        <tr><th> Salary   </th><td> {{ $staff->salary }} </td></tr>
        <tr><th> phone   </th><td> {{ $staff->phone }} </td></tr>
        <tr><th> Action   </th><td> {{ $staff->action }} </td></tr>
    </tbody>
</table>
</div>

@endsection
