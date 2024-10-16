<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        return $this->post_id . '/';
    }

    public function getPostImage()
    {
        return Storage::disk(self::DISK_NAME)->url('blog_files/' . $this->getPostFileDirectoryPath() . $this->post_image);
    }
}
