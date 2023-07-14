<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Franco Turangan',
        //     'username' => 'francoturangan',
        //     'email' => 'turanganfranco@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // User::create([
        //     'name' => 'Admin',
        //     'username' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('admin')
        // ]);

        Post::create([
            'name' => 'Vivi P. Rantung, ST, MISD',
            'slug' => 'vivi-rantung',
            'gender' => 'Perempuan',
            'nip' => '198314162008122002',
            'email' => 'vivirantung@unima.ac.id',
            'telp' => '082191490605',
            'expertise' => 'Artificial Intelegence',
            'laststudy' => 'S2',
            'teachinghistory' => 'https://pddikti.kemdikbud.go.id/data_dosen/OTdDOTY1RTQtNkMzNS00NzA3LTg1RkUtODY4OUYyQkQ3Qjcy/E4402601-05B7-4938-B22F-6F2E1EAAB88B',
            'research' => 'https://sinta.kemdikbud.go.id/authors/profile/6003593/?view=researches',
            'communityservice' => 'https://sinta.kemdikbud.go.id/authors/profile/6003593/?view=services',
            ]);
        // Category::create([
        //     'name' => 'Artificial Intelligence',
        //     'slug' => 'artificial-intelligence'
        // ]);

        // Category::create([
        //     'name' => 'Network & Infrastructure',
        //     'slug' => 'network-and-infrastructure'
        // ]);

        // Category::create([
        //     'name' => 'Software Develompment & IOT',
        //     'slug' => 'software-develompment-and-iot'
        // ]);

        // Post::factory(1)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error itaque repellat sed ipsam. Molestias fuga ipsam ipsum doloremque at laboriosam expedita autem quaerat ducimus, fugiat cum eligendi facilis ipsa veritatis aspernatur reprehenderit adipisci animi odit in aperiam. Itaque non incidunt autem vitae magni sapiente accusamus quas, iure excepturi ducimus at repellat natus velit adipisci, similique dolorem numquam quos illo neque voluptatem nulla sunt? Iure atque dolorem reiciendis facere nam fuga soluta eveniet. Id at sint blanditiis consequatur eligendi illo dicta, officiis debitis reprehenderit architecto quo magnam adipisci, quibusdam omnis! Nam quam blanditiis esse ullam vero facere sed necessitatibus est aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error itaque repellat sed ipsam. Molestias fuga ipsam ipsum doloremque at laboriosam expedita autem quaerat ducimus, fugiat cum eligendi facilis ipsa veritatis aspernatur reprehenderit adipisci animi odit in aperiam. Itaque non incidunt autem vitae magni sapiente accusamus quas, iure excepturi ducimus at repellat natus velit adipisci, similique dolorem numquam quos illo neque voluptatem nulla sunt? Iure atque dolorem reiciendis facere nam fuga soluta eveniet. Id at sint blanditiis consequatur eligendi illo dicta, officiis debitis reprehenderit architecto quo magnam adipisci, quibusdam omnis! Nam quam blanditiis esse ullam vero facere sed necessitatibus est aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error itaque repellat sed ipsam. Molestias fuga ipsam ipsum doloremque at laboriosam expedita autem quaerat ducimus, fugiat cum eligendi facilis ipsa veritatis aspernatur reprehenderit adipisci animi odit in aperiam. Itaque non incidunt autem vitae magni sapiente accusamus quas, iure excepturi ducimus at repellat natus velit adipisci, similique dolorem numquam quos illo neque voluptatem nulla sunt? Iure atque dolorem reiciendis facere nam fuga soluta eveniet. Id at sint blanditiis consequatur eligendi illo dicta, officiis debitis reprehenderit architecto quo magnam adipisci, quibusdam omnis! Nam quam blanditiis esse ullam vero facere sed necessitatibus est aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error itaque repellat sed ipsam. Molestias fuga ipsam ipsum doloremque at laboriosam expedita autem quaerat ducimus, fugiat cum eligendi facilis ipsa veritatis aspernatur reprehenderit adipisci animi odit in aperiam. Itaque non incidunt autem vitae magni sapiente accusamus quas, iure excepturi ducimus at repellat natus velit adipisci, similique dolorem numquam quos illo neque voluptatem nulla sunt? Iure atque dolorem reiciendis facere nam fuga soluta eveniet. Id at sint blanditiis consequatur eligendi illo dicta, officiis debitis reprehenderit architecto quo magnam adipisci, quibusdam omnis! Nam quam blanditiis esse ullam vero facere sed necessitatibus est aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
