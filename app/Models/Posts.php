<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Arr;
    class Posts extends Model{
         // Tipe data slug adalah string
         protected $table = 'dbs';
        //  protected $primaryKey = 'sug';
        protected $fillable = ['id','slug','title','author','body'];
    }
?>