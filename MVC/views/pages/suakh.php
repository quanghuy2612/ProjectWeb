<div class="main__form-wrap" align="center">
    <div class="main_form-container">
        <form action="./SuaKH/XuLySua" method="POST">
            <h2 class="form-heading">Sửa mật khẩu</h2>

            <div class="input__group">
                <input type="text" name="username" placeholder="Tên tài khoản" readonly>
            </div>
            <div class="input__group">
                <input type="text" name="fullname" placeholder="Họ và tên" readonly>
            </div>
            <div class="input__group">
                <input type="password" name="oldpassword" placeholder="Mật khẩu cũ" required>
            </div>
            <div class="input__group">
                <input type="password" name="newpassword" placeholder="Mật khẩu mới" required>
            </div>
            <div class="input__group">
                <input type="password" name="confirmpassword" placeholder="Xác nhận mật khẩu" required>
                <p class="confirm-message"></p>
            </div>
        
            <div class="input__group-submit-btn">
                <input type="submit" value="Sửa mật khẩu" name="UpdatePassword" >
            </div>
            
        </form>
        <h1>
            <?php
                if (isset($data['Kq']))
                {
                    if ($data['Kq'])
                        echo "Sửa thành công";
                    else 
                        echo "Sửa thất bại";
                }
            ?>
        </h1>
    </div>
</div>

<script>
    var confirmInput=document.querySelector('input[name="confirmpassword"]');
    confirmInput.oninput=function(e) {
        var password=document.querySelector('input[name="newpassword"]').value;
        var confirmPassword=e.target.value;
        if (confirmPassword===password)
        {
            document.querySelector('p.confirm-message').innerText="Xác thực đúng";
        }
        else 
        {
            document.querySelector('p.confirm-message').innerText="Xác thực sai";
        }
        document.querySelector('p.confirm-message').style.display="block";
    }
</script>