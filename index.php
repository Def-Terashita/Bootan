<?php
//---------------------------------------------------------
//  TOPページ  |  最終更新日:2018/09/14
//---------------------------------------------------------
// 各ページへ遷移
// 検索項目をPOSTでlist.phpへ送る
//---------------------------------------------------------


//セッション開始
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

//現在のセッションIDを新しく生成したものと置き換える
session_regenerate_id(TRUE);

$errmsg = array (); 		      // DBエラーメッセージ
$ret 	= FALSE;			     // 関数リターン値

// defineパス: インクルード
$ret = include_once("./fj/inc/define.php");
// 共通関数インクルード
$ret = include_once(FJ_Config);  // config.php

if ($ret === FALSE)
{
    $errmsg[] = "※設定情報ファイル 読み込みエラー！";	
}

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="フリーランス,案件,エンジニア,関西">
    <meta name="description" content="関西の案件情報に強い！フリーランスエンジニアのための案件マッチングサイト。専任のキャリアアドバイザーが豊富な案件の中からからあなたに合ったお仕事をお届けいたします。ご登録は無料です。">
    <title>Bootan ｜ 関西フリーエンジニア案件情報サイト</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
 	<link rel="stylesheet" href="<?= Fj_Common_css ?>">
 	<link rel="stylesheet" href="<?= Fj_Top_css ?>">

    <!-- jquery -->
    <script src="<?= Fj_Jq321_js ?>"></script>
    <script src="<?= Fj_Migrate_js ?>"></script>
	<script src="<?= Fj_Scroll_js ?>"></script>

    <script>
    // 検索条件をリセット
    function allclear( off ) {
    	   var ElementsCount = document.searchform.elements.length; // チェックボックスの数
    	   for( i=0 ; i<ElementsCount ; i++ ) {
    	      document.searchform.elements[i].checked = off; // OFFに
    	   }
    	   document.searchform.freeword.value = "";	// フリーワードをクリア
    	}
    </script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130283303-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-130283303-1');
	</script>

</head>


<body>
	<?php //設定情報エラー
		if (!empty($errmsg))
		{
			foreach ($errmsg as $val)
			{
				echo $val;
			}
		}
	?>
	<div id="content">

        <!-- ナビゲーション -->
		<?php include (FJ_Header);?>
		


        <!-- メインコンテンツ -->

        <div id="mainwrap">

        <!-- メイン１ -->
            <div class="top-main top-innerspace">
            	   <h1 style="text-align: center">Bootanについて</h1>
                    <p  style="text-align: center"><span class="toptext">Bootanは、関西エリアのJavaScript・HTMLの求人・案件情報提供サイトです。</span></p>
                    <p  style="text-align: center"><span class="toptext">フリーランスの皆様のスキル・希望にマッチした案件を提案します。</span></p>

        <!-- メイン２ -->
                <h2 style="text-align: center">ご利用の流れ</h2>
                <div class="service">
                    <div class="top-img"><img src="<?= Fj_Img ?>mail.png" alt="応募" width = "50" height = "50"></div>
                    <div>
                        <h3>１．お申込み</h3>
                        <p style="word-break:normal;" align="left";>メールフォームよりお申込みください。弊社より折り返しご連絡いたします。</p>
                    </div>
                </div>
                <div class="service">
                    <div class="top-img"><img src="<?= Fj_Img ?>mendan1.png" alt="面談のイメージ画像" width = "50" height ="50"></div>
                    <div>
                        <h3>２．面談</h3>
                        <p style="word-break:normal;" align="left";>専任のコーディネーターがあなたの転職プランをご提案いたします。</p>
                    </div>
                </div>
                <div class="service">
                    <div class="top-img"><img src="<?= Fj_Img ?>syokai.png" alt="成長のイメージ画像" width="50" height = "50"></div>
                    <div>
                        <h3>３．案件の紹介</h3>
                        <p style="word-break:normal;" align="left";>豊富な案件情報からあなたの能力やキャリアにふさわしい企業をご紹介いたします。</p>
                    </div>
                </div>
                <div class="service">
                    <div class="top-img"><img src="<?= Fj_Img ?>mendan2.png" alt="参画のイメージ画像" width = "50" height ="50"></div>
                    <div>
                        <h3>４．応募の面接</h3>
                        <p style="word-break:normal;" align="left";>応募、選考状況の確認、面談の日程調整などコーディネーターがすべて行います。制作時期の調整、条件の確認など制作までの下がれを徹底サポートします</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

                        <!-- メイン３ -->
            <div id="top-bg" style="padding-top: 60px">
                <div class="color-white top-catch"  id="top-catch-serch">
                    <div class="top-catch-main">Search</div>
                </div>

                <form action="<?= Fj_List ?>" method="post" name="searchform">
                    <div class="searchbox bg-white" id="searchbox">
                        <!-- 検索バー -->
                        <div class="innerspace" style="text-align: left">

                            <div class="search-clear-btn-wrap">
                                <input type="button" value="検索条件をリセット" class="btn clear-btn bg-red color-white" onclick="allclear(false);">
                            </div>

                            <div class="search-title bg-red">エリア</div>
                            <div style="margin-bottom:20px;">
                                <input type="checkbox" name="area_no[]" value="<?= Osaka ?>" id="Osaka" />
                                <label for="Osaka" class="check_css">大阪</label>
                                <input type="checkbox" name="area_no[]" value="<?= Kyoto ?>" id="Kyoto" />
                                <label for="Kyoto" class="check_css">京都</label>
                                <input type="checkbox" name="area_no[]" value="<?= Nara ?>" id="Nara" />
                                <label for="Nara" class="check_css">奈良</label>
                                <input type="checkbox" name="area_no[]" value="<?= Wakayama ?>" id="Wakayama" />
                                <label for="Wakayama" class="check_css">和歌山</label>
                                <input type="checkbox" name="area_no[]" value="<?= Hyogo ?>" id="Hyogo" />
                                <label for="Hyogo" class="check_css">兵庫</label>
                                <input type="checkbox" name="area_no[]" value="<?= Shiga ?>" id="Shiga" />
                                <label for="Shiga" class="check_css">滋賀</label>
                            </div>
                            <div>
                                <input type="checkbox" name="keyword[]" value="<?= JavaScript ?>" id="JavaScript" checked="checked"/ >
                                <label for="JavaScript" class="checkbox_hidden"></label>
                                <input type="checkbox" name="keyword[]" value="<?= HTML ?>" id="HTML" checked="checked" />
                                <label for="HTML" class="checkbox_hidden"></label>

                            <div  style="margin-top:20px;">
                                <input type="text" value="" name="freeword" placeholder="フリーワード検索（例：Java 大阪市）" class="freeword">
                            </div>

                        </div>

                        <button class="reset-btn searchbtn bg-red color-white" type="submit" name="submit">
                            <span class="searcharrow">検索</span><span class="searcharrow2"></span><span class="searcharrow2"></span><span class="searcharrow3">求人をCHECK!!</span>
                        </button>

                    </div>

                </form>
            </div>    

			<!-- メイン４ -->
			<div class="section innerspace contentsbox descriptionboxwrap">
				<div class="descriptionbox descriptionimageright">
					<div class="descriptiontextbox">
						<h3 class="descriptiontextheadline">
							<span class="headline">
								<span class="headlinekanafont">口コミ</span>
							</span>
						</h3>
						<div class="descriptiontext">
						<div class="top-img"><img src="<?= Fj_Img ?>口コミのイメージ.jpg" alt="口コミのイメージ画像" width = "300" height ="200"></div>
                    	<div>
							<p>抜粋した口コミ</p>
						</div>
						<div class="projectbtn-space projectbtn bg-yellow">
    						<a href="#top-bg" class="color-white">ほかの口コミを見る</a>
    					</div>
					</div>
				</div>
			</div>





 		</div>

        <!-- フッター -->
		<?php include (FJ_Footer);?>		

	</div>
</body>
</html>

