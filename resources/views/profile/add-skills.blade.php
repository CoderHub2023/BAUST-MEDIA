@extends('template')
@section('ADD Skills','Edit Details')
@include('layouts.public-nav')

@section('content')

<div>
    
    
    <form action="" method="post">
        <div id="myForm">

            <button type="submit" class="btn btn-success">ADD</button>
        </div>
    </form>
    <button onclick="addTextInput()" class="btn btn-secondary">Add Input Field</button>

</div>
@endsection