@extends('layout.master')

@section('content')

<h1>Checklist App</h1>
    <form action="/checklist" method="POST">
        @csrf
        <input type="checkbox" id="checked" name="checked" value="1">
        <label for="checked">Selesai</label><br>
        <button type="submit">Tambahkan Item</button>
    </form>
@endsection

