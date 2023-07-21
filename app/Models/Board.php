<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
テーブル名を指定しない場合は、他の名前を明示的に指定しない限り、
クラス名を複数形の「スネークケース」にしたものが、テーブル名として使用される。

スネークケースURL：https://wa3.i-3-i.info/word1180.html
*/
class Board extends Model
{
    use HasFactory;

    /*「guarded」変数を配列設定することによって、id以外の、要素（カラム）のみ受け渡しが可能
       ※idカラムは「ブラックリスト」として登録される。
    */
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required',
    );

    // public function getData() {
    //     return $this->id . ': ' . $this->title;
    // }

    public function getData() {
        return $this->id . ': ' . $this->title . ' (' . $this->person->name . ')';
    }

    public function person() {
        return $this->belongsTo('App\Models\Person', 'person_id');
    }
}
