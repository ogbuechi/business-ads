<section class="featured-lis section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Boosted Business Ads</h3>
                <div id="new-products" class="owl-carousel">
                    @foreach($data as $item)
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img class="img-fluid" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                    <div class="overlay">
                                    </div>
                                    <div class="btn-product bg-yellow">
                                        <a href="#">{{ $item['type'] }}</a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title"><a href="ads-details.html">{{ $item['name'] }}</a></h3>
                                    <p>{{ $item['short_desc'] }}</p>

                                    <div class="meta">
                                        <span style="color: green; font-size: 1.3em; font-weight: bold" class="pric">{{ $item['amount'] }}</span>
                                    </div>
                                    <div class="card-text">
                                        <div class="float-left">

                                            <a href="#"><i class="lni-user"></i> {{ $item['user']['name'] }}</a>
                                        </div>
                                        <div class="float-right">
                                            <div class="icon">
                                                <a href="#">
                                                    <i class="lni-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>