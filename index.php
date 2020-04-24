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
            	   <h1 style="text-align: left">Bootanについて</h1>
                    <p  style="text-align: left"><span class="toptext">Bootanは、関西エリアのJavaScript・HTMLの求人・案件情報提供サイトです。</span></p>
                    <p  style="text-align: left"><span class="toptext">フリーランスの皆様のスキル・希望にマッチした案件を提案します。</span></p>
                    <p  style="text-align: left"><span class="toptext">　</span></p>
            </div>

        <!-- メイン２ -->
            <div class="top-main top-innerspace">
                <h1 style="text-align: left">ご利用の流れ</h1>
                    <div class="service">
                        <h2 class="feature-number" align="left">01</h2>
                        <h3 style="text-align: left">お申込み</h3>
                        <p style="word-break:normal;" align="left";>メールフォームよりお申込みください。弊社より折り返しご連絡いたします。</p>
                    </div>
                    <div class="service">
                        <h2 class="feature-number" align="left">02</h2>
                        <h3 style="text-align: left">面談</h3>
                        <p style="word-break:normal;" align="left";>専任のコーディネーターがあなたの転職プランをご提案いたします。</p>
                    </div>
                    <div class="service">
                        <h2 class="feature-number" align="left">03</h2>
                        <h3 style="text-align: left">案件の紹介</h3>
                        <p style="word-break:normal;" align="left";>豊富な案件情報からあなたの能力やキャリアにふさわしい企業をご紹介いたします。</p>
                    </div>
                    <div class="service">
                        <h2 class="feature-number" align="left">04</h2>
                        <h3 style="text-align: left">応募の面接</h3>
                        <p style="word-break:normal;" align="left";>応募、選考状況の確認、面談の日程調整などコーディネーターがすべて行います。制作時期の調整、条件の確認など現場へ参画するまでの流れを徹底サポートします</p>
                    </div>
                <div class="clear"></div>
            </div>
                        <!-- メイン３ -->

                <form action="<?= Fj_List ?>" method="post" name="searchform">
                    <div class="searchbox bg-white" id="searchbox"></div>
                        <!-- 検索バー -->
                        <div class="search-innerspace" style="text-align: left">
                            <h1 style="text-align: left">仕事を探す</h1>

                            <div class="search-clear-btn-wrap">
                                <input type="button" value="検索条件をリセット" class="btn clear-btn bg-white color-black" onclick="allclear(false);">
                            </div>
                            

                            <h4 style="text-align: left">エリア</h4>
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
                            <span class="searcharrow">検索</span>
                        </button>

                    </div>

                </form>

			     <!-- メイン４ -->
                <div class="top-main voice-innerspace">
                    <h1 style="text-align: left">口コミ</h1>
                        <div class="voice">
                            <div class="top-img"><img src="<?= Fj_Img ?>man.png" alt="口コミのイメージ画像" width = "100" height ="100"></div>
                        <h3>30代男性</h3>
                        <p style="word-break:normal;" align="left";>案件が豊富にあるので自分の好きな仕事ができている上、会社員の時と比べて収入が格段に上がり、毎日が充実しています。</p>
                    </div>
                    <div class="voice">
                    <div class="top-img"><img src="<?= Fj_Img ?>woman.png" alt="口コミのイメージ画像" width = "100" height ="100"></div>
                        <h3>20代女性</h3>
                        <p style="word-break:normal;" align="left";>登録後の面談では、自分の話をじっくり聞いてくださり、その後すぐにマッチする案件への面談を進めていただきました。親身な対応と仕事の迅速さに魅力を感じています。</p>
                    </div>
                    <div class="voice">
                        <div class="top-img"><img src="<?= Fj_Img ?>man.png" alt="口コミのイメージ画像" width = "100" height ="100"></div>
                        <h3>50代男性</h3>
                        <p style="word-break:normal;" align="left";>登録後すぐに案件を紹介してくださり、前職から間をあけることなく働くことができました。
フリーランス特有の仕事が途切れる不安が軽減されるので、今は目の前の仕事に思い切り打ち込めています。</p>
                    </div>

                    <div class="voice-btn-wrap">
                        <input type="button" value="他の口コミを見る" class="btn voice-btn bg-white color-black" onclick="location.href='/Bootan/fj/contents/voice.php'">
                    </div>

                    <div class="clear"></div>
            </div>







        <!-- フッター -->
		<?php include (FJ_Footer);?>
        </div>
	</div>
</body>
</html>
