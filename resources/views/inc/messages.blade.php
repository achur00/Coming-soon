<link rel="stylesheet" href="{{ asset('css/style.css') }}">



@if (count($errors) > 0)
  @foreach ($errors->all() as $error )
  <div class="container" style=" ">
  <div class="">
      <ul class="list-group list-group-flush">
          <li class="list-group-item">

            <div class="alert alert-danger">
                {{ $error }}
</li>
</ul>
</div>
</div>

  

  @endforeach
 @else

 @endif
 
 
 
 
 @if (session('success'))
 <div class="alert alert-success block container"> 
    <h1 class="lead container block">{{ session('success') }}</h1></div>
    
 @endif

 @if (session('errors'))
 <div class="alert alert-danger block container">  
    <h1 class="lead container block">   {{ session('error') }}</h1>
 </div>
 @endif