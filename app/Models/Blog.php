<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static $blogs = [];
    public static function getAllBlog()
    {
        self::$blogs = [
            0 => [
                'id' => 1,
                'title' => 'This is blog tile one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda aut, autem consectetur deleniti dicta dolorum fugiat fugit id impedit laudantium molestiae neque obcaecati odit pariatur repellat sed sint voluptatibus.',
                'image' => 'img.jpg',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is blog tile two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda aut, autem consectetur deleniti dicta dolorum fugiat fugit id impedit laudantium molestiae neque obcaecati odit pariatur repellat sed sint voluptatibus.',
                'image' => 'img-1.jpg',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is blog tile three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda aut, autem consectetur deleniti dicta dolorum fugiat fugit id impedit laudantium molestiae neque obcaecati odit pariatur repellat sed sint voluptatibus.',
                'image' => 'img-2.jpg',
            ],
            3 => [
                'id' => 4,
                'title' => 'This is blog tile four',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda aut, autem consectetur deleniti dicta dolorum fugiat fugit id impedit laudantium molestiae neque obcaecati odit pariatur repellat sed sint voluptatibus.',
                'image' => 'img.jpg',
            ],
        ];
        return self::$blogs;
    }
    public static function getBlogById($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
                break;
            }
        }
    }


}
