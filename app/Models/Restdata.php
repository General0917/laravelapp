<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    use HasFactory;

    /*今回は「restdata」という単数形複数形がわかりにくい名前であるので、
      ここでは、「$table」変数を利用して、restdataテーブルを利用するよう指定する。
    */
    protected $table = 'restdata';

    /*「guarded」変数を配列設定することによって、id以外の、要素（カラム）のみ受け渡しが可能
       ※idカラムは「ブラックリスト」として登録される。
    */
    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'required',
        'url' => 'required',
    );

    public function getData() {
        return $this->id . ':' . $this->message . '(' . $this->url . ')';
    }
}
