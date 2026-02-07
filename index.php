<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALGO Inc. | 幹細胞生搾り（濾液）- 医療・美容の次世代ソリューション</title>
    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>">
    <style>
        /* 文字密度と可読性を両立させるスタイルガード */
        .inner-pad-center { 
            padding: 60px 50px; 
            height: 100%; 
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
            text-align: center; 
        }
        .content-text-rich {
            font-size: 13px;
            line-height: 2.2;
            text-align: left;
            margin-top: 25px;
            max-width: 720px;
            color: #333;
        }
        .work-desc-rich {
            font-size: 11px;
            line-height: 2.0;
            text-align: left;
            margin-top: 15px;
            color: #555;
        }
        .work-ttl { font-size: 15px; font-weight: bold; letter-spacing: 0.1em; line-height: 1.4; }
        .addr-tag { font-size: 10px; letter-spacing: 0.2em; color: #aaa; margin-bottom: 15px; text-transform: uppercase; }

        /* スライダー */
        .slider-section { width: 100%; overflow: hidden; height: 960px; background: #fff; position: relative; }
        .slides { display: flex; width: 200%; height: 100%; transition: transform 0.8s ease-in-out; }
        .slide { width: 50%; height: 100%; flex-shrink: 0; }
        
        /* 見出しスタイル */
        h1 { font-size: clamp(28px, 4vw, 44px); line-height: 1.4; font-weight: 600; }
        h2 { font-size: 24px; line-height: 1.6; font-weight: bold; margin-bottom: 10px; }
        h3 { font-size: 20px; line-height: 1.5; font-weight: bold; }

        /* --- iPhone SE / スマホ用：物理ロック解除と中央配置（追加分） --- */
        @media screen and (max-width: 480px) {
            /* 1. 高さを「固定」から「中身に合わせる」に変更 */
            .slider-section, .u-unit, .u-double, .h-480, .h-960 {
                height: auto !important;
                min-height: 380px !important; /* iPhone SEでも突き抜けない高さ */
            }

            /* 2. スマホでもメインビジュアルの高さを確保 */
            .slider-section {
                height: 75vh !important;
            }

            /* 3. 配置を「上下中央」に強制ロック */
            .inner-pad-center {
                padding: 40px 20px !important;
                display: flex !important;
                flex-direction: column !important;
                justify-content: center !important; /* 縦：中央 */
                align-items: center !important;    /* 横：中央 */
                height: 100% !important;
                text-align: center !important;
            }

            /* 4. 文字サイズの最適化（一行の溢れ防止） */
            h1 { font-size: 1.35rem !important; line-height: 1.5 !important; }
            h2 { font-size: 1.2rem !important; }
            .content-text-rich, .work-desc-rich {
                font-size: 12px !important;
                text-align: center !important;
                margin-left: auto !important;
                margin-right: auto !important;
                line-height: 1.8 !important;
            }

            /* 5. グリッドの横並びを解除 */
            .grid-row { display: block !important; }
            .u-unit, .u-double {
                width: 100% !important;
                flex: 0 0 100% !important;
                border-right: none !important;
                border-bottom: 1px solid #f0f0f0;
            }
        }
    </style>
</head>
<body class="page-index">
<div class="algo-site">

    <?php include('components/header.php'); ?>

    <section class="slider-section">
        <div class="slides" id="js-slides">
            <div class="slide bg-white">
                <div class="inner-pad-center">
                    <p class="addr-tag">ADDRESS: T1-1 / MAIN VISUAL</p>
                    <h1>培養上清の常識を覆す。<br>「幹細胞生搾り」という到達点。</h1>
                    <p class="content-text-rich" style="text-align:center;">細胞そのものを物理的に破砕し、核を除去した次世代濾液。<br>数千種の生理活性物質が、貴院の自由診療を新たなステージへ。</p>
                </div>
            </div>
            <div class="slide bg-light">
                <div class="inner-pad-center">
                    <p class="addr-tag">ADDRESS: T1-2 / VISION</p>
                    <h1>物理的破砕が解き放つ、<br>未利用の有用タンパク質。</h1>
                    <p class="content-text-rich" style="text-align:center;">従来の分泌液回収では到達できなかった濃度とキレ。<br>エビデンスに基づいた「Lysate」が、医療の選択肢を広げます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-row">
        <div class="u-unit h-960 bg-white">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-1</div>
                <h2>圧倒的な、純度。</h2>
                <p class="work-desc-rich">従来の「培養上清液」は、細胞が分泌した成分のみを回収していました。対して本製品は、幹細胞そのものを凍結融解や超音波処理によって物理的に「破砕」し、細胞内部の成分まで丸ごと抽出する「生搾り（Lysate）」製法を採用しています。これにより、分泌されたサイトカインだけでなく、通常は細胞内に留まるHSP（ヒートショックプロテイン）などの有用タンパク質をも高濃度に含有させることに成功しました。</p>
            </div>
        </div>
        <div class="u-unit h-960 bg-light">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-2</div>
                <h2>確かな、エビデンス。</h2>
                <p class="work-desc-rich">本技術は、「下部尿路機能障害」「勃起不全（ED）」「変形性膝関節症」「皮膚保護剤」など多岐にわたる分野で特許を取得・出願済みの技術に基づいています。例えば、脂肪組織由来幹細胞の破砕濾液には、創傷治癒を促進するHSP47やHSP70、抗炎症作用を持つAnnexinA6などが含まれることが確認されており、単なる培養上清とは一線を画す成分プロファイルを有しています。</p>
            </div>
        </div>
        <div class="u-double h-960 bg-soft">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-3</div>
                <h2>生搾りが、医療を変える。</h2>
                <p class="content-text-rich">
                    再生医療の現場では、「細胞移植（Cell Therapy）」の効果への期待と、コストや定着率、そして腫瘍化リスクという課題の板挟みがありました。一方で「培養上清液」は手軽ですが、効果の「キレ」に物足りなさを感じる場面も少なくありません。<br><br>
                    「幹細胞生搾り（濾液）」は、これら双方の課題を解決する第3の選択肢です。細胞そのものは含まず、しかし細胞の中身（細胞質・オルガネラ成分）を余すことなく利用することで、細胞移植に匹敵する多種多様な成長因子とエクソソームを患部に届けます。研究用試薬としての提供ですが、ED治療や難治性皮膚潰瘍など、既存薬では効果が不十分な症例に対する新たなアプローチとして、多くの臨床医から注目を集めています。
                </p>
            </div>
        </div>
    </section>

    <section class="grid-row">
        <div class="u-double h-960 bg-soft" style="border-right: 1px solid #eee;">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-4</div>
                <h2>安全性の新基準。</h2>
                <p class="content-text-rich">
                    幹細胞治療において最大の懸念は「がん化（腫瘍形成）」のリスクです。特に未分化な幹細胞や、CD133などのマーカーを持つ細胞の混入はリスク因子となり得ます。本製品は、細胞を破砕した後、0.2μm等のフィルターで精密濾過を行っています。<br><br>
                    この工程により、がん化の根本原因となる「細胞核（DNA）」や「ミトコンドリア」、そして細胞そのものを物理的に完全に除去しています。「核を含まない（Cell-nucleus Free）」という特性により、理論上、がん化のリスクを極限まで排除しました。また、製造は厳格な管理下で行われ、マイコプラズマ否定試験や滅菌処理を徹底しており、ドクターが安心して扱える品質を担保しています。
                </p>
            </div>
        </div>
        <div class="u-unit h-960 bg-white">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-5</div>
                <h3>導入クリニックの声</h3>
                <p class="work-desc-rich">「従来の上清液では反応が鈍かった患者様から、体感の違いに驚きの声をいただいています」「点鼻投与という簡便な手法でありながら、Nose-to-Brainによる中枢神経系へのアプローチが期待できる点が画期的です」<br><br>すでに導入された先生方からは、脳梗塞後遺症や神経変性疾患、難治性の痛みに対するQOL改善の事例が多く報告されており、リピート率の高さが製品力を物語っています。</p>
            </div>
        </div>
        <div class="u-unit h-960 bg-light">
            <div class="inner-pad-center">
                <div class="addr-tag">ADDRESS: T2-6</div>
                <h3>スムーズな導入</h3>
                <p class="work-desc-rich">本製品は「研究用試薬」としての取り扱いとなるため、再生医療等安全性確保法の届出は不要ですが、患者様への説明責任は重要です。当院では、弁護士監修の「同意書（承諾書）」雛形や、院内掲示用の説明資料、スタッフ向け教育マニュアルを完備しています。法的な位置づけを明確にしつつ、安全に自由診療メニューに組み込んでいただけるよう、導入から運用までトータルでサポートいたします。</p>
            </div>
        </div>
    </section>

    <section class="grid-row">
        <?php 
        $work_items = [
            ["cat"=>"LINEUP", "ttl"=>"製品ラインナップ", "txt"=>"「点鼻用」と「局所注射用」。独自の抽出技術で高濃度化. 目的に合わせて選べる2つのシステム。"],
            ["cat"=>"MECHANISM", "ttl"=>"成分・メカニズム", "txt"=>"HSP70・エクソソームの力。細胞破砕液だけに含まれる細胞内タンパク質の修復・抗炎症作用。"],
            ["cat"=>"PATENT / ED", "ttl"=>"特許技術：ED治療", "txt"=>"海綿体への直接アプローチ。PDE-5阻害薬で効果が出ない症例に対する、幹細胞濾液の特許技術。"],
            ["cat"=>"PATENT / JOINT", "ttl"=>"特許技術：疼痛・関節", "txt"=>"変形性膝関節症への応用。抗炎症タンパク質が軟骨を保護。関節内注射による疼痛緩和の可能性。"],
            ["cat"=>"PATENT / SKIN", "ttl"=>"特許技術：皮膚保護", "txt"=>"難治性潰瘍・創傷治癒。糖尿病性潰瘍など、治りにくい傷に対する組織修復促進データ。"],
            ["cat"=>"BEAUTY / AGA", "ttl"=>"美容皮膚科・AGA", "txt"=>"線維芽細胞と毛母を刺激。真皮層の再構築と育毛シグナル。美肌菌との関連についても解説。"],
            ["cat"=>"ACADEMIC", "ttl"=>"学会・論文レポート", "txt"=>"最新の学術データを公開。国内外の学会で発表された「濾液（Lysate）」に関する研究成果。"],
            ["cat"=>"FLOW", "ttl"=>"法規制・導入フロー", "txt"=>"リスク管理とコンプライアンス。研究用試薬の適正な取り扱い、同意書取得、広告規制の遵守。"]
        ];
        foreach($work_items as $item): ?>
        <div class="u-unit h-480 bg-white" style="border: 0.5px solid #f9f9f9;">
            <div class="inner-pad-center" style="padding: 40px;">
                <div class="work-cat" style="font-size: 9px; color: #999; margin-bottom: 10px;"><?php echo $item['cat']; ?></div>
                <div class="work-ttl"><?php echo $item['ttl']; ?></div>
                <p class="work-desc-rich" style="text-align: center;"><?php echo $item['txt']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <?php include('components/footer.php'); ?>

</div>

<script>
    let current = 0;
    const slides = document.getElementById('js-slides');
    if(slides) {
        setInterval(() => {
            current = (current + 1) % 2;
            slides.style.transform = `translateX(-${current * 50}%)`;
        }, 5000);
    }
</script>
</body>
</html>