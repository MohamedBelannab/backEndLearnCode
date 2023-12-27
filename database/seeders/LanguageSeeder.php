<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('langages')->insert([
            [
                'description' => 'Python is a high-level, general-purpose programming language known for its simplicity and readability. Guido van Rossum developed it in the late 1980s, and it has since become one of the most popular programming languages. Python supports multiple programming paradigms, including procedural, object-oriented, and functional programming.',
                'WhyLearn' => "Python's Versatility: One of the key reasons to learn Python is its versatility. It is a general-purpose programming language that can be used for a wide range of applications. Whether you're interested in web development, data science, artificial intelligence, automation, or even game development, Python has you covered.",
                'example' => "#Hello, World! example \nprint('Hello, World!')",
                'Applications' => json_encode(['Web Development', 'Data Science', 'Automation', 'Artificial Intelligence', 'Scientific Computing']),
                'Guide' => json_encode(['Introduction', 'Python Flow Control', 'Python Functions', 'Python Datatypes', 'Python Files', 'Python Object & Class', 'Python Advanced Topics', 'Python Date & Time']),
                'frameworks' => json_encode(['Django', 'Flask', 'PyTorch', 'TensorFlow', 'Pandas', 'NumPy']),
                'titre' => 'Python',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/python.svg',
                'playList' => 'PLillGF-RfqbbJYRaNqeUzAb7QY-IqBKRx',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'Python is a versatile, high-level programming language known for its readability and simplicity. Developed by Guido van Rossum, it supports multiple programming paradigms and has become widely adopted across diverse domains.',
            ],
            [
                'description' => 'Java is a versatile, object-oriented programming language known for its platform independence and strong community support. Developed by James Gosling at Sun Microsystems in the mid-1990s, Java has become one of the most widely used programming languages.',
                'WhyLearn' => "Java's Portability: One of the key reasons to learn Java is its platform independence. Java programs can run on any device that has the Java Virtual Machine (JVM), making it suitable for a wide range of applications.",
                'example' => "// Hello, World! example\npublic class HelloWorld {\n    public static void main(String[] args) {\n        System.out.println('Hello, World!');\n    }\n}",
                'Applications' => json_encode(['Enterprise Applications', 'Android App Development', 'Web Development', 'Big Data Processing']),
                'Guide' => json_encode(['Introduction', 'Java Basics', 'Object-Oriented Programming in Java', 'Java Collections', 'Exception Handling', 'Java I/O', 'Multithreading in Java', 'Java GUI Programming']),
                'frameworks' => json_encode(['Spring Framework', 'Hibernate', 'Apache Struts', 'JavaFX', 'JUnit']),
                'titre' => 'Java',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/java.svg',
                'playList' => 'PLZPZq0r_RZOMhCAyywfnYLlrjiVOkdAI1',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'Java is a versatile, object-oriented programming language known for its platform independence and strong community support. It is widely used in enterprise applications, Android app development, and various other domains.',
            ],
            [
                'description' => 'JavaScript is a versatile scripting language that is primarily used for enhancing web pages and building interactive web applications. Developed by Netscape in the mid-1990s, JavaScript has become an essential part of web development.',
                'WhyLearn' => "JavaScript's Front-End Power: One of the key reasons to learn JavaScript is its role in front-end web development. It allows for the creation of dynamic and responsive user interfaces, enhancing the overall user experience.",
                'example' => "// Hello, World! example\nconsole.log('Hello, World!');",
                'Applications' => json_encode(['Web Development', 'Front-End Frameworks (React, Angular, Vue)', 'Server-Side Development (Node.js)', 'Game Development']),
                'Guide' => json_encode(['Introduction to JavaScript', 'JavaScript Basics', 'DOM Manipulation', 'Event Handling', 'Asynchronous JavaScript (Promises, async/await)', 'JavaScript Frameworks']),
                'frameworks' => json_encode(['React', 'Angular', 'Vue.js', 'Node.js', 'Express.js']),
                'titre' => 'JavaScript',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/javascript.svg',
                'playList' => 'PLillGF-RfqbbnEGy3ROiLWk7JMCuSyQtX',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'JavaScript is a versatile scripting language crucial for front-end web development. It enables the creation of dynamic and interactive user interfaces, and it is widely used in conjunction with various frameworks and libraries.',
            ] , 
            [
                'description' => 'C is a general-purpose programming language that was created at Bell Labs in the early 1970s. It is known for its efficiency, flexibility, and low-level programming capabilities. C is widely used for system programming, developing operating systems, embedded systems, and various application software.',
                'WhyLearn' => "Versatility and Efficiency: Learning C provides a strong foundation for understanding programming concepts. Its versatility allows developers to work on a wide range of projects, from system-level programming to high-level application development.",
                'example' => "// Hello, World! example\n#include <stdio.h>\nint main() {\n    printf('Hello, World!\\n');\n    return 0;\n}",
                'Applications' => json_encode(['System Programming', 'Embedded Systems', 'Application Software', 'Game Development']),
                'Guide' => json_encode(['Introduction to C', 'C Basics', 'Pointers and Memory Management', 'File Handling in C', 'Data Structures in C', 'C Libraries']),
                'frameworks' => '', // C doesn't have widely used frameworks like JavaScript
                'titre' => 'C Programming',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/c.svg',
                'playList' => 'PL98qAXLA6aftD9ZlnjpLhdQAOFI8xIB6e',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'C is a powerful programming language with a rich history. It continues to be widely used in various domains, making it a valuable language to learn for aspiring programmers.',
            ],

            [
                'description' => 'Swift is a powerful and intuitive programming language developed by Apple for building iOS, macOS, watchOS, and tvOS applications. It is designed to be easy to read and write while maintaining a high level of performance. Swift combines modern language features with safety and speed.',
                'WhyLearn' => "iOS and macOS App Development: Learning Swift is essential for developers interested in creating applications for Apple's ecosystem. It provides a seamless and efficient development experience for iOS, macOS, watchOS, and tvOS platforms.",
                'example' => "// Hello, World! example\nprint('Hello, World!')",
                'Applications' => json_encode(['iOS App Development', 'macOS App Development', 'watchOS App Development', 'tvOS App Development']),
                'Guide' => json_encode(['Introduction to Swift', 'Swift Basics', 'Optionals and Error Handling', 'Object-Oriented Programming in Swift', 'UIKit and SwiftUI', 'iOS App Architecture']),
                'frameworks' => json_encode(['UIKit', 'SwiftUI', 'Core Data', 'Combine']),
                'titre' => 'Swift',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/swift.svg',
                'playList' => 'PL5PR3UyfTWvfacnfUsvNcxIiKIgidNRoW',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'Swift is the preferred language for Apple platform development, offering a modern and safe environment for building high-quality applications across various Apple devices.',
            ],
            [
                'description' => 'Go, often referred to as Golang, is a statically typed, compiled language developed by Google. Known for its simplicity, efficiency, and concurrency support, Go is designed to be easy to read and write, making it a popular choice for building scalable and high-performance applications.',
                'WhyLearn' => "Efficiency and Concurrency: Go excels in handling concurrent tasks efficiently. It is well-suited for building scalable and concurrent systems, making it an excellent choice for cloud services and distributed applications.",
                'example' => "// Hello, World! example\npackage main\nimport 'fmt'\nfunc main() {\n    fmt.Println('Hello, World!')\n}",
                'Applications' => json_encode(['Web Development', 'Cloud Services', 'Distributed Systems', 'Network Programming']),
                'Guide' => json_encode(['Introduction to Go', 'Go Basics', 'Concurrency in Go', 'Web Development with Go (e.g., using Gin)', 'Building RESTful APIs in Go', 'Testing and Benchmarking in Go']),
                'frameworks' => json_encode(['Gin', 'Echo', 'Beego']),
                'titre' => 'Go (Golang)',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/go.svg',
                'playList' => 'PL4cUxeGkcC9gC88BEo9czgyS72A3doDeM',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'Go is a versatile language known for its simplicity and efficiency, making it a strong contender for building modern, scalable, and concurrent software systems.',
            ],
            [
                'description' => 'SQL (Structured Query Language) is a domain-specific language used for managing and manipulating relational databases. It provides a standard way to interact with databases, enabling tasks such as querying data, updating records, and managing database structures.',
                'WhyLearn' => "Database Management: Learning SQL is essential for anyone involved in managing and working with databases. It is the foundation for tasks such as data retrieval, data manipulation, and database administration.",
                'example' => "-- Simple SELECT statement\nSELECT column1, column2 FROM table_name WHERE condition;",
                'Applications' => json_encode(['Database Management', 'Data Analysis', 'Business Intelligence', 'Web Development']),
                'Guide' => json_encode(['Introduction to SQL', 'Basic SQL Commands (SELECT, INSERT, UPDATE, DELETE)', 'Joins and Subqueries', 'Indexing and Optimization', 'Database Design', 'Stored Procedures and Functions']),
                'frameworks' => '', // SQL itself is not a framework but a language
                'titre' => 'SQL',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/sql.svg',
                'playList' => 'PLZPZq0r_RZOMskz6MdsMOgxzheIyjo-BZ',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'SQL is a fundamental language for working with relational databases, and it plays a crucial role in various fields, including data management, analysis, and web development.',
            ],
            [
                'description' => 'R is a programming language and free software environment used for statistical computing and graphics. It provides a wide variety of statistical and graphical techniques, making it a popular choice among statisticians, data scientists, and researchers.',
                'WhyLearn' => "Statistical Analysis and Data Visualization: R is widely used for statistical analysis and data visualization. It offers a rich ecosystem of packages for analyzing data, creating visualizations, and conducting statistical tests.",
                'example' => "# Simple R code for mean calculation\ndata <- c(10, 15, 20, 25, 30)\nmean_value <- mean(data)\nprint(mean_value)",
                'Applications' => json_encode(['Statistical Analysis', 'Data Visualization', 'Machine Learning', 'Bioinformatics']),
                'Guide' => json_encode(['Introduction to R', 'R Basics', 'Data Manipulation with dplyr', 'Data Visualization with ggplot2', 'Statistical Tests in R', 'Machine Learning with R']),
                'frameworks' => json_encode(['Shiny', 'Tidyverse']),
                'titre' => 'R Programming',
                'img' => 'https://www.programiz.com/sites/all/themes/programiz/assets/r.svg',
                'playList' => 'PLtL57Fdbwb_Chn-dNR0qBjH3esKS2MXY3',
                'created_at' => now(),
                'slug' => uniqid() ,
                'updated_at' => now(),
                'remarque' => 'R is a versatile language widely used in statistical computing and data analysis. Its extensive package ecosystem and powerful graphics capabilities make it a go-to choice for professionals in various fields.',
            ],
            
            
        ]);
    }
}
