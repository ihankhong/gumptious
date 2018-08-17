<!-- contactUsMd start -->
<div class="contactUsMd">
    <div class="contactUs-box">
        <div class="contactus-icon">
            <img src="../image/contact-us-side.png" class="img-fluid" alt="">
        </div>
        <div class="sendMessage-form">
            <h5>諮詢服務</h5>
            <p class="dep">幫您選擇最合適的商品</p>
            <span class="skype-icon"><i class="fa fa-skype fa-2x" aria-hidden="true"></i></span>
            <form action="#">
                <div class="form-row">
                    <div class="col-12 mb-2">
                        <input type="text" class="form-control" placeholder="公司名稱">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="url" class="form-control" placeholder="公司網站">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="text" class="form-control" placeholder="公司地址">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="text" class="form-control" placeholder="姓名">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="text" class="form-control" placeholder="連絡電話">
                    </div>
                    <div class="col-12 mb-2">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-12 mb-2">
                        <textarea class="form-control" rows="4" placeholder="您的需求或問題"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">送出</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- contactUsMd end -->
<script>
// SKIN Select
$('.contactus-icon').click(function (){
    $(".contactUs-box").toggleClass("show");
});
</script>