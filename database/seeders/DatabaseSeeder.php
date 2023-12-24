<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Dendi Paugus Sukmaya',
            'username' => 'dendipauguss',
            'email' => 'dendipauguss1111@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        // User::create([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@gmail.com',
        //     'password' => bcrypt('johndoe'),
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Information Systems',
            'slug' => 'information-systems'
        ]);

        Category::create([
            'name' => 'Android Development',
            'slug' => 'android-development'
        ]);

        Category::create([
            'name' => 'Internet For Everything',
            'slug' => 'internet-of-things'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First Post',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'author' => 'John Doe',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam aliquid magni quam consectetur at velit. Et, veritatis blanditiis. Esse dolores doloribus et sed debitis nobis natus a sint similique non molestiae voluptatibus doloremque autem possimus repellat sunt, impedit ex? </p><p>Minus necessitatibus illo mollitia aut harum corporis numquam voluptas saepe in ipsam!Nam omnis rerum laboriosam ipsa, beatae commodi incidunt non a, perspiciatis quasi quaerat quisquam veniam? Est ex, iure ratione ipsum totam optio reiciendis quia tenetur officiis doloremque facilis dolor officia veritatis, atque fuga, quisquam assumenda perspiciatis velit adipisci quibusdam at amet asperiores natus necessitatibus? Facilis pariatur aperiam perspiciatis quae! </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero alias natus, aperiam quia, animi nam blanditiis beatae nihil magnam explicabo ducimus. Id odio ipsa veritatis alias, eos iure quam incidunt quos dolore repellat! Iure eveniet in temporibus deserunt quod, quis nam magni mollitia voluptates cum architecto provident rem, reiciendis eligendi dolorem. Aut incidunt at blanditiis corrupti laboriosam? Reprehenderit incidunt iste, odio aliquam ullam perferendis. Vero eum non blanditiis dolore eius delectus possimus dolorem! Ut sequi hic ratione placeat vel molestias ab minus. Deleniti accusamus delectus pariatur, ad eius excepturi similique velit dolore qui facere iusto eum perferendis unde aliquam. Vero?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'author' => 'Jane Doe',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam aliquid magni quam consectetur at velit. Et, veritatis blanditiis. Esse dolores doloribus et sed debitis nobis natus a sint similique non molestiae voluptatibus doloremque autem possimus repellat sunt, impedit ex? </p><p>Minus necessitatibus illo mollitia aut harum corporis numquam voluptas saepe in ipsam!Nam omnis rerum laboriosam ipsa, beatae commodi incidunt non a, perspiciatis quasi quaerat quisquam veniam? Est ex, iure ratione ipsum totam optio reiciendis quia tenetur officiis doloremque facilis dolor officia veritatis, atque fuga, quisquam assumenda perspiciatis velit adipisci quibusdam at amet asperiores natus necessitatibus? Facilis pariatur aperiam perspiciatis quae! </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero alias natus, aperiam quia, animi nam blanditiis beatae nihil magnam explicabo ducimus. Id odio ipsa veritatis alias, eos iure quam incidunt quos dolore repellat! Iure eveniet in temporibus deserunt quod, quis nam magni mollitia voluptates cum architecto provident rem, reiciendis eligendi dolorem. Aut incidunt at blanditiis corrupti laboriosam? Reprehenderit incidunt iste, odio aliquam ullam perferendis. Vero eum non blanditiis dolore eius delectus possimus dolorem! Ut sequi hic ratione placeat vel molestias ab minus. Deleniti accusamus delectus pariatur, ad eius excepturi similique velit dolore qui facere iusto eum perferendis unde aliquam. Vero?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Third Post',
        //     'user_id' => 1,
        //     'category_id' => 2,
        //     'author' => 'Dendi Paugus Sukmaya',
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam aliquid magni quam consectetur at velit. Et, veritatis blanditiis. Esse dolores doloribus et sed debitis nobis natus a sint similique non molestiae voluptatibus doloremque autem possimus repellat sunt, impedit ex? </p><p>Minus necessitatibus illo mollitia aut harum corporis numquam voluptas saepe in ipsam!Nam omnis rerum laboriosam ipsa, beatae commodi incidunt non a, perspiciatis quasi quaerat quisquam veniam? Est ex, iure ratione ipsum totam optio reiciendis quia tenetur officiis doloremque facilis dolor officia veritatis, atque fuga, quisquam assumenda perspiciatis velit adipisci quibusdam at amet asperiores natus necessitatibus? Facilis pariatur aperiam perspiciatis quae! </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero alias natus, aperiam quia, animi nam blanditiis beatae nihil magnam explicabo ducimus. Id odio ipsa veritatis alias, eos iure quam incidunt quos dolore repellat! Iure eveniet in temporibus deserunt quod, quis nam magni mollitia voluptates cum architecto provident rem, reiciendis eligendi dolorem. Aut incidunt at blanditiis corrupti laboriosam? Reprehenderit incidunt iste, odio aliquam ullam perferendis. Vero eum non blanditiis dolore eius delectus possimus dolorem! Ut sequi hic ratione placeat vel molestias ab minus. Deleniti accusamus delectus pariatur, ad eius excepturi similique velit dolore qui facere iusto eum perferendis unde aliquam. Vero?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'user_id' => 1,
        //     'category_id' => 3,
        //     'author' => 'Dendi Paugus Sukmaya',
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam aliquid magni quam consectetur at velit. Et, veritatis blanditiis. Esse dolores doloribus et sed debitis nobis natus a sint similique non molestiae voluptatibus doloremque autem possimus repellat sunt, impedit ex? </p><p>Minus necessitatibus illo mollitia aut harum corporis numquam voluptas saepe in ipsam!Nam omnis rerum laboriosam ipsa, beatae commodi incidunt non a, perspiciatis quasi quaerat quisquam veniam? Est ex, iure ratione ipsum totam optio reiciendis quia tenetur officiis doloremque facilis dolor officia veritatis, atque fuga, quisquam assumenda perspiciatis velit adipisci quibusdam at amet asperiores natus necessitatibus? Facilis pariatur aperiam perspiciatis quae! </p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero alias natus, aperiam quia, animi nam blanditiis beatae nihil magnam explicabo ducimus. Id odio ipsa veritatis alias, eos iure quam incidunt quos dolore repellat! Iure eveniet in temporibus deserunt quod, quis nam magni mollitia voluptates cum architecto provident rem, reiciendis eligendi dolorem. Aut incidunt at blanditiis corrupti laboriosam? Reprehenderit incidunt iste, odio aliquam ullam perferendis. Vero eum non blanditiis dolore eius delectus possimus dolorem! Ut sequi hic ratione placeat vel molestias ab minus. Deleniti accusamus delectus pariatur, ad eius excepturi similique velit dolore qui facere iusto eum perferendis unde aliquam. Vero?</p>'
        // ]);
    }
}