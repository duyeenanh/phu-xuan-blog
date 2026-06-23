<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Tạo 1 Category mẫu
        $category = Category::create([
            'name' => 'Tin tức công nghệ',
            'slug' => 'tin-tuc-cong-nghe',
        ]);

        // 2. Tạo 1 User mẫu
        $user = User::firstOrCreate([
            'email' => 'test@example.com'
        ], [
            'name' => 'Người dùng mẫu',
            'password' => bcrypt('password')
        ]);

        // 3. Tạo 1 Post mẫu
        $post = Post::create([
            'user_id' => $user->id,
            'category_id' => $category->id,
            'title' => 'Chào mừng đến với Blog Laravel',
            'slug' => 'chao-mung-den-voi-blog-laravel',
            'content' => 'Đây là nội dung bài viết đầu tiên của tôi.',
            'status' => 'published'
        ]);

        // 4. Tạo 1 Tag mẫu
        $tag = Tag::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        // 5. Gán Tag cho Post
        $post->tags()->attach($tag->id);
    }
}