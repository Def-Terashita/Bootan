<?php
//---------------------------------------------------------
//  サービスページ  |  最終更新日:2018/09/19
//---------------------------------------------------------
// フリーランスJOBSのサービスの内容
//
//---------------------------------------------------------


//セッション開始
session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:');

$errmsg = array ();      		                 // エラーメッセージ
$ret    = FALSE;                                // 関数リターン値
$ret    = include_once("../inc/define.php");   // defineパス: インクルード
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
    <meta name="keywords" content="フリーランス,関西,エンジニア,プログラマ,IT">
    <meta name="description" content="フリーランスJOBSでは、税理士の紹介、保険や助成金の事など技術者の方が安心して就業できるよう様々なサービスを提供しております。">
    <title>担当者紹介 - Bootan
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

 	<link rel="stylesheet" href="<?= Fj_Common_css ?>">
 	<link rel="stylesheet" href="<?= Fj_Contents_css ?>">

    <!-- jquery -->
    <script src="<?= Fj_Jq321_js ?>"></script>
    <script src="<?= Fj_Migrate_js ?>"></script>
	<script src="<?= Fj_Scroll_js ?>"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="<?= Fj_GooglAnalytics_async ?>"></script>
	<script src="<?= Fj_GooglAnalytics ?>"></script>

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
        <!-- -ナビゲーション -->
		<?php include (FJ_Header);?>


        <!-- メインコンテンツ -->
		<div id="mainwrap">
			<div id="main">

				<div class="section innerspace contentsbox sectionmainview">
					<div class="mainvisual">
						<h3 class="mainvisualfont">
							<span class="mainvisual mainvisualenfont">コーディネーター
									</span>
						</h3>
						<span class="mainvisual mainvisualnotefont">フリーランスの皆様をサポートする担当者をご紹介いたします。</span>
					</div>
				</div>

				<!-- SERVICE1 -->
        <div class="section innerspace contentsbox descriptionboxwrap">
					<div class="descriptionbox descriptionimageleft">
						<div class="descriptionimagebox">
							<img class="descriptionimage" src="<?= Fj_Img ?>松村さん.jpg" alt="松村さん写真">
						</div>
						<div class="descriptiontextbox">
							<div class="descriptiontext">
								<p>営業担当：松村</p>
								<hr>
							</div>
							<div class="descriptiontextleft">
								<p>人間関係、お仕事関係、職場環境どんな些細な事でも相談して頂けるように心掛けています。
                <br>「残業して夜遅いから」「打ち合わせとかで忙しいかな」「土曜日は電話しない方がいいかな」そんな心配は一切無用です。電話で伝えたい時に相談できるからこそ私の存在価値があります。「今後AIに携わりたい」「ゲームを作りたい」などのご自身の希望もお伝え頂けましたら同じ方向に向かって歩きます。全てのエンジニア様が楽しく技術を磨き、私生活までもより良くなるようにお手伝い出来るよう精進します。</p>
                <p>☆趣味</p>
                <p>◇スポーツ観戦、ダーツ◇</p>
                プロ野球が大好きで夢は12球団のホームグランド回る事です。（現在4球団）
                <p>ダーツの腕前はレーティング7なので、まだまだこれからです。</p>
                </p>
							</div>
						</div>
					</div>
				</div>

				<!-- -SERVICE2 -->
				<div class="section innerspace contentsbox descriptionboxwrap">
					<div class="descriptionbox descriptionimageright">
						<div class="descriptionimagebox">
							<img class="descriptionimage" src="<?= Fj_Img ?>田村さん.jpg" alt="田村さん写真">
						</div>
						<div class="descriptiontextbox">
							<div class="descriptiontext">
								<p>営業担当：田村</p>
								<hr>
							</div>
							<div class="descriptiontextleft">
								<p>技術者様が感じている不安やストレスなどをいち早く察知し、楽しく働いて頂くためにより良い提案ができるような営業マンを目指しています。お金や時間や仕事内容、家庭など人それぞれが大事にしてる部分が違うと思うので技術者様の要望に沿う案件を探したり、積極的に何でも相談して頂けるような関係性を築き上げていけたらと考えています。
                <p>☆趣味</p>
                <p>◇音楽◇</p>
                趣味が高じてギターで作曲活動もしています。
                </p>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICE3 -->
				<div class="section innerspace contentsbox descriptionboxwrap">
					<div class="descriptionbox descriptionimageleft">
						<div class="descriptionimagebox">
							<img class="descriptionimage" src="<?= Fj_Img ?>西田さん.jpg" alt="西田さん写真">
						</div>
						<div class="descriptiontextbox">
							<div class="descriptiontext">
								<p>営業担当：西田</p>
								<hr>
							</div>
							<div class="descriptiontextleft">
								<p>技術者の方々がどういったスキルを習得していきたいかをしっかりとヒアリングを行い技術者様の立場に立って個性を最大限に活かせる営業しています。業務内容、勤怠面、スキル面、収入面、技術者さんの作るキャリアビジョンを全力でサポートし、１・３・５・１０年と理想とする自分像の目標達成を目指します。
                <p>☆趣味</p>
                <p>◇ゲーム、動画鑑賞◇</p>

                </p>
							</div>
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
