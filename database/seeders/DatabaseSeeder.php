<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Achmad Ifal',
            'email' => 'achmadifal@gmail.com',
            'password' => bcrypt('AchmadIfal')
        ]);

        User::create([
            'name' => 'Al Farazy',
            'email' => 'alfarazy@gmail.com',
            'password' => bcrypt('AlFarazy')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p>',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Judul Kelima',
            'slug' => 'judul-kelima',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt ex ipsam sed quibusdam cum et hic, modi necessitatibus eligendi iste dolorem omnis ipsa officiis cumque aperiam? Reprehenderit, assumenda doloribus? Atque nihil laborum quidem culpa, perferendis aspernatur doloremque cum ipsum, libero totam, voluptatibus unde quae suscipit animi ducimus numquam molestiae tenetur modi sapiente aliquam distinctio. Modi velit fugit cumque! Labore veniam dolor, nam hic, unde inventore illo ad facilis similique maiores nulla alias quae, in delectus autem ducimus id quaerat modi molestiae harum ratione ipsum ea. Ipsa iure dolores omnis aspernatur voluptates obcaecati, adipisci, tempora impedit quae aperiam, labore inventore nobis.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
