@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <p><b><span id="datetime"></span</b> ></p>

                        <script>
                            var dt = new Date();
                            document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                        </script>
                        <!-- Time -->
                        <div class="social">
                            @if($setting->facebook != null)<a class="icons-sm fb-ic" href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>@endif

                            @if($setting->twitter != null)<a class="icons-sm tw-ic" href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>@endif

                            @if($setting->instagram != null)<a class="icons-sm inst-ic" href="{{$setting->instagram}}"><i class="fa fa-instagram"> </i></a>@endif

                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logoBBC.png" height="150" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>


                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-dark">
                            <li class="dropdown menu">
                                @auth
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class ="fa fa-user"> </i><strong><h3>{{Auth::user()->name}}</h3></strong><i
                                        class="fa fa-angle-down"></i></button>
                                @endauth

                            @guest
                                <li class="ssrcss-d5c0hm-GlobalNavigationProduct-GlobalNavigationNonProductItem-GlobalNavigationAccount eki2hvo13"><a href="/login" class="ssrcss-1wrc3mj-NavigationLink-AccountLink eki2hvo10">
                                        <span class="ssrcss-q3rgld-AccountIconWrapper eki2hvo5">
                                            <svg viewBox="0 0 32 32" width="1em" height="1em" class="ssrcss-xi5oyi-StyledIcon e6m7o991" focusable="false" aria-hidden="true">
                                                <path d="M16 23c-3.3 0-5.8-2.5-5.8-5.8s2.5-5.8 5.8-5.8c3.2 0 5.8 2.5 5.8 5.8S19.2 23 16 23zm15-5.7c0-8.4-6.6-15-15-15-8.5 0-15 6.6-15 15 0 5.2 2.5 9.8 6.4 12.4 1.9-2.8 5-4.6 8.6-4.6s6.7 1.8 8.6 4.6C28.5 27 31 22.5 31 17.3z">
                                                </path>
                                            </svg>
                                        </span>
                                        <span class="ssrcss-qgttmg-AccountText eki2hvo4">Sign in</span></a></li>
                                <li><a href="/register">Register</a></li>
                            @endguest

                            @auth
                                <ul class="dropdown-menu" >
                                    @php
                                        $userRoles = Auth::user()->roles->pluck('name');
                                    @endphp

                                    @if($userRoles->contains('admin'))

                                        <li><a href="{{route('admin_home')}}"><i class="fa fa-user">Admin Panel</i></a></li>

                                    @endif

                                    <li><a href="{{route('myprofile')}}">>My Account</a></li>
                                    <li><a href="{{route('myreviews')}}">>My Reviews</a></li>
                                    <li><a href="{{route('logout')}}">>Logout</a></li>

                                </ul>
                                @endauth
                            </li>
                        </ul>


                        <ul class="nav-cta hidden-xs">

                                    <li>
                                        <div class="head-search">
                                            <form action="{{route('gethaber')}}" method="post">
                                                @csrf
                                                <!-- Input Group -->
                                                    @livewire('search')
                                                        <button type="submit" ><i class="fa fa-search"></i>Search</button>
                                            </form>
                                            @section('footerjs')
                                            @livewireScripts
                                            @endsection
                                        </div>
                                   </li>

                        </ul>


                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->
@include('home._menu')

    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->
