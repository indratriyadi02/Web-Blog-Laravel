<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programming'
        ]);
        category::create([
            'name' => 'Web  Design',
            'slug' => 'web-design'
        ]);
        category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /// Membuat  data secara manual
        User::create([
            'name' => 'Indra Triyadi',
            'username' => 'indratriyadi',
            'email' => 'indratriyadi02@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Adi Rukmana',
        //     'email' => 'andirukmanna@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum, doloribus corrupti vel ducimus, saepe aut eos incidunt, doloremque assumenda cumque. Veniam consequatur ex, repellendus a quis harum debitis tenetur voluptatibus repellat, quia placeat natus ea beatae doloribus facere omnis totam modi reprehenderit facilis iusto quasi nostrum unde! Laudantium corporis hic itaque aut doloribus consequatur ipsa iste quis possimus, voluptate exercitationem. Maiores ab impedit nulla, ipsam alias repudiandae possimus dolor atque molestias vel laudantium libero.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum, doloribus corrupti vel ducimus, saepe aut eos incidunt, doloremque assumenda cumque. Veniam consequatur ex, repellendus a quis harum debitis tenetur voluptatibus repellat, quia placeat natus ea beatae doloribus facere omnis totam modi reprehenderit facilis iusto quasi nostrum unde! Laudantium corporis hic itaque aut doloribus consequatur ipsa iste quis possimus, voluptate exercitationem. Maiores ab impedit nulla, ipsam alias repudiandae possimus dolor atque molestias vel laudantium libero.',
        //     'category_id' => 1,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'orem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. In a accusamus cum veritatis ratione, magnam ex minima atque amet maiores accusantium recusandae? Vel harum iure quidem. Enim, labore atque! Molestias accusantium obcaecati illo optio nostrum, doloribus corrupti vel ducimus, saepe aut eos incidunt, doloremque assumenda cumque. Veniam consequatur ex, repellendus a quis harum debitis tenetur voluptatibus repellat, quia placeat natus ea beatae doloribus facere omnis totam modi reprehenderit facilis iusto quasi nostrum unde! Laudantium corporis hic itaque aut doloribus consequatur ipsa iste quis possimus, voluptate exercitationem. Maiores ab impedit nulla, ipsam alias repudiandae possimus dolor atque molestias vel laudantium libero.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}