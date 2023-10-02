@extends('footer')
@extends('layout')
@extends('nav')

@section('content')

    <div class="container mx-auto text-center">
        <h1 class="text-5xl font-bold">
            Crafty Creations
        </h1>
    </div>

    <main>
        @foreach($listings as $listing)

            <article>
                    <?= $listing; ?>

                <but><a href="/listings/{{$listing}}">View Listing</a></but>
            </article>
        @endforeach
    </main>
@endsection

