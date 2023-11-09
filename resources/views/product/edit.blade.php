


@section('content')


    <h1>Modifier Product</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('products/'. $product->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Entrer Name" name="name" value="{{ $product->name }}">

        </div>

        <div class="form-group mb-3">

            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Entrer Description" name="description" value="{{ $product->description }}">

        </div>

        <div class="form-group mb-3">

            <label for="fortune">Price ($):</label>
            <input type="number" class="form-control" id="price" placeholder="price" name="price" value="{{ $product->price }}">

        </div>

     {{--   <div class="form-group mb-3">

            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail">{{ $personnage->detail }}</textarea>

        </div>--}}

        <button type="submit" class="btn btn-primary">SAAAVEEE!!</button>

    </form>

@endsection
