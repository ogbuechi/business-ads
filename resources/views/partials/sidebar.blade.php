<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
    <aside>

        <div class="widget_search">
            <form role="search" id="search-form">
                <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
            </form>
        </div>

        <div class="widget categories">
            <h4 class="widget-title">All Categories</h4>
            <ul class="categories-list">
                @foreach($cats as $cat)
                <li>
                    <a href="#">
{{--                        <i class="lni-dinner"></i>--}}
                        {{ $cat->name }}
{{--                        <span class="category-counter">(5)</span>--}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="widget">
            <h4 class="widget-title">Advertisement</h4>
            <div class="add-box">
                <img class="img-fluid" src="assets/img/img1.jpg" alt="">
            </div>
        </div>
    </aside>
</div>
