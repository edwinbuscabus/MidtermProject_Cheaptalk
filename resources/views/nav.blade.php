<nav class="navbar navbar-expand-lg bg-dark mb-2 p-1">
    <div class="container-fluid">
    <a class="navbar-brand mb-0 h1" href="/"><i class="fa fa-headphones" aria-hidden="true"></i> CHEAPTALK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          @if (auth()->check())
          <a class="nav-link" id="s1" href="/"><i class="fa fa-fw fa-home"></i> Home</a>
          <a class="nav-link" id="s1"  href="/home"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="s1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-list" aria-hidden="true"></i> Category
            </a>
            <ul class="dropdown-menu">
              @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
              <li><a class="dropdown-item" href="{{url('categories', ['id'=>$category->id])}}">{{$category->category}}</a></li> 
              @endforeach
            </ul>
          </li>
          <a class="nav-link" id="s1" href="/authors"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
          <a class="nav-link" id="s1" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a> 

          @else
            </a>
            <ul class="dropdown-menu">
              @foreach (App\Models\Category::whereHas('posts')->get()->sortBy('category') as $category)
              <li><a class="dropdown-item" href="{{url('categories', ['id'=>$category->id])}}">{{$category->category}}</a></li> 
              @endforeach
            </ul>
          </li>
          <a class="nav-link" id="s1"  href="/login"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          <a class="nav-link" id="s1" href="/register"><i class="fa fa-registered" aria-hidden="true"></i> Register</a>
              
          @endif
          
        </div>
      </div>
    </div>
  </nav>

  <style>
    #s1{
      color: white;
    }
    
  </style>