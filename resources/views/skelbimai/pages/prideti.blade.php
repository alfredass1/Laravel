@extends('skelbimai/main')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                <div class="row justify-content-center mt-5">
                    <div class="col-md-8 text-center">
                        <h1>Pridėti skelbimą</h1>
                        <p class="mb-0"></p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 mb-5"  data-aos="fade">

                <h2 class="mb-5 text-black">Pridėkite skelbimą</h2>

                <form action="#" class="p-5 bg-white">

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Pavadinimas</label>
                            <input type="text" id="title" class="form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Kategorija</label>
                            <select class="form-control" id="title" name="title" >
                                @foreach($categories as $category)
                                 <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-area" for="subject">Aprašymas</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Kaina</label>
                            <input type="text" id="price" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Pridėti paveikslėlį</label>
                            <input type="file" id="img" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">El.Paštas</label>
                            <input type="text" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Vieta</label>
                            <input type="text" id="location" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Telefonas</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>


