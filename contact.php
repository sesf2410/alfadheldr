<?php
require('conf.php');
require('functions.php');
hdr();
echo'<script src="api/api_feedback.js"></script>';



echo'
<div class="Subpage-container" dir="rtl">
        <div class="container-fluid">
            <div class="row breadcrumbs">
                <div class="container">
                    <div class="row"> <br> <br>
                        <div class="col-lg-12 text-center">
                            <a href="index.php">الرئيسية</a> / <span id="ContentPlaceHolder1_BreadcrumbTitle">يمن دواء</span>
                        </div>
                    </div>


					
                </div>
            </div>
        </div>
        <div id="ContentPlaceHolder1_DynamicContent"><div class="container Subpage-content">
<div class="row">
<div class="text-center"> <br> <br> <br>
<h1 class="bordered-h1 ">من نحن</h1>
</div>
 <br>
<div class="col-sm-12 paragraph-margin">
<p><span style="font-family:&quot;Dubai&quot;,sans-serif; font-size:16px; font-weight:700"> <br> نحن أول شركة تسويق الكتروني  في مجال الأدوية والمستلزمات الطبية تعمل في السوق اليمني من أجل تسهيل وصول المنتجات الدوائية إلى نقاط البيع في أسرع وقت وأقل كلفة . </span></p> <br>
</div>
</div>
            <div class="row">
<div class="text-center">
<h1 class="bordered-h1 ">الرؤية </h1> <br>
</div>
<p><span style="font-family:&quot;Dubai&quot;,sans-serif;font-size:16px; font-weight:700"> -	نسعى للريادة في مجال تسويق الأدوية والمستلزمات الطبية الكترونياً و أن نكون صيدلية متكاملة في صفحة واحدة . </span></p> <br>

            </div>
         
            <div class="row">
<div class="text-center">
<h1 class="bordered-h1 ">الأهداف </h1> <br>
</div>
<p><span style="font-family:&quot;Dubai&quot;,sans-serif;font-size:16px; font-weight:700">-	الربط بين الصيدليات ومخازن الأدوية وشركات ووكالات الأدوية والمستلزمات الطبية في اليمن والخارج . 
-	التسويق والترويج للشركات والأصناف المتواجدة في السوق اليمني . <br>
-	تحديث مستمر لجميع أصناف الشركات و أسعارها وجميع متغيرات سوق الأدوية في اليمن .  <br>
-	سهولة الوصول إلى جميع المعلومات المتعلقة { الشركات – الأصناف – الأسعار }.  <br>
-	تعريف العملاء للشركات الجديدة والأصناف الجديدة في السوق اليمني للأدوية والمستلزمات الطبية .  <br>
</span></p> <br>

            </div>
            </div>
        </div>
    </div>
<div id="detail-21" class="contact-form-row">
			
				<div class="col-md-7 contact-left">
				<h6 class="w3ls-title w3ls-title1">'._FORMSEND.'</h6>  
					<div class="frm col-md-6">
					   <label for="namesender">'._SENDERNAME.'</label>
					   <input class="form-control" id="namesender" name="namesender" type="text">
					</div>
					<div class="frm col-md-6">
					   <label for="emailsender">'._EMAILNAME.'</label>
					   <input class="form-control" id="emailsender" name="emailsender" type="text">
					</div>
					<div class="frm col-md-12">
					   <label for="sub_msg">'._SUBJECTMSG.'</label>
					   <input class="form-control" id="sub_msg" name="sub_msg" type="text">
					</div>

					<div class="frm col-md-12">
					   <label for="body_msg">'._BODYTEXT.'</label>
					   <textarea class="form-control" placeholder="Message" id="body_msg" name="body_msg" required=""></textarea>
					</div>
					<span id="msgbox14" style="display:none"></span> 
					<div class="frm col-md-12">
						<input value="أرسال" type="submit" onclick="feedbaksend();">
					</div>
			
				</div>';
		$query = mysql_query("SELECT * FROM setting WHERE id = 1");
		$row = mysql_fetch_array($query);
		$facebook = $row["facebook"];
		$twitter = $row["twitter"];
		$youtube = $row["youtube"];
		$googlepluse = $row["googlepluse"];
		$analytics = $row["analytics"];

				echo'				
				<div class="col-md-4 contact-right">
				<h6 class="w3ls-title w3ls-title1">'._INFOSEND.'</h6>  
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p>+967 777777777</p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row cnt-w3agile-row-mdl">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p><a href="'.$facebook.'" target="_blank">تابعونا علئ فيس بوك</a></p> 
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="cnt-w3agile-row">
						<div class="col-md-3 contact-w3icon">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
						<div class="col-md-9 contact-w3text">
							<p><a href="'.$twitter.'" target="_blank">تابعونا على تويتر</a></p> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>	
			</div>
';
ftr();
?>
