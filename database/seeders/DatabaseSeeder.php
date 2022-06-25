<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run()
        {
            DB::table('doctors')->insert([
                [
                    'name' => 'Peter',
                    'surname' => 'Parker',
                    'specialization' => 'Heart Sergeon',
                    'description' => 'You can relay on our amazing features list and also our customer services will be great experience.',
                    'photo' => '/images/t1.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Julia',
                    'surname' => 'D’Souza',
                    'specialization' => 'Family Physician',
                    'description' => 'A great specialist in his field. Come for a consultation and check your health. Do not hesitate.',
                    'photo' => '/images/t2.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Megan',
                    'surname' => 'Doe',
                    'specialization' => 'Cancer Care Specialist',
                    'description' => 'Do not let the disease develop. The tests will help you check your health. It is very important.',
                    'photo' => '/images/t3.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Johnathan',
                    'surname' => 'Birt',
                    'specialization' => 'General Care',
                    'description' => 'I will check your health and if there are any problems, I will prepare appropriate recommendations.',
                    'photo' => '/images/t4.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Peter',
                    'surname' => 'Parker',
                    'specialization' => 'Heart Sergeon',
                    'description' => 'You can relay on our amazing features list and also our customer services will be great experience.',
                    'photo' => '/images/t1.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Julia',
                    'surname' => 'D’Souza',
                    'specialization' => 'Family Physician',
                    'description' => 'A great specialist in his field. Come for a consultation and check your health. Do not hesitate.',
                    'photo' => '/images/t2.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Megan',
                    'surname' => 'Doe',
                    'specialization' => 'Cancer Care Specialist',
                    'description' => 'Do not let the disease develop. The tests will help you check your health. It is very important.',
                    'photo' => '/images/t3.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Johnathan',
                    'surname' => 'Birt',
                    'specialization' => 'General Care',
                    'description' => 'I will check your health and if there are any problems, I will prepare appropriate recommendations.',
                    'photo' => '/images/t4.jpg',
                    'is_active' => true,
                ],
            ]);

            DB::table('doctors_log')->insert([
                [
                    'doctor_id' => '1',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '1',
                    'field' => 'description',
                    'action' => 'update',
                    'old_value' => 'Come up with an interesting description.',
                    'new_value' => 'You can relay on our amazing features list and also our customer services will be great experience.',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '2',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '2',
                    'field' => 'surname',
                    'action' => 'update',
                    'old_value' => 'D Souza',
                    'new_value' => 'D’Souza',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '3',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '4',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],[
                    'doctor_id' => '5',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '5',
                    'field' => 'description',
                    'action' => 'update',
                    'old_value' => 'Come up with an interesting description.',
                    'new_value' => 'You can relay on our amazing features list and also our customer services will be great experience.',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '6',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '6',
                    'field' => 'surname',
                    'action' => 'update',
                    'old_value' => 'D Souza',
                    'new_value' => 'D’Souza',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '7',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
                [
                    'doctor_id' => '8',
                    'field' => 'create_doctor',
                    'action' => 'create',
                    'old_value' => 'empty',
                    'new_value' => 'New doctor',
                    'timestamp' => date('y-m-d H:i:s'),
                ],
            ]);
            DB::table('users')->insert([
                [
                    'name' => 'admin',
                    'email' => 'admin@admin.pl',
                    'password' => '$2y$10$qm8WdnEfhOa36/RNESHMWeXaljd8/naWl5oOFjkoTH/ftVY20x8si',
                    'created_at' => date('y-m-d H:i:s'),
                    'updated_at' => date('y-m-d H:i:s'),
                ],
            ]);
        }
    }
