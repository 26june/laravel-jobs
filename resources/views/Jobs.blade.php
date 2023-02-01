<h1>{{$heading}}</h1>

@foreach ($jobs as $job)
    <a href={{"jobs/{$job["id"]}"}}><h2>{{$job["title"]}}</h2></a>
    <p>{{$job["Description"]}}</p>
    
@endforeach