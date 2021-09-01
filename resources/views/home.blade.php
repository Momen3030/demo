<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

   <h1> All posts </h1>
<?php
// var_dump($postsData);
?>
{{--            @dd($postsData)--}}

{{--<?php--}}
{{-- echo "<h1>  " .$postsData['post1']."</h1>";--}}
{{--?>--}}

{{--    <h2>  {{strtoupper($postsData['post3'])}}  </h2>--}}

{{--   <table class="table">--}}
{{--       <tr>--}}
{{--           <td> {{$postsData['post1']}}  </td>--}}

{{--       </tr>--}}
{{--       <tr>--}}
{{--           <td> {{$postsData['post2']}}  </td>--}}

{{--       </tr>--}}
{{--       <tr>--}}
{{--           <td> {{$postsData['post3']}}  </td>--}}
{{--       </tr>--}}
{{--       <tr>--}}
{{--           <td>--}}
{{--           @if($postsData['post4']>100)--}}
{{--           <h3> greater than 5 </h3>--}}
{{--              --}}
{{--               @elseif($postsData['post4'] ==10){--}}
{{--                   <h3> equal {{$postsData['post4']}} </h3>--}}
{{--                   <h3> equal {{$postsData['post4']}} </h3>--}}
{{--                   <h3> equal {{$postsData['post4']}} </h3>--}}
{{--                   <h3> equal {{$postsData['post4']}} </h3>--}}
{{--               }--}}
{{--               @else--}}
{{--                   <h3> value {{$postsData['post4']}} </h3>--}}
{{--               @endif--}}

{{--           </td>--}}
{{--       </tr>--}}
{{--   </table>--}}



   <table class="table">
    <tr>
        <th>index</th>
        <th> key </th>
        <th> value </th>
    </tr>
       @foreach($postsData as $key =>$val)
           <tr>
               <td> {{$loop->index}}</td>
               <td> {{$key}} </td>
               <td> {{$val}} </td>

           </tr>
       @endforeach


{{--       @forelse($postsData as $key =>$val)--}}
{{--           <tr>--}}
{{--               <td> {{$key}} </td>--}}
{{--               <td> {{$val}} </td>--}}
{{--           </tr>--}}
{{--       @empty--}}
{{--         <tr> <td> <h4> no data inside array </h4> </td> </tr>--}}
{{--       @endforelse--}}

   </table>

//coment  is not a comment
     {{--  test comment using blade santax --}}






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
