

@section('content')

    <h1>Ajouter un produit</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('product') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nom">Name :</label>
            <input type="text" class="form-control" id="name" placeholder="Entrez un name" name="name">
        </div>

        <div class="form-group mb-3">
            <label for="fortune">Price ($):</label>
            <input type="number" class="form-control" id="price" placeholder="Price" name="price">
        </div>


        <div class="form-group mb-3">

            <label for="company">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">

        </div>



      {{--  <div class="form-group mb-3">
            <label for="detail">Détail:</label>
            <textarea class="form-control" id="detail" name="detail" rows="10" placeholder="Détail"></textarea>
        </div>--}}

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection
