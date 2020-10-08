<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

          <li class="nav-item"><a href=""><i class="la la-group"></i>
              <span class="menu-title" data-i18n="nav.dash.main">{{__('admin\side.categories')}}</span>
              <span
                  class="badge badge badge-danger badge-pill float-right mr-2">{{App\Category::count()}}</span>
          </a>
              <ul class="menu-content">
                  <li class="active"><a class="menu-item" href="{{route('admin.categories')}}"
                                        data-i18n="nav.dash.ecommerce">{{__('admin/side.show_all')}}</a>
                  </li>
                  <li><a class="menu-item" href="{{route('admin.categories.create')}}" data-i18n="nav.dash.crypto">{{__('admin/side.add_category')}}</a>
                  </li>
              </ul>
          </li>

          <li class="nav-item"><a href=""><i class="la la-tags"></i>
              <span class="menu-title" data-i18n="nav.dash.main">{{__('admin/side.products')}}</span>
              <span
                  class="badge badge badge-success badge-pill float-right mr-2">{{App\Product::count()}}</span>
          </a>
              <ul class="menu-content">
                  <li class="active"><a class="menu-item" href="{{route('admin.products')}}"
                                        data-i18n="nav.dash.ecommerce">{{__('admin\side.show_all')}} </a>
                  </li>
                  <li><a class="menu-item" href="{{route('admin.products.create')}}" data-i18n="nav.dash.crypto">{{__('admin\side.add_product')}}
              </a>
                  </li>
              </ul>
          </li>
      </ul>
  </div>
</div>
