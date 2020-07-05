<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function get_all() {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function get_by_id($id) {
        $articles = DB::table('articles')->where('id', $id)->first();
        return $articles;
    }

    public static function save($data) {
        $judul = explode(" ",$data["judul"]);
        $slug = "";
        for ($i=0; $i <= count($judul)-1; $i++) { 
            if($i !== count($judul)-1) {
                $slug .= $judul[$i] . "-";
            } else {
                $slug .= $judul[$i];
            }
        }
        $save_article = DB::table('articles')
                        ->insert([
                            'judul' => $data["judul"],
                            'isi' => $data["isi"],
                            'slug' => $slug,
                            'tag' => $data["tag"],
                            'users_id' => 1
                            ]);
        return $save_article;
    }

    public static function update($id, $requst) {
        $judul = explode(" ",$requst["judul"]);
        $slug = "";
        for ($i=0; $i <= count($judul)-1; $i++) { 
            if($i !== count($judul)-1) {
                $slug .= $judul[$i] . "-";
            } else {
                $slug .= $judul[$i];
            }
        }
        $update = DB::table('articles')
                    ->where('id', $id)
                    ->update([
                        'judul' => $requst["judul"],
                        'isi' => $requst["isi"],
                        'slug' => $slug,
                        'tag' => $requst["tag"]
                    ]);
        return $update;
    } 

    public static function delete($id) {
        $delete = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $delete;
    }
}