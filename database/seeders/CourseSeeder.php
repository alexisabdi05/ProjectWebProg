<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #abdi
        #photoshop komplit
        Course::create(
            [
                'category_id' => 1,
                'CourseName' => 'Welcome to 5 Days of Photoshop!',
                'CourseDesc' => "Welcome to 5 Days of Photoshop! For the next 5 days we'll be exploring the magic of Photoshop, from the most common tools and techniques, to professional skills, to photo retouching and compositing! Visit PHLEARN.com to download the calendar and schedule. It's never been a better time to learn Photoshop! We'll see you tomorrow.",
                'CourseIMG' => 'img/course-cover/course-1.jpg',
                'author' => 'PH Learn'
            ]
        );
        Course::create(
            [
                'category_id' => 1,
                'CourseName' => 'Another 3 Days of Photoshop',
                'CourseDesc' => "Welcome to Another 3 Days of Photoshop! This course is a continuation of the previous course. For the next 3 days we'll be exploring the magic of Photoshop, from the most common tools and techniques, to professional skills, to photo retouching and compositing! It's never been a better time to learn Photoshop! We'll see you tomorrow.",
                'CourseIMG' => 'img/course-cover/course-2.jpg',
                'author' => 'PH Learn'
            ]
        );
        Course::create(
            [
                'category_id' => 1,
                'CourseName' => 'Photoshop Effect Tutorials',
                'CourseDesc' => "The Photoshop course video is a comprehensive tutorial series designed to teach beginners and intermediate users how to effectively use Adobe Photoshop, a powerful software for image editing and manipulation. The video covers various essential topics, including navigating the Photoshop interface, understanding layers and selections, applying adjustments and filters, working with text and shapes, and utilizing advanced techniques like retouching and compositing.",
                'CourseIMG' => 'img/course-cover/course-3.jpg',
                'author' => 'Photoshop Tutorials'
            ]
        );

        #Ilustrator komplit
        Course::create(
            [
                'category_id' => 2,
                'CourseName' => 'Learn Adobe Illustrator',
                'CourseDesc' => "On this course I will be introducing you to the program and covering some essential practice exercises. Then I will be demonstrating how to create a small project in Adobe Illustrator from start to finish. To help break down the process I have structured the course in 3 main sections: INTRODUCTION, ESSENTIAL PRACTISE , TEST PROJECT. Along the way we will be covering many topics, such as how to set up your document, understand how the program works, use text in Illustrator, prepare and import images into Illustrator and finally export your document ready for print. ",
                'CourseIMG' => 'img/course-cover/course-4.jpg',
                'author' => 'Gareth David Studio'
            ]
        );
        Course::create(
            [
                'category_id' => 2,
                'CourseName' => 'Adobe Illustrator Tutorials',
                'CourseDesc' => "The Adobe Illustrator course video is a comprehensive tutorial series designed to teach beginners and intermediate users how to effectively utilize Adobe Illustrator, a powerful vector graphics software. The video provides a step-by-step guide to mastering the essential tools and features of Illustrator, enabling users to create stunning illustrations, logos, icons, and other vector-based artwork.",
                'CourseIMG' => 'img/course-cover/course-5.jpg',
                'author' => 'tutvid'
            ]
        );
        Course::create(
            [
                'category_id' => 2,
                'CourseName' => 'Adobe Illustrator CC Flat Illustration Tutorial',
                'CourseDesc' => "Whether you are a graphic designer, illustrator, or someone interested in graphic arts, the Adobe Illustrator course video is an invaluable resource. It equips learners with the necessary skills and knowledge to confidently navigate Illustrator and unlock their potential in creating visually captivating and professional-grade vector-based artwork.",
                'CourseIMG' => 'img/course-cover/course-6.jpg',
                'author' => 'How to Graphic Design'
            ]
        );

        #amanda : canva komplit
        Course::create(
            [
                'category_id' => 3,
                'CourseName' => 'Canva: Graphic Design for Beginners',
                'CourseDesc' => "Easy and basic Canva tutorials for beginners to start designing with Canva. All the essentials you should know in order to start using Canva and our best tips for you to create awesome, beautiful, and engaging designs, even if you haven't done it before, never-ever!
                ",
                'CourseIMG' => 'img/course-cover/course-7.jpg',
                'author' => 'Design with Canva'
            ]
        );

        Course::create(
            [
                'category_id' => 3,
                'CourseName' => 'Canva PRO Tutorials',
                'CourseDesc' => "Tutorials and tips for Canva PRO users and how to make the best of your account and create stunning designs!",
                'CourseIMG' => 'img/course-cover/course-8.jpg',
                'author' => 'Design with Canva'
            ]
        );

        Course::create(
            [
                'category_id' => 3,
                'CourseName' => 'Design with Canva',
                'CourseDesc' => "'Design with Canva' is an invaluable YouTube playlist that equips viewers with the skills and knowledge to create stunning visual designs using the popular graphic design platform, Canva. Whether you're a beginner or an experienced designer, this playlist offers a wealth of tips, tricks, and tutorials to unleash your creativity and elevate your design projects.",
                'CourseIMG' => 'img/course-cover/course-9.jpg',
                'author' => 'Canva'
            ]
        );

        #amanda: digital painting kelar
        Course::create(
            [
                'category_id' => 4,
                'CourseName' => 'Digital Painting Fundamentals',
                'CourseDesc' => "Instructional How to Draw videos for artists",
                'CourseIMG' => 'img/course-cover/course-10.jpg',
                'author' => 'Proko'
            ]
        );
        Course::create(
            [
                'category_id' => 4,
                'CourseName' => ' Digital Art for Beginners',
                'CourseDesc' => "Tutorials about digital art for beginners. Artists who are new to digital painting can learn the basics of how to draw, paint and design with a drawing tablet and digital art software.",
                'CourseIMG' => 'img/course-cover/course-11.jpg',
                'author' => 'Aaron Rutten'
            ]
        );
        Course::create(
            [
                'category_id' => 4,
                'CourseName' => '🎓 Digital Art Tutorials',
                'CourseDesc' => "Looking for tutorials on digital art? Here's the ultimate collection of tutorials to get you started or advance with digital art. This list includes most of my tutorials, tips and tricks, and guides on digital art.",
                'CourseIMG' => 'img/course-cover/course-12.jpg',
                'author' => 'Shyfoxx Art'
            ]
        );

        #tata:logo komplit
        Course::create(
            [
                'category_id' => 5,
                'CourseName' => 'Logo Design Course',
                'CourseDesc' => "In this playlist, you'll discover a comprehensive range of topics that will equip you with the knowledge and techniques needed to create compelling and memorable logos. Each lesson has been carefully crafted by industry experts and seasoned designers who bring their expertise and insights to help you master the art of logo design.",
                'CourseIMG' => 'img/course-cover/course-13.jpg',
                'author' => 'GFX Mentor'
            ]
        );

        Course::create(
            [
                'category_id' => 5,
                'CourseName' => 'Logo Design Mastery: The Full Course',
                'CourseDesc' => "Welcome to 'Logo Design Mastery: The Full Course' playlist! Whether you're an aspiring designer seeking to establish a career in logo design or a seasoned professional looking to refine your skills, this comprehensive collection of video lessons is designed to elevate your logo design abilities to the next level.",
                'CourseIMG' => 'img/course-cover/course-14.jpg',
                'author' => 'Tech Philosophy'
            ]
        );

        Course::create(
            [
                'category_id' => 5,
                'CourseName' => 'Minimalist Logo Design Course',
                'CourseDesc' => "Welcome to the Minimalist Logo Design! In this comprehensive and practical course, you will learn the art of creating captivating and impactful logos with a minimalist approach. Whether you're a beginner looking to enter the world of logo design or an experienced designer aiming to refine your skills, this course is designed to help you unlock your creative potential and create visually stunning logos that make a lasting impression.",
                'CourseIMG' => 'img/course-cover/course-15.jpg',
                'author' => 'Zain Graphic'
            ]
        );

        #tata:figure draw komplit
        Course::create(
            [
                'category_id' => 6,
                'CourseName' => 'Figure Drawing Crash Course',
                'CourseDesc' => "Welcome to the ultimate Figure Drawing Crash Course! Whether you're an aspiring artist or a seasoned sketcher looking to refine your skills, this playlist is designed to help you master the art of drawing the human figure with confidence and precision.",
                'CourseIMG' => 'img/course-cover/course-16.jpg',
                'author' => 'My Drawing Tutorial'
            ]
        );

        Course::create(
            [
                'category_id' => 6,
                'CourseName' => 'Figure Drawing Classes',
                'CourseDesc' => "Welcome to our Figure Drawing Classes playlist! Whether you're a beginner artist looking to learn the fundamentals or an experienced artist seeking to refine your skills, this playlist is designed to guide you through the exciting world of figure drawing.",
                'CourseIMG' => 'img/course-cover/course-17.jpg',
                'author' => 'Richard Smitheman'
            ]
        );

        Course::create(
            [
                'category_id' => 6,
                'CourseName' => 'Gesture Drawing & Drawing People',
                'CourseDesc' => "Welcome to the exciting world of Gesture Drawing & Drawing People! This playlist is designed to help you develop your skills in capturing the essence and movement of the human figure through dynamic gesture drawing. In these classes, you'll learn how to quickly observe and sketch the gesture, or the flow and energy, of a pose, allowing you to create lively and expressive figures.",
                'CourseIMG' => 'img/course-cover/course-18.jpg',
                'author' => 'Alphonso Dunn'
            ]
        );

        #tammy: cartoon komplit
        Course::create(
            [
                'category_id' => 7,
                'CourseName' => 'Cartoon Workshop',
                'CourseDesc' => "Welcome to the Cartoon Workshop playlist, where creativity and imagination come to life! This collection is designed to inspire aspiring animators, cartoon enthusiasts, and anyone interested in the art of animation. Whether you're a beginner looking to learn the basics or an experienced artist seeking advanced techniques, this playlist offers a variety of engaging and informative videos.",
                'CourseIMG' => 'img/course-cover/course-19.jpg',
                'author' => 'Pete McKee'
            ]
        );
        Course::create(
            [
                'category_id' => 7,
                'CourseName' => 'Cartoon Courses!',
                'CourseDesc' => "'Cartoon Courses' is a captivating YouTube playlist that offers an array of educational content centered around cartoons and animation. Designed to entertain and educate viewers of all ages, this engaging playlist provides a unique learning experience through the vibrant and imaginative world of cartoons.",
                'CourseIMG' => 'img/course-cover/course-20.jpg',
                'author' => 'Toonboxstudio'
            ]
        );
        Course::create(
            [
                'category_id' => 7,
                'CourseName' => 'Cartooning 101',
                'CourseDesc' => "'Cartooning 101' is an exciting YouTube playlist that serves as a comprehensive guide to the art of cartooning. This captivating series of videos is designed to help beginners and enthusiasts alike develop their cartooning skills and unlock their creativity.",
                'CourseIMG' => 'img/course-cover/course-21.jpg',
                'author' => "Let's Draw with BeeJayDeL"
            ]
        );

        #tammy: color theory komplit
        Course::create(
            [
                'category_id' => 8,
                'CourseName' => 'Super Easy color theory',
                'CourseDesc' => "'Super Easy Color Theory' is an engaging YouTube playlist that aims to demystify the world of color and provide a simple and accessible introduction to color theory. This educational series is perfect for beginners or anyone looking to enhance their understanding and use of colors in various creative endeavors.
                ",
                'CourseIMG' => 'img/course-cover/course-22.jpg',
                'author' => "Dr. Oto Kano"
            ]
        );
        Course::create(
            [
                'category_id' => 8,
                'CourseName' => 'Understand How Color Works & Use Them',
                'CourseDesc' => "Color Lesson' is an illuminating YouTube playlist that serves as a comprehensive guide to understanding and harnessing the power of color in various creative fields. Whether you're an artist, designer, or simply someone who appreciates the aesthetics of color, this playlist offers a wealth of knowledge and inspiration.
                ",
                'CourseIMG' => 'img/course-cover/course-23.jpg',
                'author' => "Sarah Renae Clark"
            ]
        );
        Course::create(
            [
                'category_id' => 8,
                'CourseName' => 'Color Theory',
                'CourseDesc' => "'Color Theory' is an insightful YouTube playlist that dives deep into the captivating world of colors and their significance in art, design, and visual communication. This comprehensive series of videos provides a thorough exploration of color theory, making it an invaluable resource for artists, designers, and enthusiasts alike.
                ",
                'CourseIMG' => 'img/course-cover/course-24.jpg',
                'author' => "The Future Academy"
            ]
        );
    }
}
