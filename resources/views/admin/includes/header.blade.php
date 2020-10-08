<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                    class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img class="brand-logo" alt="logo"
                             src="{{asset('assets/logo2.png')}}">
                        <h3 class="brand-text">LA BELLÉ</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                        class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                        class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">{{__('admin/general.hello')}},
                  <span
                      class="user-name text-bold-700">{{auth()->guard('admin')->user()->name}}</span>
                </span>
                            <span class="avatar avatar-online">
                  <img style="height: 35px;" src="{{asset('assets/avatar.jpg')}}" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href=""><i
                            class="ft-user"></i> تعديل الملف الشحصي </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('admin.logout')}}"><i class="ft-power"></i> تسجيل
                                الخروج </a>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">{{LaravelLocalization::getCurrentLocaleName() === 'Arabic' ? 'العربية' : LaravelLocalization::getCurrentLocaleName()}}</span>
                            <span class="avatar">
                                <img style="height: 35px;" src="{{asset('assets/languages.png')}}" alt="avatar"><i></i>
                            </span>
                         </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a class="dropdown-item" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <i
                                    class="ft-user"></i> {{ $properties['native'] }}
                                    </a>
                            @endforeach
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>