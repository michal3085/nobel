<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    public $timestamps = true;
    public $history = true;

    public const DISK_NAME = 'blog-files';

    public $fillable = [
        'author_id'.
        'post_title'.
        'post_text',
        'post_description'.
        'post_image',
        'post_author',
        'post_active',
    ];

    public function getPostFileDirectoryPath()
    {
        return '/' . $this->post_id . '/';
    }
}
