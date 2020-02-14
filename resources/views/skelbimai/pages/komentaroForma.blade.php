@extends('skelbimai/main')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Komentuoti skelbimą</h1>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/komentaras/{{$ad->id}}"  method="Get" class="p-5 bg-white">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-7 mb-5"  data-aos="fade">

                        <h2 class="mb-5 text-black">Komentuokite</h2>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="subject">Vardas</label>
                                <input type="text" id="price" name="name" value="" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-area" for="subject">Komentaras</label>
                                <textarea class="form-control" id="description" name="comment" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Komentuoti" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>

    </div>

@stop


