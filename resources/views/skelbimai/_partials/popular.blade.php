<div class="site-section bg-light">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2 class="h5 mb-4 text-black">Populiariausi skelbimai</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-12  block-13">
                <div class="owl-carousel nonloop-block-13">
                    @foreach($ads as $ad)
                        <div class="d-block d-md-flex listing vertical">
                            <a href="/skelbimas/{{$ad->id}}" class="img d-block"
                               style="background-image: url({{'/storage/'.$ad->img}})"></a>
                            <div class="lh-content">
                                <span class="category">{{$ad->kategorija}}</span>
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="/skelbimas/{{$ad->id}}">{{$ad->title}}</a></h3>
                                <p>{{$ad->description}}</p>
                                <address>{{$ad->location}}</address>
                                <p class="mb-0">
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-secondary"></span>
                                    <span class="review">(3 Atsiliepimai)</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>


        </div>
    </div>
</div>
