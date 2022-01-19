@extends("layouts.app")
@section("title","About Page")
@section("page-content")
<p>
this is the about us page content
</p>
<ul>
<li>Item1 </li>
<li>Item2 </li>
<li>Item3 </li>

<li>Item4 </li>

</ul>
{{$message}}
{{$totalprice}}
<ul>
@foreach($items as $item)
<li>{{$item}}</li>
@endforeach
<h1>{{$id}}</h1>
</ul>
@endsection
