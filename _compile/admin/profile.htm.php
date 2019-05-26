<?php /* Template_ 2.2.7 2018/06/26 02:23:01 /volume1/web/lab4.work6.kr/data/skin/admin/profile.htm 000002967 */ ?>
<?php $this->print_("header",$TPL_SCP,1);?>


<div id="profile" class="bg_white">
    <nav><i class="fas fa-code-branch"></i> 프로필</nav>

    <form method="post" enctype="multipart/form-data" action="/admin/member/profile/<?php echo $TPL_VAR["sess"]["idx"]?>" target="ifrmh">
        <input type="hidden" name="password_change" value="n">

        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> <?php echo $TPL_VAR["sess"]["uid"]?></h2>
            <table>
                <colgroup>
                    <col width="180px">
    				<col>
    			</colgroup>
                <tr>
    				<th>프로필 이미지</th>
                    <td>
<?php if($TPL_VAR["sess"]["photo"]!=''){?>
                        <img src="/data/skin/admin/img/admin_photo/<?php echo $TPL_VAR["sess"]["photo"]?>" alt="<?php echo $TPL_VAR["sess"]["name"]?>"><br/>
                        <label><input type="checkbox" name="photo_del" value="y"> 삭제</label><br/>
                        <input type="hidden" name="ori_photo" value="<?php echo $TPL_VAR["sess"]["photo"]?>">
<?php }?>
                        <input type="file" name="photo">
                        <div class="size10 green">jpg 확장자, 128 x 128 (px)</div>
                    </td>
    			</tr>
                <tr>
    				<th>이름</th>
                    <td><input type="text" name="name" value="<?php echo $TPL_VAR["sess"]["name"]?>"></td>
    			</tr>
                <tr>
    				<th>패스워드</th>
                    <td>
                        <button type="button" class="button white bg_black hover_white btn_password_change">변경</button>
                        <div class="inline_block form_password_change">
                            <input type="password" name="new_upw[]" value="" placeholder="새 비밀번호">
                            <input type="password" name="new_upw[]" value="" placeholder="새 비밀번호 확인">
                        </div>
                    </td>
    			</tr>
    		</table>
        </div>



        <div class="btn_area center">
            <button type="submit" class="button white bg_black hover_white">저장</button>
        </div>

    </form>

</div>

<script>
$(function(){

    var password_change = false;

    $('.btn_password_change').click(function(){

        if(password_change){
            $('.form_password_change').removeClass('on');
            $('[name="password_change"]').val('n');
            $(this).text('변경');
            $('[name="new_upw[]"]').val('');
            password_change = false;

        }else{
            $('.form_password_change').addClass('on');
            $('[name="password_change"]').val('y');
            $(this).text('취소');
            password_change = true;
        }
    });

});
</script>

<?php $this->print_("footer",$TPL_SCP,1);?>