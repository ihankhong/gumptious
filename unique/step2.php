<form action="../unique_service.php?step=31" method="post" class="needs-validation us-step2" novalidate>
    <h3 class="mt-2">載具資訊</h3>
    <div class="form-row">
        <div class="col-md-4 mt-3">
            <label for="validationUnique01">1. 附載重量(KG)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique01" placeholder="KG" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique02">2. 導距/節距(MM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique02" placeholder="MM" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique03">3. 螺桿長(MM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique03" placeholder="MM" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mt-3">
            <label for="validationUnique04">4. 螺桿直徑(MM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique04" placeholder="MM" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique05">5. 上升速度(MM/MIN)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique05" placeholder="MM/MIN" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique06">6. 選擇馬達(MM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique06" placeholder="MM" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mt-3">
            <label for="validationUnique07">7. 摩擦係數(MM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique07" placeholder="MM" maxlength="4" value="0.33" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique08">8. 加速/減速時間(MM/MIN)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique08" placeholder="MM/MIN" maxlength="4" value="0.3" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="validationUnique09">9. 選擇馬達<span class="text-danger ml-1">*</span></label>
            <select class="form-control" id="validationUnique09" required>
                <option value="">-----請選擇-----</option>
                <option value="100W">100W</option>
                <option value="400W">400W</option>
                <option value="750W">750W</option>
                <option value="1KW">1KW</option>
                <option value="2KW">2KW</option>
                <option value="2KW">2KW以上</option>
            </select>
            <div class="invalid-feedback">請選擇一個</div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mt-3">
            <label for="validationUnique10">10. 電機額定轉速(RPM)<span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="validationUnique10" placeholder="RPM" maxlength="4" required>
            <div class="invalid-feedback">請輸入數值</div>
        </div>
    </div>
    <div class="btns text-right mt-3">
        <button type="submit" class="btn bg-submit px-5" role="button">下一步 <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
    </div>
</form>
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