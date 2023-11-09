@include('front.elements.header')
@include('front.elements.navbars')

<main class="main">
        <div class="page-header mt-30 mb-75">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">Blog & News</h1>
                            <div class="breadcrumb">
                                <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Blog & News
                            </div>
                        </div>
                        <div class="col-xl-9 text-end d-none d-xl-block">
                            <ul class="tags-list">
                                <li class="hover-up">
                                    <a href="blog-category-grid"><i class="fi-rs-cross mr-10"></i>Shopping</a>
                                </li>
                                <li class="hover-up active">
                                    <a href="blog-category-grid"><i class="fi-rs-cross mr-10"></i>Recips</a>
                                </li>
                                <li class="hover-up">
                                    <a href="blog-category-grid"><i class="fi-rs-cross mr-10"></i>Kitchen</a>
                                </li>
                                <li class="hover-up">
                                    <a href="blog-category-grid"><i class="fi-rs-cross mr-10"></i>News</a>
                                </li>
                                <li class="hover-up mr-0">
                                    <a href="blog-category-grid"><i class="fi-rs-cross mr-10"></i>Food</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-product-fillter mb-50">
                            <div class="totall-product">
                                <h2>
                                    <img class="w-36px mr-10" src="{{Vite::asset('resources/frontassets/assets/imgs/theme/icons/category-1.svg')}}" alt="" />
                                    Recips Articles
                                </h2>
                            </div>
                            <div class="sort-by-product-area">
                                <div class="sort-by-cover mr-10">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps"></i>Show:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">50</a></li>
                                            <li><a href="#">100</a></li>
                                            <li><a href="#">150</a></li>
                                            <li><a href="#">200</a></li>
                                            <li><a href="#">All</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span>Featured <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            <li><a class="active" href="#">Featured</a></li>
                                            <li><a href="#">Newest</a></li>
                                            <li><a href="#">Most comments</a></li>
                                            <li><a href="#">Release Date</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="loop-grid">
                            <div class="row">
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-1.png')}}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Side Dish</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The Intermediate Guide to Healthy Food</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-2.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Soups and Stews</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Summer Quinoa Salad Jars with Lemon Dill</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-3.png')}}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid"><i class="fi-rs-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Salad</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Caprese Chicken with Smashed Potatoes</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-4.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Dessert</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Harissa Chickpeas with Whipped Feta</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-5.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Breakfast</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Almond Butter Chocolate Chip Zucchini Bars</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-6.png')}}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid"><i class="fi-rs-picture"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Vegan</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Smoky Beans & Greens Tacos with Aji Verde</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-1.png')}}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid"><i class="fi-rs-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Side Dish</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The Intermediate Guide to Healthy Food</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-7.png')}}" alt="" />
                                        </a>
                                        <div class="entry-meta">
                                            <a class="entry-meta meta-2" href="blog-category-grid"><i class="fi-rs-play-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Gluten Free</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Sticky Ginger Rice Bowls with Pickled Veg</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-8.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Side Dish</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Creamy Garlic Sun-Dried Tomato Pasta</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-9.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Dairy Free</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The Absolute Easiest Spinach and Pizza</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-10.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Salad</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Sticky Ginger Rice Bowls with Pickled</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-1.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Soups</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The Best Soft Chocolate Chip Cookies</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-12.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">Baked Mozzarella Chicken Rolls</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-13.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid"> Dessert </a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The Best Avocado Egg Salad</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-14.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The litigants on the screen are not actors</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xl-3 col-lg-4 col-md-6 text-center hover-up mb-30 animated">
                                    <div class="post-thumb">
                                        <a href="blog-post-right">
                                            <img class="border-radius-15" src="{{Vite::asset('resources/frontassets/assets/imgs/blog/blog-15.png')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="entry-content-2">
                                        <h6 class="mb-10 font-sm"><a class="entry-meta text-muted" href="blog-category-grid">Vegetarian</a></h6>
                                        <h4 class="post-title mb-15">
                                            <a href="blog-post-right">The litigants on the screen are not actors</a>
                                        </h4>
                                        <div class="entry-meta font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on mr-10">25 April 2022</span>
                                                <span class="hit-count has-dot mr-10">126k Views</span>
                                                <span class="hit-count has-dot">4 mins read</span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@include('front.elements.footer')


@include('front.elements.footerScripts')
