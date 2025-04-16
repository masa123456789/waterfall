# MyProject - システム開発資料＆コード一元管理リポジトリ

このリポジトリは、ウォーターフォール開発モデルに基づき、以下の要素をすべて1つの場所で管理します。

- 要件定義書
- 基本設計書
- 詳細設計書
- テスト計画書
- 実装コード（src）
- 設計判断記録（ADR）

## 📁 ディレクトリ構成

| ディレクトリ | 内容 |
|--------------|------|
| `docs/00_requirements/` | 要件定義 |
| `docs/10_basic_design/` | 基本設計 |
| `docs/20_detailed_design/` | 詳細設計 |
| `docs/30_test_plan/` | テスト計画 |
| `docs/99_adr/` | アーキテクチャ決定記録（ADR） |
| `src/` | アプリケーションのソースコード |

## 🧭 プロジェクト概要

| 項目 | 内容 |
|------|------|
| プロジェクト名 | MyProject |
| 主な技術 | Laravel / MySQL / Vue.js |
| 開発体制 | チーム開発（設計→実装→テスト） |
| 開発手法 | ウォーターフォールモデル |

## 🚀 開発の流れ

1. `docs/00_requirements/` に要件定義を記述
2. `docs/10_basic_design/` に全体設計（構成図、ER図など）を作成
3. `docs/20_detailed_design/` に各機能の詳細設計を作成
4. `src/` に設計通りに実装
5. `docs/30_test_plan/` にテスト仕様記述、テスト実施
6. 変更が発生した場合は `docs/99_adr/` に記録

## 📌 利用上のルール

- ドキュメントは **Markdown形式で記述**
- 図は `Mermaid` または `PlantUML` で記述推奨
- 設計書の変更は Pull Request にてレビュー・承認
- 設計と実装の整合性を常に維持すること

## ✨ Tips

- Markdown記述支援： [VS CodeのMarkdown Preview Mermaid Support](https://marketplace.visualstudio.com/items?itemName=bierner.markdown-mermaid)
- ADR記法の参考: https://adr.github.io/

## 👥 コントリビューター

- 開発リーダー: あなたの名前
- 設計担当: 〇〇さん
- 実装担当: △△さん
- テスト担当: □□さん
