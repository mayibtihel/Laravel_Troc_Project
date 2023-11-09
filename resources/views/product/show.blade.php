

@section('content')

    <h1>Tutoriel Laravel 9 CRUD__PRODUUCT___</h1>


    <table class="table table-bordered">

        <tr>
            <th>Name:</th>
            <td>{{ $product->name }}</td>
        </tr>

        <tr>

            <th>Description:</th>
            <td>{{ $product->description }}</td>

        </tr>

        {{--<tr>

            <th>détail:</th>
            <td>{{ $personnage->detail }}</td>

        </tr>--}}

        <tr>

            <th>Price:</th>
            <td>$ {{ $product->price }}</td>

        </tr>

    </table>

@endsection
