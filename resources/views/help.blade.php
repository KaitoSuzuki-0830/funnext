@extends('layouts.app')

@section('content')
<div class="container">
        <div class="card">
            <div class="card-header" id="themetitle">よくある質問</div>
            <div class="card-body">
                    <div class="cp_qa">
                            <input id="cp_conttab1" type="radio" name="tabs" checked>
                            <label for="cp_conttab1" class="cp_tabitem">グループ</label>
                            <input id="cp_conttab2" type="radio" name="tabs">
                            <label for="cp_conttab2" class="cp_tabitem">イベント</label>
                            <input id="cp_conttab3" type="radio" name="tabs">
                            <label for="cp_conttab3" class="cp_tabitem">カテゴリー</label>
                            <input id="cp_conttab4" type="radio" name="tabs">
                            <label for="cp_conttab4" class="cp_tabitem">トラブル</label>
                            <div id="cp_content1">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour051" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour051">グループとは？</label>
                            <div class="cp_actab-content">グループとは同じ趣味や目的を持ったユーザーが集まって作られるものです。グループを作ることで新規ユーザーが参加しやすくなります。</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour052" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour052">イベントを行いたい場合はグループ作成は必須ですか？</label>
                            <div class="cp_actab-content">いいえ、イベント作成ページの際「その他」をお選びください。</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour053" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour053">グループの代表者に責任は？</label>
                            <div class="cp_actab-content">はい、ユーザーが自由にコミニティを作成、運営することはできますがRelaccumが決めているポリシーには守っていただく責任は全ユーザーにございます。</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content2">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour054" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour054">イベントとは？</label>
                            <div class="cp_actab-content">イベントとはユーザーが提案した企画です。グループ、カテゴリー、イベントの一覧から探せます。</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour055" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour055">イベントの支払いはオンラインのみですか？</label>
                            <div class="cp_actab-content">はい、ユーザー間のトラブルになる場合もございますのでオンライン決済のみになります。イベントが行われる現地での金銭トラブルは当社は一切責任をいたしません。</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content3">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour056" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour056">カテゴリーとは</label>
                            <div class="cp_actab-content">カテゴリーはユーザーが興味、関心があることをワードにしたものです。カテゴリーからグループやイベントを探すことができます。</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour057" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour057">当てはまるカテゴリーがない</label>
                            <div class="cp_actab-content">カテゴリーをユーザーが作成することも可能です。ただし、同じものや関連したワードでは作成できませんのでご了承ください</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content4">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour058" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour058">お支払い後にキャンセルしたい</label>
                            <div class="cp_actab-content">当社のルールに基づきましてイベント実行日の3日前までは全額返金し、イベント実行日の前日までは半額返金なります。また、トラブルの原因となりますのでイベント代表者などにキャンセルの一言などをよろしくお願い申し上げます。</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour059" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour059">ユーザー間で揉めています</label>
                            <div class="cp_actab-content">解決できない場合は直ちに「Contact」から当社に連絡をお願いいたします。</div>
                            </div>
                            </div>
                            </div>
                            </div>
            </div>
        </div>
</div>
@endsection
