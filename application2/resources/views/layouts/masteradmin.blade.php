<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{('Field Operation System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-md  navbar navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                    {{-- {{ ('Field Operation System') }} --}}
                    <img src="http://www.sapphire.co.th/images/logo.png">
                  
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                          <a class="nav-link nav-link active dropdown-toggle" data-toggle="dropdown" href="#">รายงานค่าใช้จ่าย</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">รายงานค่าใช้จ่ายตามหมวดต้นทุน</a>
                            <a class="dropdown-item" href="#">รายงานค่าใช้จ่ายจำแนกโครงการ</a>
                            <a class="dropdown-item" href="#">รายงานหมวดค่าใช้จ่าย</a>
                            <a class="dropdown-item" href="#">รายงานหมวดค่าใช้จ่ายตามช่วงเวลา</a>
                            <a class="dropdown-item" href="#">รายงานสรุปการเดินทาง</a>
                          </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link active "  href="#">เพิ่มโครงการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link active "  href="#">ปรับโครงการทั้งหมด</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link nav-link active "  href="#">เพิ่มTrip</a>
                            </li>
                      </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                         <ul class="nav nav-pills">
                            <li class="nav-item">
                                    <a href="{{URL::to('#')}}">  <img src="https://cdn.icon-icons.com/icons2/1879/PNG/512/iconfinder-7-avatar-2754582_120519.png" width= "50" height="50" ></a>
                                </li>
                            <li class="nav-item">
                                    <a href="{{URL::to('#')}}">  <img src="http://www.iconhot.com/icon/png/cs3-icons-murano/256/gl.png" width= "50" height="50" ></a>
                                </li>
                            </ul>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    {{ Auth::user()->surname }} 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
      
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
