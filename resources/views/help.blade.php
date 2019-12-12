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
                            <label for="cp_tabfour051">質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour052" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour052">質問テキスト 質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour053" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour053">質問テキスト 質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content2">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour054" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour054">質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour055" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour055">質問テキスト 質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content3">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour056" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour056">質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour057" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour057">質問テキスト 質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            </div>
                            </div>
                            <div id="cp_content4">
                            <div class="cp_qain">
                            <div class="cp_actab">
                            <input id="cp_tabfour058" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour058">質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            <div class="cp_actab">
                            <input id="cp_tabfour059" type="checkbox" name="tabs">
                            <div class="cp_plus">+</div>
                            <label for="cp_tabfour059">質問テキスト 質問テキスト</label>
                            <div class="cp_actab-content">答えテキスト</div>
                            </div>
                            </div>
                            </div>
                            </div>
            </div>
        </div>
</div>
@endsection
