<h2>Hello from blade tutorial</h2>
@include('inner')
{{10+10}}
<!--
<h3>Total friends count {count($brother)}}</h3>
if($brother == "Sadik")
    <h2>Hello Sabbir</h2>
endif

-->

<h3>Lets do some namta of 19</h3>
@for($i=1;$i<11;$i++)
    <h3>19 * {{$i}}={{19*$i}}</h3>
@endfor

<h3>Printing all friends</h3>

@foreach($friends as $friend)
    <h1>{{$friend}}</h1>
@endforeach

<!-- Take dat ain js script -->
@csrf
<script>
    var data = @json($friends);
    console.warn(data)
</script>
