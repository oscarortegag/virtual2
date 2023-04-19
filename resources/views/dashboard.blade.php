@extends('adminlte::page')

@section('title', 'Biblioteca de ingles')

@section('content_header')
    <h1>Libros del dia</h1>
@stop

@section('content')
<section class="content">

<div class="card card-solid">
<div class="card-body pb-0">
<div class="row">
<div class="col-md-6">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-md-6">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
</ul>
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>

</div>

<div class="card card-solid">
<div class="card-body pb-0">
<div class="row">
<div class="col-sm-6">
<div class="card bg-light d-flex flex-fill">
<div class="card-header text-muted border-bottom-0">
Digital Strategist
</div>
<div class="card-body pt-0">
<div class="row">
<div class="col-sm-6">
<h2 class="lead"><b>Nicole Pearson</b></h2>
<p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
<ul class="ml-4 mb-0 fa-ul text-muted">
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
<li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
</ul>
</div>
<div class="col-5 text-center">
<img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
</div>
</div>
</div>
<div class="card-footer">
<div class="text-right">
<a href="#" class="btn btn-sm bg-teal">
<i class="fas fa-comments"></i>
</a>
<a href="#" class="btn btn-sm btn-primary">
<i class="fas fa-user"></i> View Profile
</a>
</div>
</div>
</div>
</div>
</div>



<div class="col-sm-6">
<div class="timeline">

<div class="time-label">
<span class="bg-red">10 Feb. 2014</span>
</div>


<div>
<i class="fas fa-envelope bg-blue"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 12:05</span>
<h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
<div class="timeline-body">
Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
weebly ning heekya handango imeem plugg dopplr jibjab, movity
jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
quora plaxo ideeli hulu weebly balihoo...
</div>
<div class="timeline-footer">
<a class="btn btn-primary btn-sm">Read more</a>
<a class="btn btn-danger btn-sm">Delete</a>
</div>
</div>
</div>


<div>
<i class="fas fa-user bg-green"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
<h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
</div>
</div>


<div>
<i class="fas fa-comments bg-yellow"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
<h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
<div class="timeline-body">
Take me to your leader!
Switzerland is small and neutral!
We are more like Germany, ambitious and misunderstood!
</div>
<div class="timeline-footer">
<a class="btn btn-warning btn-sm">View comment</a>
</div>
</div>
</div>


<div class="time-label">
<span class="bg-green">3 Jan. 2014</span>
</div>


<div>
<i class="fa fa-camera bg-purple"></i>
<div class="timeline-item">
<span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
<h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
<div class="timeline-body">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
<img src="https://placehold.it/150x100" alt="...">
</div>
</div>
</div>







</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop