<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Core extends Controller
{
    //
    protected static $articles;

    public static function addArticles($array)
    {
        return self::$articles[] = $array;
    }

    public function getArticles()
    {
//        $articles = DB::table('articles')->pluck('name');
        /*DB::table('articles')->chunk(2, function ($articles) {
            foreach ($articles as $article) {
                self::addArticles($article);
            }
        });*/
        /*$articles = DB::table('articles')->select('name', 'text')->distinct()->get();*/
//        $articles = Article::all();
        /*Article::where('id', '>', 2)->get();
    foreach ($articles as $article) {
        echo $article->name . '<br>';
    }*/
        /* $article = Article::firstOrCreate(
             [
                 'name' => 'Hello world1',
                 'text' => 'Some Text',
             ]
         );*/
//            $articles = Article::withTrashed()->get();
//            $article = Article::find(4);
//            $article->delete();
//        dump($article);
        /*foreach ($articles as $article) {
            if($article->trashed()){
                echo $article->id . '. Deleted<br>';
                $article->restore();
            }else{
                echo $article->id . '. No deleted<br>';
            }
        }*/
//        $country = Country::find(1);

//        $user = User::find(1);
//        $country = $user->country;
//        $articles = $user->articles();
//        $article = Article::find(1);

        /*foreach ($articles as $article) {
            echo $article->name . '<br>';
            echo $article->text;
            echo '<hr>';
        }*/
//        dump($article->user->name);
//        dump($articles);
        /*$user = User::find(1);
        foreach ($user->roles as $role) {
            echo $role->name . '<br>';
        }*/
//        $role = Role::find(1);
//
//        $articles = Article::all();

//        $user = User::find(1);
        /*$article = new Article([
            'name' =>'New Article777',
            'text'=> 'Some text777'
        ]);*/
//        $user->articles()->save($article);
//        $role = new Role(['name'=> 'guest']);
//        $user->roles()->save($role);

//        dump($articles);


//        dump($articles);
//        foreach ($articles as $article) {
//            echo $article->user->name;
//        }
//        dump(self::$articles);
//        $country = Country::find(1);
//        $user = User::find(2);
//
//        $country->user()->associate($user);
//        $country->save();
//        $user = User::find(2);
//        $role_id = Role::find(2)->id;
//        $user->roles()->attach($role_id);
//        $user->roles()->detach($role_id);
//        $user
//        $article = Article::find(2);
//        dump($article);
//        $article->name = 'Ogoogo';
//        echo $article->name;


    }

    public function getArticle($id)
    {
        echo $id;
    }

}
