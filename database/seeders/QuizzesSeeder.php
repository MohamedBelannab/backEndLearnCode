<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            [
                'idLangage'=> 1,
                'description' => 'Test your knowledge of Python programming with this quiz.',
                'titre' => 'Python',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'idLangage'=> 3,
                'description' => 'Test your knowledge of JavaScript programming with this quiz. ',
                'titre' => 'JavaScript',
                'created_at' => now(),
                'updated_at' => now(),
            ] 
        ]);

        DB::table('questions')->insert([
            [
                'idQuiz' => 1, // Assuming Python quiz has an ID of 1 in your 'quizzes' table
                'bodyQuestion' => 'What is the output of the following Python code?\n\nprint("Hello, World!")',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuiz' => 1,
                'bodyQuestion' => 'How do you comment out multiple lines in Python?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuiz' => 1,
                'bodyQuestion' => 'What is the purpose of the "if __name__ == "__main__":" statement in Python scripts?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuiz' => 1,
                'bodyQuestion' => 'How do you open a file in Python for writing?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuiz' => 1,
                'bodyQuestion' => 'What is the purpose of the `__init__` method in Python classes?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuiz' => 1,
                'bodyQuestion' => 'In Python, what is the difference between "==" and "is" for comparing variables?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        

        DB::table('anserwers')->insert([
            // Answers for the first question
            [
                'idQuestion' => 1,
                'body' => 'Hello, World!',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 1,
                'body' => 'Python is awesome!',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 1,
                'body' => 'Goodbye, World!',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Answers for the second question
            [
                'idQuestion' => 2,
                'body' => '# This is a comment',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 2,
                'body' => '/* This is a comment */',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 2,
                'body' => '// This is a comment',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            // Answers for the third question
            [
                'idQuestion' => 3,
                'body' => 'It is the main function of the script.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 3,
                'body' => 'It is executed when the script is imported as a module.',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 3,
                'body' => 'It is a standard Python comment.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Answers for the fourth question
            [
                'idQuestion' => 4,
                'body' => 'file = open("example.txt", "w")',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 4,
                'body' => 'file = read("example.txt", "w")',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 4,
                'body' => 'file = create("example.txt")',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Answers for the fifth question
            [
                'idQuestion' => 5,
                'body' => 'It initializes the class variables.',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 5,
                'body' => 'It defines the class methods.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 5,
                'body' => 'It is a reserved keyword in Python.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Answers for the sixth question
            [
                'idQuestion' => 6,
                'body' => '"==" compares values, "is" compares identities.',
                'correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 6,
                'body' => '"==" is used for assignment, "is" is used for comparison.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'idQuestion' => 6,
                'body' => '"==" is used for strict comparison, "is" is used for loose comparison.',
                'correct' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
