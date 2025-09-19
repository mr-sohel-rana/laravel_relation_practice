 @include('header',['name'=>'sohel fdfdfd'])

{{ 5 + 5 }}

{{'hi sona'}}

{!! "<h2> headign </h2>" !!}
{{-- {!! "<script> alert('hi') </script>" !!} --}}

@php
    $users=['sohel','sohel1','sohel2','sohel3','sohel4'];
@endphp

<ul>
     @foreach($users as $user)<br/>
{{$user}}

 @endforeach
</ul>
