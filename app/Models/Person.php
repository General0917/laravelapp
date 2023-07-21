<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Relations\HasOne;

/*
テーブル名を指定しない場合は、他の名前を明示的に指定しない限り、
クラス名を複数形の「スネークケース」にしたものが、テーブル名として使用される。

スネークケースURL：https://wa3.i-3-i.info/word1180.html
*/
class Person extends Model
{
    use HasFactory;

    /*「guarded」変数を配列設定することによって、id以外の、要素（カラム）のみ受け渡しが可能
       ※idカラムは「ブラックリスト」として登録される。
    */
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150',
    );

    public function getData() {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str) {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n) {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n) {
        return $query->where('age', '<=', $n);
    }

    // protected static function boot() {
    //     parent::boot();

    //     static::addGlobalScope('age', function (Builder $builder) {
    //         $builder->where('age', '>', 20);
    //     });
    // }

    protected static function boot() {
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }

    public function board(){
        // hasOneでDBを結合させる場合は、外部キー（主キーまたは、DBフィールド）を指定する！！
        return $this->hasOne('App\Models\Board', 'id');
    }

    public function boards() {
        // hasManyでDBを1対多で結合させる場合は、結合させたい外部キー（DBフィールド）を指定する。
        return $this->hasMany('App\Models\Board', 'person_id');
    }
}
