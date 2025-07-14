<h2>{{$job->title}}</h2>

<p>
    Hello, you have just added new job on our site.
</p>

<p>
    <a href="{{ url('/jobs/'. $job->id) }}">Here's link to Your's Job Listing.</a>
</p>
