<x-header/>

<h1>This is Number {{$num}}</h1>

{{1000 + 1024 }}

@for ($i = 10; $i <= 20; $i++);
    {{$i}}<br>
@endfor

@foreach ($name as $cricketers )
    <h2>{{$cricketers}}</h2>
@endforeach;





<script>
    var jsonformat=@json($name);
    console.log(jsonformat);
    document.write(jsonformat);
</script>