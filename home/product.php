<section class="productMd">
    <div class="container">
        <h3 class="title text-center">
            <span class="text">產品系列</span>
        </h3>
        <div id="carouselProduct" class="carousel slide" data-ride="carousel" data-interval="9000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-md-3 active">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/1.png" alt="Product Slide 1">
                        <div class="card-body">
                            <p class="card-text">90度轉向器-WS系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/2.png" alt="Product Slide 2">
                        <div class="card-body">
                            <p class="card-text">中空旋轉平台-NT系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/3.png" alt="Product Slide 3">
                        <div class="card-body">
                            <p class="card-text">多枚行星減速機-GNP系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/4.png" alt="Product Slide 4">
                        <div class="card-body">
                            <p class="card-text">多枚行星減速機-GNDU系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/1.png" alt="Product Slide 1">
                        <div class="card-body">
                            <p class="card-text">90度轉向器-WS系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/2.png" alt="Product Slide 2">
                        <div class="card-body">
                            <p class="card-text">中空旋轉平台-NT系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/3.png" alt="Product Slide 3">
                        <div class="card-body">
                            <p class="card-text">多枚行星減速機-GNP系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3">
                    <div class="card text-center">
                        <img class="card-img-top img-fluid mx-auto d-block" src="../image/page/home/product/4.png" alt="Product Slide 4">
                        <div class="card-body">
                            <p class="card-text">多枚行星減速機-GNDU系列</p>
                            <a class="btn btn-link" href="#" role="button">型錄下載</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselProduct" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselProduct" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<script>
$('#carouselProduct').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('#carouselProduct .carousel-item').length;
    
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('#carouselProduct .carousel-item').eq(i).appendTo('#carouselProduct .carousel-inner');
            }
            else {
                $('#carouselProduct .carousel-item').eq(0).appendTo('#carouselProduct .carousel-inner');
            }
        }
    }
});
</script>