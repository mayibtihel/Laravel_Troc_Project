@include('front.elements.header')
<body>
@include('front.elements.navbars')

<!--End header-->
    <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">creé un service</h1>
                                        </div>
                                        <form method="post"  action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                                         @csrf
                                            <div class="form-group">
                                            <label class="form-label-title col-sm-3 mb-0">service Name</label>
                                                <input type="text"  name="name" placeholder="nameService" />
                                                    @error('name')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label-title col-sm-3 mb-0">service description</label>
                                                <input type="text"  name="description" placeholder="description" />
                                                    @error('description')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror
                                            </div>

                                            <div class="form-group">
                                            <label class="form-label-title col-sm-3 mb-0">service price</label>

                                                <input type="text"  name="price" placeholder="price en dt" />
                                                    {{-- @error('price')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror--}}
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label-title col-sm-3 mb-0">service category</label>

                                            <select name="category" id="category">
                                                @foreach ($categorys as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>

                                            </div>
                                            <label class="form-label-title col-sm-3 mb-0">service image</label>

                                            <div class="mb-4 row align-items-center">
                                                <label
                                                    class="col-sm-3 col-form-label form-label-title">Image service</label>
                                                <div class="col-sm-9">

                                                    <input class="form-control form-choose" type="file"  name="image" placeholder="image" multiple>
                                                    {{-- @error('image')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror--}}
                                                </div>
                                            </div>

                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">ajouter service</button>
                                            </div>

                                            <p class="font-xs text-muted"><strong>Note:</strong>n'oublie pas de regler vos temp libre pour que les utlisateur puisse reserver vos service</p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@include('front.elements.footer')


@include('front.elements.footerScripts')
