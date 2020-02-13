<div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12">


                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                        <h1 class="" data-aos="fade-up">Skelbimai visiems</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Pirk parduok ir nesuk galvos</p>
                    </div>
                </div>

                <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                    <form method="GET" action="/search-action">
                        <div class="row align-items-center">
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                <input type="text" class="form-control rounded" name="titleForSearch" placeholder="Ko ieškai?">
                            </div>
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" class="form-control rounded" name="locationForSearch" placeholder="Vieta">
                                </div>

                            </div>
                            <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control rounded" name="categoryID" id="">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->kategorija}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                <input type="submit" class="btn btn-primary btn-block rounded" value="Ieškoti">
                            </div>

                        </div>
                    </form>
                </div>

                <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
                    <div class="col-12">
                        <h2 class="d-inline-block">Populiarios paieškos:</h2>
                        <a href="#">Telefonai</a>
                        <a href="#">Automobiliai</a>
                        <a href="#">Augalai</a>
                        <a href="#">Namai</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
