<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVIDENCE | ALGO Inc.</title>
    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>">
    <style>
        .inner-pad-center { padding: 80px 60px; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; }
        .evidence-lead { font-size: 24px; line-height: 2.2; margin-bottom: 40px; letter-spacing: 0.1em; font-weight: bold; }
        .evidence-text { font-size: 13px; line-height: 2.2; text-align: left; max-width: 700px; color: #444; }
        .feature-list { list-style: none; padding: 0; margin-top: 30px; text-align: left; width: 100%; max-width: 700px; }
        .feature-list li { margin-bottom: 25px; padding-left: 20px; border-left: 2px solid #2f2f2f; }
        .feature-list b { display: block; font-size: 15px; margin-bottom: 5px; color: #2f2f2f; }
        .patent-card { background: #fff; padding: 40px; border: 1px solid #eee; text-align: left; width: 100%; max-width: 700px; margin-bottom: 30px; }
        .patent-no { font-size: 11px; color: #888; letter-spacing: 0.1em; display: block; margin-bottom: 10px; }
        .patent-title { font-size: 18px; font-weight: bold; margin-bottom: 15px; color: #2f2f2f; }
        .data-label { display: inline-block; background: #2f2f2f; color: #fff; font-size: 10px; padding: 2px 8px; margin-top: 15px; margin-bottom: 10px; }
    </style>
</head>
<body class="page-evidence">
<div class="algo-site">
    <?php include('components/header.php'); ?>

    <section class="grid-row" style="height: 480px;">
        <div class="u-4">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: E1 - E2 / TECHNOLOGY</div>
                <h1 style="font-size: 32px; letter-spacing: 0.4em;">EVIDENCE</h1>
                <p style="margin-top:20px; color:#888; font-size:12px; letter-spacing:0.2em;">科学的根拠と特許技術：幹細胞破砕濾液が拓く次世代の医療</p>
            </div>
        </div>
    </section>

    <section class="grid-row">
        <div class="u-double h-960 bg-light">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: E3 - B4 / MECHANISM</div>
                <h2 class="evidence-lead">細胞を使わない、細胞のチカラ。<br>「幹細胞破砕濾液」の優位性</h2>
                <p class="evidence-text">
                    本技術の中核は、脂肪組織や骨髄由来の幹細胞を物理的に破砕し、フィルター処理によって得られる「幹細胞破砕濾液（Lysate/Filtrate）」です。従来の幹細胞移植とは異なり、細胞そのものを投与しないため、画期的なメリットを有しています。
                </p>
                <ul class="feature-list">
                    <li>
                        <b>がん化リスクの回避</b>
                        生きた細胞を含まないため、腫瘍形成や拒絶反応のリスクが極めて低く抑えられます。
                    </li>
                    <li>
                        <b>高濃度の有効因子</b>
                        幹細胞が持つHSP（ヒートショックプロテイン）や成長因子などの有用タンパク質を、破砕によって高濃度に抽出・利用します。
                    </li>
                    <li>
                        <b>安定した保存と輸送</b>
                        凍結保存や製剤化が容易であり、臨床現場での取り扱いが簡便です。
                    </li>
                </ul>
            </div>
        </div>
        <div class="u-double h-960 bg-white">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: E3 - D4 / VISUALIZATION</div>
                <h3 style="font-size: 18px; margin-bottom: 30px;">Lysate Manufacturing Process</h3>
                <p class="evidence-text" style="font-size: 12px; color: #888; text-align: center;">
                    [ 物理的破砕 ] × [ 0.2μmフィルタリング ]<br>
                    ↓<br>
                    細胞核を除去し、有効成分のみを抽出した「安全かつ高濃度」な濾液
                </p>
            </div>
        </div>
    </section>

    <section class="grid-row">
        <div class="u-4 bg-soft">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: E5 - E6 / PATENT PORTFOLIO</div>
                <h2 class="evidence-lead">特許ポートフォリオと実証データ</h2>
                <p class="evidence-text" style="text-align: center; margin-bottom: 60px;">
                    当社が保有・ライセンス提供を行う技術は、以下の多岐にわたる医療・応用分野で特許を取得・出願しており、動物実験等において有意な効果が実証されています。
                </p>

                <div class="patent-card">
                    <span class="patent-no">特許公開: JP2021-116257A</span>
                    <h3 class="patent-title">下部尿路機能障害治療剤</h3>
                    <p class="evidence-text" style="font-size: 12px;">
                        脂肪由来または骨髄由来幹細胞の破砕濾液を用いた、間質性膀胱炎や過活動膀胱の治療剤。
                    </p>
                    <span class="data-label">実証データ</span>
                    <p class="evidence-text" style="font-size: 12px;">
                        間質性膀胱炎および溢流性尿失禁モデルにおいて、膀胱内への注入により排尿間隔の延長と膀胱内圧の有意な改善が確認されました。
                    </p>
                </div>

                <div class="patent-card">
                    <span class="patent-no">特許公開: JP2019-142831A</span>
                    <h3 class="patent-title">勃起不全（ED）治療剤</h3>
                    <p class="evidence-text" style="font-size: 12px;">
                        陰茎海綿体への投与により、神経性や糖尿病性のEDを改善します。
                    </p>
                    <span class="data-label">実証データ</span>
                    <p class="evidence-text" style="font-size: 12px;">
                        ラットEDモデルにおいて、海綿体への注入が陰茎内圧を有意に改善させました。既存のPDE-5阻害薬との併用で高い相乗効果が示唆されています。
                    </p>
                </div>

                <div style="margin-top: 40px;">
                    <p class="evidence-text" style="font-size: 12px; color: #888;">
                        ※その他、生殖医療・畜産領域における特許技術も保有。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include('components/footer.php'); ?>
</div>
</body>
</html>