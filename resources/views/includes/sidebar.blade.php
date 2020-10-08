<div class="catagories-side-menu">
    <!-- Close Icon -->
    <div id="sideMenuClose">
        <i class="ti-close"></i>
    </div>
    <!--  Side Nav  -->
    <div class="nav-side-menu">
        <div class="menu-list">
            <h6>Categories</h6>
            <ul id="menu-content" class="menu-content collapse out">
                <li data-toggle="collapse"class="collapsed active" data-target="#women2">
                    <a href="{{route('shop.show')}}">ALL</a>
                </li>
               @isset($categories)
                 @foreach ($categories as $category)
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="{{route('category.show',$category->name)}}">{{$category->name}}</a>
                    </li>
                 @endforeach   
               @endisset
               
            </ul>
        </div>
    </div>
</div>