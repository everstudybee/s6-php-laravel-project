<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                    'photo' => '/img/t1.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Julia',
                    'surname' => 'D’Souza',
                    'specialization' => 'Family Physician',
                    'description' => 'A great specialist in his field. Come for a consultation and check your health. Don not hesitate.',
                    'photo' => '/img/t2.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Megan',
                    'surname' => 'Doe',
                    'specialization' => 'Cancer Care Specialist',
                    'description' => 'Don not let the disease develop. The tests will help you check your health. It is very important.',
                    'photo' => '/img/t3.jpg',
                    'is_active' => true,
                ],
                [
                    'name' => 'Johnathan',
                    'surname' => 'Birt',
                    'specialization' => 'General Care',
                    'description' => 'I will check your health and if there are any problems, I will prepare appropriate recommendations.',
                    'photo' => '/img/t4.jpg',
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
                ],
            ]);
        }
    }
