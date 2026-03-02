# CLAUDE.md — cells-b2b-server プロジェクト

## プロジェクト概要
「幹細胞生搾り（Stem Cell Lysate）」のBtoB（医師・クリニック向け）専用サイト。脂肪組織由来幹細胞の破砕濾液を用いた次世代無細胞療法の情報提供・法人問い合わせ導線を構築。ALGO Inc. の独自グリッドシステム「UNIQUE Grid System」（1920px/480px基準の物理グリッド）で設計されたPHP静的サイト。

## リポジトリ・サーバー情報
| 項目 | 値 |
|------|-----|
| GitHub | stemcell-b2b |
| 本番URL | https://cells.algo-cosme.com/ |
| サーバーパス | /home/algo-inc/projects/algo-innovation |
| リモートデプロイ先 | sakura-algo:/home/algo-inc/www/cells.algo-cosme.com/cells/ |
| ローカルパス | ~/projects/cells-b2b-server/ |
| デプロイ | rsyncスクリプト（`deploy.sh` / `deploy_dry.sh`）手動実行 |
| サーバー | さくらサーバー（SSH経由rsync） |

### デプロイの仕組み
- **GitHub Actions は未設定** — 手動 rsync デプロイ
- `deploy.sh`: 本番デプロイ（rsync -avz --delete）
- `deploy_dry.sh`: ドライラン確認（rsync -avzn --delete）
- SSH設定名: `sakura-algo`（~/.ssh/config に設定が必要）
- 除外対象: `.git/`, `.DS_Store`, `deploy.sh`, `deploy_dry.sh`, `README.md`

## フォルダ構造
```
cells-b2b-server/
├── index.php              # TOPページ（ヒーロースライダー + グリッド紹介セクション）
├── concept.php            # CONCEPTページ（生搾り技術の詳細解説）
├── evidence.php           # EVIDENCEページ（特許・エビデンス・成分データ）
├── products.php           # PRODUCTSページ（点鼻用・注射用ラインナップ）
├── company.php            # COMPANYページ（会社概要）
├── blog.php               # BLOGページ（一覧・サイドバー付き）
├── contact.php            # CONTACTページ（法人フォーム・メール送信機能付き）
├── about.php              # ABOUTページ
├── about_a.php            # ABOUT別バージョン
├── work.php               # WORKページ
├── single.php             # ブログ記事詳細テンプレート
├── config.php             # サイト共通設定（会社名・住所・コピー・実績リスト）
├── components/
│   ├── header.php         # 共通ヘッダー（stickyナビ）
│   ├── footer.php         # 共通フッター（4カラム・インラインスタイル）
│   ├── breadcrumb.php     # パンくずリスト
│   └── sidebar.php        # ブログサイドバー
├── assets/
│   ├── css/
│   │   ├── main.css       # メインCSS（UNIQUE Grid System・物理ロック版）
│   │   └── reset.css      # CSSリセット
│   ├── images/            # ヒーロー画像・事業画像群
│   │   ├── hero_main.png / hero_main1.png / hero_ai.png / hero_cosme.png
│   │   ├── m7〜m15（事業カード用画像）
│   │   └── algo_logo.png / concept-visual-about.png / workspace.png
│   └── js/
│       └── script.js      # スムーススクロール・ヘッダースクロールエフェクト
├── blog/
│   └── archive-blog.php   # ブログアーカイブ
├── deploy.sh              # 本番デプロイスクリプト（rsync）
└── deploy_dry.sh          # ドライランスクリプト
```

## 技術仕様
| 項目 | 内容 |
|------|------|
| 言語 | PHP（include + フォーム処理）, HTML, CSS, JavaScript |
| グリッドシステム | UNIQUE Grid System — 1920px基準、480px単位の物理グリッド |
| CSSユニット | `.u-unit`(480px), `.u-double`(960px), `.u-4`(100%), `.h-480`, `.h-960` |
| フォント | Hiragino Mincho ProN（明朝体メイン） |
| デザインカラー | 白基調（#fff / #f9f9f9 / #f4f4f4）、テキスト #2f2f2f、サブ #777 / #999 |
| レスポンシブ | メディアクエリ（959px / 480px ブレークポイント） |
| フォーム | contact.php にPHP処理内蔵（CSRF対策・レート制限・メール送信） |
| JSフレームワーク | なし（Vanilla JS — スムーススクロール + ヘッダーエフェクト） |
| ビルドツール | なし（ソースがそのまま本番） |
| CSSキャッシュ対策 | `?v=<?php echo time(); ?>` でバスティング |

### デザイン思想
- **物理グリッド固定**: 480px × 480px のユニットを基本ブロックとし、倍幅（960px）で配置。`flex-shrink: 0` で物理サイズをロック
- **ADDRESS タグ**: 各セクションに `ADDRESS: T2-1` のような座標ラベルを表示。グリッド上の位置を視覚的に管理
- **インラインスタイル多用**: footer.php やページ固有スタイルはインラインで記述（main.cssへの依存を最小化する方針）
- **画像あり**: algo-inc-web（コーポレート）とは異なり、ヒーロー画像・事業画像を使用

## 作業ステータス
- [x] ライブサーバーからのベースラインミラー取得
- [x] GitHub リポジトリ初期化・PR #1マージ
- [x] rsyncデプロイスクリプト作成（deploy.sh / deploy_dry.sh）
- [x] TOPページ（index.php）— ヒーロースライダー + グリッドセクション
- [x] CONCEPTページ — 生搾り技術の詳細
- [x] EVIDENCEページ — 特許情報・エビデンスデータ
- [x] PRODUCTSページ — 製品ラインナップ
- [x] COMPANYページ — 会社概要
- [x] BLOGページ — 記事一覧 + サイドバー
- [x] CONTACTページ — 法人フォーム（PHP処理内蔵）
- [ ] contact.phpのメールアドレスが仮（business@example.com）→ 本番に差し替え
- [ ] GitHub Actions によるデプロイ自動化（現在は手動rsync）
- [ ] OGP・SEO meta情報の追加
- [ ] ブログ記事の実コンテンツ追加
- [ ] 画像の最適化（WebP変換・圧縮）

## よくあるトラブル・注意点
- **デプロイは手動rsync**: `./deploy.sh` で実行。必ず先に `./deploy_dry.sh` でドライラン確認すること
- **SSH設定が必要**: `~/.ssh/config` に `sakura-algo` のHost設定がないとデプロイできない
- **サーバーパスの違いに注意**: リポジトリ情報では `/home/algo-inc/projects/algo-innovation` だが、rsyncのデプロイ先は `/home/algo-inc/www/cells.algo-cosme.com/cells/`。実際のWebルートは後者
- **contact.phpのメールは仮**: `business@example.com`, `no-reply@algo-inc.example` はプレースホルダー。本番運用前に差し替え必須
- **CSSキャッシュバスティング**: `?v=<?php echo time(); ?>` を使用しているため、毎リクエストでキャッシュ無効化される。本番ではバージョン番号方式への変更を検討
- **インラインスタイルが多い**: footer.php, 各ページの`<style>`タグにスタイルが散在。修正時はmain.cssだけでなくPHPファイル内のstyleタグも確認すること
- **1920px固定レイアウト**: PCではmax-width: 1920px。それ以下の画面ではスクロールバーが出る可能性あり（959px以下はレスポンシブ対応済み）
- **config.phpは一部しか使われていない**: 設定ファイルとして存在するが、各ページは独自にコンテンツをハードコードしている箇所が多い

## 最終更新
- **日付**: 2026-03-02
- **更新者**: Hide
- **内容**: CLAUDE.md 初回作成
- **次回やること**: CONTACTメール本番差し替え、デプロイ自動化検討、ブログ記事追加

---

## 終了時ルール
Hideが「終了」「終わり」「おわり」と言ったら、以下を実行すること：
1. 作業ステータスを更新（完了したものに[x]をつける）
2. 最終更新の日付・次回やることを更新
3. ハマったポイントがあれば「よくあるトラブル」に追記
4. git add → commit → push
