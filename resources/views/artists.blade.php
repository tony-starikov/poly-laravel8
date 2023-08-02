@extends('master')

@section('title', $page_info->title)

@section('main')
    <!--Main layout-->
    <main class="my-2 py-3 px-5 text-light" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">

                <div class="row" style="background-color: rgba(251, 251, 251, 0);border-radius: 25px;">

                    @foreach($artists as $artist)

                        <div class="col-lg-3 col-md-6 p-1">


                            <a href="{{ route('artist', $artist->code) }}">
                                <div class="card my-card" style="border-radius: 10px;">
                                    <img src="{{ Storage::url($artist->image) }}" class="img-fluid" style="border-radius: 10px;" />
                                    <div class="my-overlay">{{ $artist->name }}</div>
                                </div>
                            </a>

                        </div>

                    @endforeach

                </div>

            </section>

        </div>
    </main>
    <!--Main layout-->
@endsection
