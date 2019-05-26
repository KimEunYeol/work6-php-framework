<?php /* Template_ 2.2.7 2019/01/15 03:11:31 /volume1/web/lab4.work6.kr/data/skin/admin/general.htm 000005129 */ ?>
<?php $this->print_("header",$TPL_SCP,1);?>


<div id="conf" class="bg_white">
    <nav><i class="fas fa-code-branch"></i> 설정 > 일반</nav>

    <form method="post" enctype="multipart/form-data" action="/admin/conf/put" target="ifrmh">

        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> 메타데이터</h2>
            <table>
                <colgroup>
                    <col width="180px">
    				<col>
    			</colgroup>
                <tr>
    				<th>사이트명</th>
                    <td><input type="text" name="site_name" value="<?php echo $TPL_VAR["cfg"]["ori_site_name"]?>"></td>
    			</tr>
                <tr>
    				<th>키워드</th>
                    <td><input type="text" name="site_keywords" value="<?php echo $TPL_VAR["cfg"]["site_keywords"]?>" size=80></td>
    			</tr>
                <tr>
    				<th>사이트설명</th>
                    <td><input type="text" name="site_description" value="<?php echo $TPL_VAR["cfg"]["site_description"]?>" size=80></td>
    			</tr>
                <tr>
    				<th>파비콘</th>
                    <td>
<?php if($TPL_VAR["data"]["favicon"]=='y'){?>
                        <img src="/favicon.ico" alt="favicon"><br/>
                        <label><input type="checkbox" class="checkbox" name="favicon_del" value="y"> 삭제</label><br/>
<?php }?>
                        <input type="file" name="favicon">
                        <div class="size10 green">ico 확장자, 64 x 64 (px)</div>
                    </td>
    			</tr>
                <tr>
    				<th>Open Graph Image</th>
                    <td>
<?php if($TPL_VAR["data"]["ogimage"]=='y'){?>
                        <img src="/ogimage.jpg" alt="ogimage"><br/>
                        <label><input type="checkbox" class="checkbox" name="ogimage_del" value="y"> 삭제</label><br/>
<?php }?>
                        <input type="file" name="ogimage">
                        <div class="size10 green">jpg 확장자, 800 x 800 (px)</div>
                    </td>
    			</tr>
    		</table>
        </div>


        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> 기업정보</h2>
            <table>
                <colgroup>
                    <col width="180px">
    				<col>
    			</colgroup>
                <tr>
    				<th>기업명</th>
                    <td><input type="text" name="company_name" value="<?php echo $TPL_VAR["cfg"]["company_name"]?>"></td>
    			</tr>
                <tr>
    				<th>대표</th>
                    <td><input type="text" name="company_ceo" value="<?php echo $TPL_VAR["cfg"]["company_ceo"]?>"></td>
    			</tr>
                <tr>
    				<th>주소</th>
                    <td><input type="text" name="company_addr" value="<?php echo $TPL_VAR["cfg"]["company_addr"]?>" size=80></td>
    			</tr>
                <tr>
    				<th>연락처</th>
                    <td><input type="text" name="company_tel" value="<?php echo $TPL_VAR["cfg"]["company_tel"]?>"></td>
    			</tr>
                <tr>
    				<th>이메일</th>
                    <td><input type="text" name="site_email" value="<?php echo $TPL_VAR["cfg"]["site_email"]?>"></td>
    			</tr>
                <tr>
    				<th>사업자번호</th>
                    <td><input type="text" name="company_number" value="<?php echo $TPL_VAR["cfg"]["company_number"]?>"></td>
    			</tr>
    		</table>
        </div>


        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> 웹마스터도구</h2>
            <table>
                <colgroup>
                    <col width="180px">
    				<col>
    			</colgroup>
                <tr>
    				<th>구글 키</th>
                    <td><input type="text" name="google_webmaster_code" value="<?php echo $TPL_VAR["cfg"]["google_webmaster_code"]?>" size=80 ></td>
    			</tr>
                <tr>
    				<th>네이버 키</th>
                    <td><input type="text" name="naver_webmaster_code" value="<?php echo $TPL_VAR["cfg"]["naver_webmaster_code"]?>" size=80></td>
    			</tr>
    		</table>
        </div>



        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> robots.txt</h2>
            <textarea name="robots" rows=10><?php echo $TPL_VAR["data"]["robots"]?></textarea>
        </div>

        <div class="form">
            <h2><i class="fa fa-cube" aria-hidden="true"></i> 디자인</h2>
            <table>
                <colgroup>
                    <col width="180px">
    				<col>
    			</colgroup>
                <tr>
    				<th>프론트 스킨 폴더</th>
                    <td><input type="text" name="skin" value="<?php echo $TPL_VAR["cfg"]["front_skin"]?>"></td>
    			</tr>
    		</table>
        </div>


        <div class="btn_area center">
            <button type="submit" class="button white bg_black hover_white">저장</button>
        </div>

    </form>

</div>

<?php $this->print_("footer",$TPL_SCP,1);?>