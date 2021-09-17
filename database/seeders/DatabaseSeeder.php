<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'aprianda',
            'username' => 'admin',
            'email' => 'admin@jdr.co.id',
            'password' => bcrypt('admin') 
        ]);

        // Product::create([
        //     'title' => 'Cha cha',
        //     'slug' => 'Cha-cha',
        //     'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum architecto aut assumenda repellendus doloribus reprehenderit deleniti suscipit reiciendis explicabo obcaecati accusantium, illo corporis earum ullam necessitatibus! Iste debitis natus ratione doloribus beatae alias aperiam officia vitae, adipisci expedita eum eveniet molestias qui deleniti reprehenderit vero ipsum. Corrupti, iste aspernatur fuga dolor ab esse eum officia, necessitatibus praesentium totam sapiente minus fugit amet numquam vitae sequi dolore. Alias, suscipit quia omnis fuga quas saepe pariatur nesciunt voluptatem a. Sit in cupiditate omnis dolorum asperiores, obcaecati, modi dignissimos repudiandae corporis perferendis illo facere numquam non, voluptatibus eum nihil maxime ut culpa? Laboriosam.',
        //     'thumbnail' => 'copra.png',
        //     // 'img-product' => ''
        // ]);
        // Product::create([
        //     'title' => 'Cha s',
        //     'slug' => 'Cha-s',
        //     'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum architecto aut assumenda repellendus doloribus reprehenderit deleniti suscipit reiciendis explicabo obcaecati accusantium, illo corporis earum ullam necessitatibus! Iste debitis natus ratione doloribus beatae alias aperiam officia vitae, adipisci expedita eum eveniet molestias qui deleniti reprehenderit vero ipsum. Corrupti, iste aspernatur fuga dolor ab esse eum officia, necessitatibus praesentium totam sapiente minus fugit amet numquam vitae sequi dolore. Alias, suscipit quia omnis fuga quas saepe pariatur nesciunt voluptatem a. Sit in cupiditate omnis dolorum asperiores, obcaecati, modi dignissimos repudiandae corporis perferendis illo facere numquam non, voluptatibus eum nihil maxime ut culpa? Laboriosam.',
        //     'thumbnail' => 'copra.png'
        // ]);
        // Product::create([
        //     'title' => 'Cha d',
        //     'slug' => 'Cha-d',
        //     'desc' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum architecto aut assumenda repellendus doloribus reprehenderit deleniti suscipit reiciendis explicabo obcaecati accusantium, illo corporis earum ullam necessitatibus! Iste debitis natus ratione doloribus beatae alias aperiam officia vitae, adipisci expedita eum eveniet molestias qui deleniti reprehenderit vero ipsum. Corrupti, iste aspernatur fuga dolor ab esse eum officia, necessitatibus praesentium totam sapiente minus fugit amet numquam vitae sequi dolore. Alias, suscipit quia omnis fuga quas saepe pariatur nesciunt voluptatem a. Sit in cupiditate omnis dolorum asperiores, obcaecati, modi dignissimos repudiandae corporis perferendis illo facere numquam non, voluptatibus eum nihil maxime ut culpa? Laboriosam.',
        //     'thumbnail' => 'copra.png'
        // ]);

    }
}
