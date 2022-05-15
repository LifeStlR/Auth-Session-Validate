<head>
<link href="css/search.scss" rel="stylesheet" media="all">
<link href="css/home.css" rel="stylesheet" />
</head>
<form method="POST" action="search">
{{ csrf_field() }}
<div class="input-field first-wrap">
  <input id="search" type="text" name="search" placeholder="Search..." />
</div>
<div class="input-field third-wrap">
  <button class="btn-search" type="submit">Search</button>
</div>
</form>
@if($users)
@foreach($users as $subuser)
<ul class="card-wrapper">
@foreach($subuser as $d)
<li class="card">
    <img src='https://images.unsplash.com/photo-1611083360739-bdad6e0eb1fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHw&ixlib=rb-1.2.1&q=80&w=400' alt=''>
    <h3 class="text"><a href="">{{$d['name']}}</a></h3>
    <p style="margin-left:1rem;">{{$d['role']}}</p>
  </li>


@endforeach
</ul>
@endforeach
@endif