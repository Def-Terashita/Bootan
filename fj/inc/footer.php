<?php
//---------------------------------------------------------
//  表側共通フッター  |  最終更新日:2018/08/01
//---------------------------------------------------------
//
// 各ページへ遷移
//
//---------------------------------------------------------

$login = "<li><a href='". Fj_NewMember."'>新規会員登録（無料）</a></li>
          <li><a href='". Fj_LogIn."'>ログイン</a></li>";

if (isset ($_SESSION["name"]))
{
    $login = "";

}



?>

<script>
/*TOPへ戻るボタン*/
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
});
</script>

<!-- topへ戻るボタン -->
<p class="pagetop"><a href="#navi">▲</a></p>

<footer class="bg-white">
	<div>
    	<div class="clear"></div>

    	<div class="footer-colm1">
    		<div class="footer-contents">
    			<ul>
    				<li><a href="<?= Fj_CorporateInfo ?>">会社概要</a></li>
    				<li><a href="<?= Fj_PrivacyPolicy ?>">プライバシーポリシ</a></li>
    				<li><a href="<?= Fj_SecurityPolicy ?>">情報セキュリティポリシ</a></li>
    			</ul>
    		</div>
    		<div class="sp-space"></div>
    		<div class="footer-contents">
    			<ul>
                    <li><a href="<?= Fj_Staff ?>">コーディネーター</a></li>
    				<li><a href="<?= Fj_Service ?>">サービス紹介</a></li>
    				<li><a href="<?= Fj_Voice ?>">口コミ</a></li>
    			</ul>
    		</div>
    		<div class="clear sp-space"></div>
    	</div>

    	<div class="footer-colm2">
    		<div id="adress">
          <ul>
            <li id="footer-snsimg"<a href="https://twitter.com/def_tribe"><img alt="Twitterアイコン" src="<?= Fj_Img ?>Twitterアイコン.png"></a>
            <li id="footer-snsimg"<a href="https://www.instagram.com/def_tribe/?hl=ja"><img alt="インスタアイコン" src="<?= Fj_Img ?>インスタアイコン.png"></a>
            <li id="footer-snsimg"<a href="https://ja-jp.facebook.com/pages/category/Internet-Company/Def-tribe-group%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BEDef-tribe-195375853971980/"><img alt="Facebookアイコン" src="<?= Fj_Img ?>Facebookアイコン.png"></a>
    				<li id="footer-img"><a href="<?= Fj_Top ?>"><img alt="Bootanのロゴ" src="<?= Fj_Img ?>Bootan.png"></a></li>
    				<li>大阪市中央区南船場4丁目12番24号 現代心斎橋ビル5階</li>
    				<li><a href="tel:0666439305">TEL 06-6643-9305</a></li>
    			</ul>
    		</div>
    	</div>

    	<div class="clear"></div>
	</div>

</footer>
