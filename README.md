# wordpress_heroku

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

Wordpress 環境をHeroku上に構築するための簡単構成ツール

Heroku Buttonはあくまでサンプル挙動確認の為のもの

## ローカル環境構築

1\. ローカル環境にMySQLを用意

2\. wp-cli.ymlを編集し、管理画面設定を行う。

3\. .env.example　をコピーし`.env`を作成。DB設定を記述

4\. `make server`コマンドでサーバ構築。

## Heroku 環境向けカスタマイズ

Heroku 環境の構築で、
