

@section('content')

    <div class="row">

        <div class="col-lg-11">

            <h2>Tutoriel Laravel 9 CRUD</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ url('personnage/create') }}">Ajouter</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
     {{--       <th>fortune</th>--}}
            <th>Actions</th>

        </tr>

        @foreach ($products as $index => $product)

            <tr>
                <td>{{ $index }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                {{--<td>{{ $personnage->fortune }}</td>--}}
                <td>

                    <form action="{{ url('product/'. $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ url('product/'. $product->id) }}">Voir</a>
                        <a class="btn btn-primary" href="{{ url('product/'. $product->id .'/edit') }}">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        @endforeach
    </table>

@endsection
