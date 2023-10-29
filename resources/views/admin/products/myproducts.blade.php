@extends('footer')
@extends('layout')
@extends('nav')

@section('content')

    <div>
        <main>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Bewerk</th>
                    <th>Verwijder</th>
                    <th>Status</th>
                </tr>
                @foreach ($products as $product)

                    <tr>
                        <td><a href="/products/{{$product->slug}}">{{$product->title}}</a></td>
                        <td><a href="/admin/products/{{$product->id}}/edit">Edit</a></td>
                        {{--                <a href="/admin/products/{{$product->id}}/delete">Delete</a>--}}
                        <td><form method="POST" action="/admin/products/{{$product->id}}">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>

                            </form></td>
                        <td>
                                <?php if($product->status == '1'){?>
                            <p>Actief</p>
                            <?php } else { ?>
                            <p>Onactief</p>
                            <?php } ?>
                        </td>
                @endforeach
            </table>
        </main>
    </div>

@endsection

