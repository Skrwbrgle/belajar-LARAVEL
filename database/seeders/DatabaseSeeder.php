<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Post;
use \App\Models\Category;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Yoga Pratama Salim',
            'username' => 'yogasalim',
            'email' => 'yogadbc117087@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        // User::create([
        //     'name' => 'Gabriel Padma',
        //     'email' => 'gabee@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Graphic Designer',
            'slug' => 'graphic-designer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias repudiandae autem magnam at aperiam magni laborum facilis assumenda delectus id dolore suscipit numquam commodi aspernatur a ut rerum nesciunt eaque, hic voluptatibus! Quia, nobis. Adipisci asperiores, magni deleniti, maxime saepe mollitia porro animi labore quae doloribus doloremque iure ipsam. Maxime a, omnis officiis corporis, quae laudantium quisquam eligendi, corrupti excepturi dicta vel! Laboriosam voluptatibus earum sit? Magni libero aut, mollitia possimus quam aliquam tenetur, ut, animi eius quos dolorum et velit. Repellendus, repellat fuga officia velit non, expedita nesciunt, est vero exercitationem tempora consequuntur magnam?',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias repudiandae autem magnam at aperiam magni laborum facilis assumenda delectus id dolore suscipit numquam commodi aspernatur a ut rerum nesciunt eaque, hic voluptatibus! Quia, nobis. Adipisci asperiores, magni deleniti, maxime saepe mollitia porro animi labore quae doloribus doloremque iure ipsam. Maxime a, omnis officiis corporis, quae laudantium quisquam eligendi, corrupti excepturi dicta vel! Laboriosam voluptatibus earum sit? Magni libero aut, mollitia possimus quam aliquam tenetur, ut, animi eius quos dolorum et velit. Repellendus, repellat fuga officia velit non, expedita nesciunt, est vero exercitationem tempora consequuntur magnam?',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias repudiandae autem magnam at aperiam magni laborum facilis assumenda delectus id dolore suscipit numquam commodi aspernatur a ut rerum nesciunt eaque, hic voluptatibus! Quia, nobis. Adipisci asperiores, magni deleniti, maxime saepe mollitia porro animi labore quae doloribus doloremque iure ipsam. Maxime a, omnis officiis corporis, quae laudantium quisquam eligendi, corrupti excepturi dicta vel! Laboriosam voluptatibus earum sit? Magni libero aut, mollitia possimus quam aliquam tenetur, ut, animi eius quos dolorum et velit. Repellendus, repellat fuga officia velit non, expedita nesciunt, est vero exercitationem tempora consequuntur magnam?',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint exercitationem cumque ratione qui alias repudiandae autem magnam at aperiam magni laborum facilis assumenda delectus id dolore suscipit numquam commodi aspernatur a ut rerum nesciunt eaque, hic voluptatibus! Quia, nobis. Adipisci asperiores, magni deleniti, maxime saepe mollitia porro animi labore quae doloribus doloremque iure ipsam. Maxime a, omnis officiis corporis, quae laudantium quisquam eligendi, corrupti excepturi dicta vel! Laboriosam voluptatibus earum sit? Magni libero aut, mollitia possimus quam aliquam tenetur, ut, animi eius quos dolorum et velit. Repellendus, repellat fuga officia velit non, expedita nesciunt, est vero exercitationem tempora consequuntur magnam?',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);
    }
}
