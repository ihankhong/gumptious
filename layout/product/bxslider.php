<div class="productSliderWrapper">
    <ul class="bxpslider">
        <li><img src="image/page/product/p1.png" class="img-fluid mx-auto d-block" alt="Product Banner 1"></li>
        <li><img src="image/page/product/p2.png" class="img-fluid mx-auto d-block" alt="Product Banner 2"></li>
        <li><img src="image/page/product/p3.png" class="img-fluid mx-auto d-block" alt="Product Banner 3"></li>
        <li><img src="image/page/product/p4.png" class="img-fluid mx-auto d-block" alt="Product Banner 4"></li>
    </ul>
    <div class="productControlWrapper">
        <div class="bx-pager d-flex flex-row">
            <div class="col">
                <a data-slide-index="0" href="#" class="d-block"><img src="image/page/product/small/p1_s.png" class="img-fluid" alt="Product Small Banner 1"></a>
            </div>
            <div class="col">
                <a data-slide-index="1" href="#" class="d-block"><img src="image/page/product/small/p2_s.png" class="img-fluid" alt="Product Small Banner 2"></a>
            </div>
            <div class="col">
                <a data-slide-index="2" href="#" class="d-block"><img src="image/page/product/small/p3_s.png" class="img-fluid" alt="Product Small Banner 3"></a>
            </div>
            <div class="col">
                <a data-slide-index="3" href="#" class="d-block"><img src="image/page/product/small/p4_s.png" class="img-fluid" alt="Product Small Banner 4"></a>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    $('.bxpslider').bxSlider({
        pagerCustom: '.bx-pager',
        controls:false,
    });
});
</script>