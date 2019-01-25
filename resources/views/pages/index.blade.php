@extends('layouts.app')

@section('content')
	<a href="{{ url('view-data') }}"><button>view</button></a>
	<a href="{{ url('add-data') }}"><button>add</button></a>
@endsection