<?php

namespace App\Models;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-postingan-pertama',
                'title' => 'Judul Postingan Pertama',
                'author' => 'Viona Diva',
                'body' => 'Ini isi postingan pertama.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-postingan-kedua',
                'title' => 'Judul Postingan Kedua',
                'author' => 'Viona Diva',
                'body' => 'Ini isi postingan kedua.'
            ]
        ];
    }
}