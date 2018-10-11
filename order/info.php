<div class="orderWrapper">
    <form action="../order.php?order=detail" method="post" class="needs-validation" novalidate>
        <h3 class="title">訂購人資訊</h3>
        <div class="form-group row">
            <label for="validationOrder01" class="col-sm-2 col-form-label">姓名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="validationOrder01" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="validationOrder02" class="col-sm-2 col-form-label">聯絡電話</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="validationOrder02" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="validationOrder03" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="validationOrder03" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="validationOrder04" class="col-sm-2 col-form-label">送貨地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="validationOrder04" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <div class="form-group row">
            <label for="validationOrder05" class="col-sm-2 col-form-label">公司名稱</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="validationOrder05" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <h3 class="title mt-5">發票資訊</h3>
        <div class="form-group row">
            <label for="validationOrder06" class="col-sm-2 col-form-label">統一編號</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="validationOrder06" placeholder="" required>
                <div class="invalid-feedback">請輸入正確數值</div>
            </div>
        </div>
        <h3 class="title mt-5">商品明細</h3>
        <div class="productWrapper">
            <div class="table-responsive mb-0">
                <table class="table table-striped text-center mb-0">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" width="52%">商品名稱</th>
                            <th scope="col" width="16%">單價</th>
                            <th scope="col" width="16%">數量</th>
                            <th scope="col" width="16%">小計</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <img src="image/page/order/1.png" class="mx-auto d-block" width="150" alt="Order
                                 Product">
                            </td>
                            <td class="align-middle">中空旋轉平台-NT85</td>
                            <td class="align-middle">1000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">1000</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <img src="image/page/order/2.png" class="mx-auto d-block" width="150" alt="Order
                                 Product">
                            </td>
                            <td class="align-middle">中空旋轉平台-NT60</td>
                            <td class="align-middle">1000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">1000</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <img src="image/page/order/1.png" class="mx-auto d-block" width="150" alt="Order
                                 Product">
                            </td>
                            <td class="align-middle">中空旋轉平台-NT85</td>
                            <td class="align-middle">1000</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">1000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table-summary ml-auto">
                    <tbody>
                    <tr>
                        <td scope="row" class="px-4"></td>
                        <td>商品小計：</td>
                        <td class="text-center">$3000</td>
                    </tr>
                    <tr>
                        <td scope="row" class="px-4"></td>
                        <td>稅金：</td>
                        <td class="text-center">$150</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td scope="row" colspan="2">訂單金額：</td>
                        <td class="text-center">$3150</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="btns text-center mt-5">
            <button type="submit" class="btn bg-submit px-5" role="button">確認訂購</button>
        </div>
    </form>
</div>
<script>
    (function() {
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>