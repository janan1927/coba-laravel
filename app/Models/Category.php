<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function posts() {
        return $this->hasMany(Post::class);
    }
}


// Post::create([
//     'title' => 'Judul Ketiga',
//     'slug' => 'judul-ketiga',
//     'category_id' => 3,
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, libero.',
//     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati voluptatum, est recusandae doloribus amet inventore quae minus nihil at odit officiis fugiat eum velit. Necessitatibus suscipit possimus ut quae, temporibus, id iure ipsum quod hic quam ratione labore amet! </p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati voluptatum, est recusandae doloribus amet inventore quae minus nihil at odit officiis fugiat eum velit. Necessitatibus suscipit possimus ut quae, temporibus, id iure ipsum quod hic quam ratione labore amet! </p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati voluptatum, est recusandae doloribus amet inventore quae minus nihil at odit officiis fugiat eum velit. Necessitatibus suscipit possimus ut quae, temporibus, id iure ipsum quod hic quam ratione labore amet! </p> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati voluptatum, est recusandae doloribus amet inventore quae minus nihil at odit officiis fugiat eum velit. Necessitatibus suscipit possimus ut quae, temporibus, id iure ipsum quod hic quam ratione labore amet! </p>'
// ])

// Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque obcaecati voluptatum, est recusandae doloribus amet inventore quae minus nihil at odit officiis fugiat eum velit. Necessitatibus suscipit possimus ut quae, temporibus, id iure ipsum quod hic quam ratione labore amet!