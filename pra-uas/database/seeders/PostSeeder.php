<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, labore? Nam saepe ullam corrupti velit adipisci modi sequi facere veniam possimus vero quibusdam, debitis officiis magni, ex iste? Voluptates distinctio voluptate veniam quidem corporis harum quibusdam blanditiis unde temporibus!',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, labore? Nam saepe ullam corrupti velit adipisci modi sequi facere veniam possimus vero quibusdam, debitis officiis magni, ex iste? Voluptates distinctio voluptate veniam quidem corporis harum quibusdam blanditiis unde temporibus! Illum repellendus consequatur accusantium atque ipsa repellat consectetur. Ut aliquam mollitia maiores cumque aut est, harum optio, necessitatibus delectus atque molestias explicabo corrupti, impedit tenetur. Quis tempore voluptates quas porro, unde sapiente delectus! Necessitatibus, commodi mollitia!',
                'published_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 2,
                'title' => 'Judul Kedua',
                'slug' => 'judul-kedua',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur, similique iusto doloribus minima odio, est error, sequi vel unde reprehenderit officiis illo quia quod voluptates quae?',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis consequuntur, similique iusto doloribus minima odio, est error, sequi vel unde reprehenderit officiis illo quia quod voluptates quae? Quia quasi facere rerum et, eveniet amet. Non accusamus reiciendis vitae eligendi ea maiores assumenda suscipit, enim in dolore, corrupti perferendis ullam possimus nihil totam est, harum distinctio. Odit dolor vero illo, ad perspiciatis molestiae corporis fugiat sequi minus enim, in inventore reprehenderit earum, qui atque. Expedita, repudiandae.',
                'published_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 3,
                'title' => 'Judul Ketiga',
                'slug' => 'judul-ketiga',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magni, quod voluptas modi esse excepturi ad quam soluta fuga sint optio ex blanditiis',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi magni, quod voluptas modi esse excepturi ad quam soluta fuga sint optio ex blanditiis, voluptatum iure, possimus quisquam voluptate voluptates. Impedit nemo quas quaerat consequuntur cumque, nisi repellendus ad distinctio adipisci quod ut? Exercitationem architecto velit tenetur eligendi dolore. Neque, asperiores',
                'published_at' => Carbon::now(),
            ],
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Judul Keempat',
                'slug' => 'judul-keempat',
                'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit maxime at voluptatem, distinctio facere aspernatur ut rem voluptatibus quis doloremque architecto fugit officiis aut enim neque similique hic deleniti deserunt',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit maxime at voluptatem, distinctio facere aspernatur ut rem voluptatibus quis doloremque architecto fugit officiis aut enim neque similique hic deleniti deserunt. Odio, reiciendis quam! Animi tempore sed non eaque, aperiam assumenda quibusdam vitae quis impedit quae pariatur placeat quidem dolorum. Distinctio quibusdam perspiciatis illum quos, dolorem qui architecto soluta expedita, odit repellat quae! Quas modi dolorum quidem ut, ipsam, obcaecati vitae quod a excepturi laborum eligendi illum quibusdam commodi. Impedit unde minus voluptatibus doloribus voluptas fugit sapiente eius enim. Dolorum voluptatibus voluptatum inventore beatae ea. Pariatur tenetur ea id, accusantium nisi officia accusamus vitae labore cupiditate omnis magni cumque optio iusto doloribus doloremque voluptatum quo minima! Aut, inventore minus iusto perspiciatis pariatur quasi impedit aperiam incidunt.',
                'published_at' => Carbon::now(),
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
