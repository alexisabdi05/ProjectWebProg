<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course_detail')->insert(
            [
                'CourseID' => 1,
                'CourseDetailTitle' => 'Let’s Take a Tour of Photoshop!',
                'CourseDetailDesc' => "On day 1 of 5 Days of Photoshop, we go on a tour of the entire program, exploring every major tool, option, and menu. Learn basic navigation, get a quick summary of the most common tools, learn how to customize your workspace, and much more!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=MZpmhkZNfOw&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 1,
                'CourseDetailTitle' => 'Opening, Editing & Saving in Photoshop',
                'CourseDetailDesc' => "In day 2 of 5 Days of Photoshop we break down how to open, edit, and save your work. Learn how to open any image file in Photoshop, make changes, and then save it out as both a PSD (a layered file) and a JPEG (for the web and social media).",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=A-k5kX2MC1s&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=4',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 1,
                'CourseDetailTitle' => 'How to Use Layers & Masks in Photoshop',
                'CourseDetailDesc' => "In day 3 of 5 Days of Photoshop, Aaron covers two of the most important tools in all of Photoshop – Layers and Masks! Learn about how Photoshop projects are organized and how to combine multiple Layers and elements together to create a dynamic final image.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=yQsYziKvx9c&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=5',
                'CourseStatus' => 0,
                'day' => 3
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 1,
                'CourseDetailTitle' => 'How to Use Adjustment Layers in Photoshop',
                'CourseDetailDesc' => "In day 4 of 5 days of Photoshop, we show you how Adjustment Layers can change the way you work! From exposure adjustments, to color grading, to creating seamless composite images, Adjustment Layers can help us tackle a lot. Learn about all of the different types and how you can use them to enhance any photo non-destructively.
                How to Create Selections in Photoshop",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=pUv7npHOk7E&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=6',
                'CourseStatus' => 0,
                'day' => 4
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 1,
                'CourseDetailTitle' => 'How to Create Selections in Photoshop',
                'CourseDetailDesc' => "Last day of Photoshop is all about selections! Learn about the wide variety of selection tools in Photoshop, and then use them to cut a person out from the background and change the color of their lips and eyes.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Erfx1cqM1Hs&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=7',
                'CourseStatus' => 0,
                'day' => 5
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 2,
                'CourseDetailTitle' => 'How to Use Levels & Curves in Photoshop',
                'CourseDetailDesc' => "In this course, Aaron shows you how to fix exposure and color grade your photos with Levels and Curves! Learn about the differences between Levels and Curves, how to use them to brighten or darken an image, and how to add beautiful color toning.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=dvbnPi52GX0&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=8',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 2,
                'CourseDetailTitle' => 'How to Change Any Color with Hue/Saturation in Photoshop',
                'CourseDetailDesc' => "Today Aaron shows you how to change the color of anything in a photo with Hue/Saturation Adjustment Layers! Learn about hue, lightness, and saturation, and how to target specific colors in a photograph.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=cuy12EOEztg&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=9',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 2,
                'CourseDetailTitle' => 'Scale, Rotate & Align with Transform in Photoshop',
                'CourseDetailDesc' => "For the last day, we show you how to Warp, Scale, Rotate, and Align your Layers in Photoshop! Learn how to keep projects organized while making sure every element in your image is perfectly placed.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=_J1zOKgBWPw&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=10',
                'CourseStatus' => 0,
                'day' => 3
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 3,
                'CourseDetailTitle' => 'How to Create an Awesome Letter Portrait - Photoshop Tutorial',
                'CourseDetailDesc' => "This Photoshop tutorial covers how to create a Letter Portrait effect. We'll be using free stock images so you can follow along to create your own.. This tutorial is easy to follow along! Go ahead and give it a try! If you're new, please don't forget to subscribe. So that you will be notified when I upload new content. Thx! ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Q2E1npU5xmk&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 3,
                'CourseDetailTitle' => 'Photoshop: How to Create a Glass Shatter Effect - Tutorial',
                'CourseDetailDesc' => "Learn how to create a stunning glass shatter effect. This Photoshop tutorial covers a few great techniques, on how to apply the effect using custom brushes. We'll be working with Filters, Free Brushes, Masks and other basic tools. I've tried to trim this episode down a tad without losing important information. If it's slightly too fast, you can also slow it down in the player.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=O4DMvPhFclI&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z&index=3',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 3,
                'CourseDetailTitle' => 'Photoshop Tutorial - Neon Text Effect',
                'CourseDetailDesc' => "This Photoshop tutorial covers how to create a realistic neon text effect with wires. We'll be working with styles, filters, free textures and fonts & much more. If you enjoyed this tutorial, please slap a like on it. It lets me know you've liked it.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=jJxqSgDOqdk&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z&index=4',
                'CourseStatus' => 0,
                'day' => 3
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 4,
                'CourseDetailTitle' => 'Interface Introduction to Adobe Illustrator',
                'CourseDetailDesc' => " In this tutorial I am going to introduce you to the Adobe Illustrator interface.In this video tutorial I will be using Adobe Illustrator CC for mac. Almost all of the principles demonstrated and covered will apply to future and previous versions. Some differences may apply if you are using a previous or future version.",
                'CourseDetailVideo' => 'https://youtu.be/QKWnkIPur2Q',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );
        DB::table('course_detail')->insert(
            [
                'CourseID' => 4,
                'CourseDetailTitle' => 'Panels & Workspaces in Adobe Illustrator',
                'CourseDetailDesc' => "In this video I am going to show you how to customize the panel layout to create a more comfortable workspace. Also I will also be recommending the workspace that I use that I find really effective.",
                'CourseDetailVideo' => 'https://youtu.be/2E9oGKd0Ayg',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 5,
                'CourseDetailTitle' => 'Glass Planet Vector Illustration – Adobe Illustrator Tutorial',
                'CourseDetailDesc' => "Build this AWESOME Glass Planet from scratch in this Adobe Illustrator tutorial!
                We’ll create line art from simple shape tools and a little pathfinder work and then build out gradients using a custom palette of colors to build out a really cool looking piece of artwork!",
                'CourseDetailVideo' => 'https://youtu.be/Z2SNeH9v-Ug',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 5,
                'CourseDetailTitle' => 'Animal Silhouette Moonlight Vector Illustration - Illustrator Tutorial',
                'CourseDetailDesc' => "SHAPE TOOLS AND PATHFINDER TRICKS TO GET THIS EFFECT! | Learn tricks of the scatter brush, layer styles, masking and more!",
                'CourseDetailVideo' => 'https://youtu.be/RtnCn65MdN0',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 6,
                'CourseDetailTitle' => 'Adobe Illustrator CC Tutorial Flat Design',
                'CourseDetailDesc' => " In this Adobe Illustrator CC tutorial we will learn to create a Flat Pizza Hut Background  Design for Beginners...
                If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can. And if you also have any other Question, about Adobe Illustrator CC, or any other Software's that I have tutorials for, on my Channel,  I will try to solve that problem of yours if I can",
                'CourseDetailVideo' => 'https://youtu.be/5JhnDzlMZa0',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 6,
                'CourseDetailTitle' => 'Ice-Cream illustration Design',
                'CourseDetailDesc' => "In this Adobe Illustrator CC tutorial we will learn to create an Ice-Cream Cone illustration Design for Beginners...
                If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can.",
                'CourseDetailVideo' => 'https://youtu.be/yoNr6CjHrjo',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 7,
                'CourseDetailTitle' => 'VIDEO Editing in Canva',
                'CourseDetailDesc' => "Here's how to edit videos in Canva, including all the latest 2023 video editing features and all the best tips you should know as a beginner to start making videos. A complete, step-by-step, easy tutorial with all the video editing basics in a nutshell.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=hD5MQQCSZtA&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 7,
                'CourseDetailTitle' => 'Canva for Beginners',
                'CourseDetailDesc' => "In this video, you’ll learn about how to use Canva and be guided step by step through the key features available in 2023 so you get familiar with all the basics of Canva",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=fPSQb72t6i8&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=2',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 8,
                'CourseDetailTitle' => 'How to Remove Video Background in Canva',
                'CourseDetailDesc' => "Here's how to remove the background of any video in just 1 click in Canva! In this video tutorial, you'll learn everything there is to this amazing new video background remover feature!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=L9Mp0bFzxpw&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=4',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 8,
                'CourseDetailTitle' => '10 Tips to Stay Organized in Canva with Folders',
                'CourseDetailDesc' => "Here are 10 tips for you to tidy up your Canva account, and stay organized so that you save time when working with Canva. Over time, your files and designs might pile up to being dozens (hundreds!), and keeping them in order is key.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=-k02x4xn0pI&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=5',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 9,
                'CourseDetailTitle' => 'How to Create a Design Planner to SPEED UP your Workflow',
                'CourseDetailDesc' => "This video will show us how to prepare a design project. This video will guide us through a simple design planner to organize design ingredients whenever you use Canva. This video will also give us some ideas on how to stay organized with our designs along with some graphic design tips and tricks for beginners",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=9iQxgfedh8k&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=3',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 9,
                'CourseDetailTitle' => 'How to Create ANIMATED QUOTES for social media with Canva',
                'CourseDetailDesc' => "This is a great social media tutorial for beginners who want to learn new tips and tricks about Canva. ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=X_WCsS96dRs&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=5',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 10,
                'CourseDetailTitle' => 'Getting Started with Digital Painting',
                'CourseDetailDesc' => "You’ll learn about some of the pros and cons of choosing digital over traditional, get an overview of the software and hardware that you’ll need and learn some basics on hotkeys, tools, and document settings",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=WUZ5V2aWJzg&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 10,
                'CourseDetailTitle' => 'How to Digitally Paint in Grayscale',
                'CourseDetailDesc' => "In this digital painting fundamentals lesson you’ll learn about grayscale painting from reference!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=LaP-7kJRHwE&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH&index=2',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 11,
                'CourseDetailTitle' => 'Digital Art for BEGINNERS - How to Start',
                'CourseDetailDesc' => "Digital Art for Beginners is sort of like a Digital Art 101 class. It is a guide for artists who are completely new to digital art and want to know the basics of what's required to quickly get started making art on a computer or mobile device.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=kc9J4TCE2iA&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 11,
                'CourseDetailTitle' => 'How to Use a DRAWING TABLET for Beginners',
                'CourseDetailDesc' => "Learn how to draw on a tablet in this comprehensive tutorial for beginners and experts alike. This video will demonstrate drawing on 3 different kinds of tablets, the Wacom Intuos, the Wacom Cintiq and the Wacom MobileStudio Pro",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=OFw4jcBjQKs&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa&index=2',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 12,
                'CourseDetailTitle' => '2D ARTISTS should use 3D MODELS',
                'CourseDetailDesc' => "In this video, you will be taught everything you need to know about posing 3D models in CSP, so you can start creating your own pose references.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=22DNGGvYy-Y&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=1',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 12,
                'CourseDetailTitle' => 'Shading Tutorial 🎓 Cartoon VS Semirealism + Rendering Techniques',
                'CourseDetailDesc' => "In this video we'll be shading a cartoon character in 1) a cartoony shading and 2) in a semi-realistic shading. I'm sharing tips & tricks as well as showing you shading and rendering techniques. The tutorial is done in Clip Studio Paint, because Photoshop is really buggy at the moment.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=xkHlaMNDIDg&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=5',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 13,
                'CourseDetailTitle' => 'What is Logo? Logo Design Course Class 1',
                'CourseDetailDesc' => "Hey Everyone, Here's Class 1 of The Design Design Course. In this class I will discuss about what's exactly what a logo and will tell you what you want to expect in this class.",
                'CourseDetailVideo' => 'https://youtu.be/NfkQeOSmIMY',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 13,
                'CourseDetailTitle' => 'Brand, Branding & Brand Identity - Logo Design Course Class 2',
                'CourseDetailDesc' => "Hey Everyone, Here's Class 2 of Logo Design Course. In this lecture I will discuss about what exactly is a Brand, So commonly people think that a logo is a brand but no. Brand is not something visual, it's the experience a customer gets. Then you will also learn about Branding, now branding is like matchmaking of company with the consumer. And Lastly I'll talk about Brand identity, So brand identity is visual which includes a Logo, Colors, Fonts or even any design pattern. Which can be used to design different objects of stationary like: business cards, letter heads, etc. Hope you will get a clear idea of all three after watching this video.",
                'CourseDetailVideo' => 'https://youtu.be/7-CggMlbPx0',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 14,
                'CourseDetailTitle' => 'Course intro',
                'CourseDetailDesc' => "Hey Everyone, Welcome to The Logo Design Mastery. In this course we will together discuss about how to make a great logo and will help you to achieve your goal in designing a great logo!",
                'CourseDetailVideo' => 'https://youtu.be/Z6gL23k7OcA',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 14,
                'CourseDetailTitle' => 'Course Guide',
                'CourseDetailDesc' => "Hey Everyone, Here's the course guide, this is basically the introduction to the tool, or the terms that will help you understanding the next video!",
                'CourseDetailVideo' => 'https://youtu.be/-51_Td08qyY',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 15,
                'CourseDetailTitle' => 'Minimalist logo design in Adobe illustrator//Create minimalist logo',
                'CourseDetailDesc' => " Hello everyone in this video we learn create a minimal logo in adobe illustrator",
                'CourseDetailVideo' => 'https://youtu.be/rqvzOZ_REWc',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 15,
                'CourseDetailTitle' => 'Create a logo design in adobe illustrator//Home Construction Logo',
                'CourseDetailDesc' => "Throughout this tutorial, you will explore various design techniques and tools within Adobe Illustrator to create a logo that balances simplicity, symbolism, and professionalism. By following along, you'll gain valuable insights into the logo design process while honing your skills in vector-based artwork creation.",
                'CourseDetailVideo' => 'https://youtu.be/V7Gp9yALh7w',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 16,
                'CourseDetailTitle' => 'Secret To Drawing The Human Figure',
                'CourseDetailDesc' => "Welcome to the first installment of our Figure Drawing Lessons series, where we unravel the secrets to capturing the human figure with finesse and accuracy. In this introductory video, we will delve into the fundamental principles and techniques that form the foundation of figure drawing.",
                'CourseDetailVideo' => 'https://youtu.be/BvrocH4noms',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 16,
                'CourseDetailTitle' => 'Drawing Human Proportions Using Stick Figures',
                'CourseDetailDesc' => "Welcome to the second installment of our Figure Drawing Lessons series! In this video, we'll explore an essential technique for drawing the human figure: using stick figures to establish accurate proportions.",
                'CourseDetailVideo' => 'https://youtu.be/eVBAPGBlnls',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 17,
                'CourseDetailTitle' => 'Lesson #1 The Process',
                'CourseDetailDesc' => "In this first session we'll look at the core ideas of an approach to figure drawing which we will build upon in future sessions, starting with a front pose.",
                'CourseDetailVideo' => 'https://youtu.be/gpH8T2CRlLI',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 17,
                'CourseDetailTitle' => 'Lesson #2 Back View',
                'CourseDetailDesc' => "Building upon the lessons in the first session, this time we'll look at some of the important considerations for the back",
                'CourseDetailVideo' => 'https://youtu.be/Dffiympi1RA',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 18,
                'CourseDetailTitle' => 'How to use a mannequin',
                'CourseDetailDesc' => "In this tutorial you learn to use a mannequin to draw the figure or people from your imagination in virtually any position imaginable. It will become easier with adequate practice! :-) This tutorial is part of a series of sketching and drawing the figure with pen and ink or any other drawing instrument you may feel comfortable using.",
                'CourseDetailVideo' => 'https://youtu.be/-_TO7ELxemE',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 18,
                'CourseDetailTitle' => 'Gesture Drawing',
                'CourseDetailDesc' => "How to do a gesture drawing or draw figure gestures as a part of how to draw people and the human figure | In this pen and ink and life and figure drawing tutorial we take a close look at how to do gesture drawing when sketching or drawing the figure and people. We examine some key concepts and techniques to keep in mind and practice to get the most out of gesture drawing. We cover human proportion, line of action, movement, gestures, speed, rhythm and balance.",
                'CourseDetailVideo' => 'https://youtu.be/cb3ad2mA8y4',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 19,
                'CourseDetailTitle' => 'Faces',
                'CourseDetailDesc' => "Artist Pete McKee will guide you through the basics of character development starting with how to draw simple faces and expressions. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/q8f8ag58jDs',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 19,
                'CourseDetailTitle' => 'Ageing',
                'CourseDetailDesc' => " Artist Pete McKee will guide you through the basics of character development, part 2 will focus on ageing your faces. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/N_25Cxc0RcE',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 20,
                'CourseDetailTitle' => 'How to draw Male Characters Course',
                'CourseDetailDesc' => " Drawing stylized male characters is a ton of fun simply because of the never ending types of characters you can come up with, from superheros and villains, to a crazy magician, a barbaric warrior, or even just a regular dude of the block",
                'CourseDetailVideo' => 'https://youtu.be/Gql7zJ_DIqc',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 20,
                'CourseDetailTitle' => 'How to draw Female Characters Course',
                'CourseDetailDesc' => "Female Character Design Course with Paris Christou.  32 characters! 12 hour training! 4 Blueprints!'Same Style, Different Design'Learn from home today.",
                'CourseDetailVideo' => 'https://youtu.be/TwEDwc7nv_U',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 21,
                'CourseDetailTitle' => 'How To Draw Faces- Front View',
                'CourseDetailDesc' => "The first in a new series of videos...Cartooning 101!  In this first episode, I walk you through how to use basic shapes and proportions to draw different types of cartoon heads! ",
                'CourseDetailVideo' => 'https://youtu.be/T52UIiUtozA',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 21,
                'CourseDetailTitle' => 'How To Draw Faces- 3/4 View',
                'CourseDetailDesc' => "The second in a new series of videos...Cartooning 101!  In today's episode, I walk you through how to use basic shapes and proportions to draw different types of cartoon heads in a 3/4's perspective!",
                'CourseDetailVideo' => 'https://youtu.be/Eg-16MooOuk',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 22,
                'CourseDetailTitle' => 'Warm vs Cool Colors',
                'CourseDetailDesc' => "Find out what colors are warm, what colors are cool and how to tell the difference between them.",
                'CourseDetailVideo' => ' https://youtu.be/e5IO4uSDQps',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 22,
                'CourseDetailTitle' => 'Split Primary Palette | What Is It? & How To Make One',
                'CourseDetailDesc' => "In the second episode of our color theory series, we take a look at what is so good about the split primary palette, as well as hints and tips on how to put together your own split primary based palette.",
                'CourseDetailVideo' => ' https://youtu.be/AjGvtp0lOtw ',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 23,
                'CourseDetailTitle' => 'Vocabulary',
                'CourseDetailDesc' => "This is my first color video, going over the terms you need to know to study color more in depth! Created for fashion designers and illustrators, but I'm told many others find this helpful!",
                'CourseDetailVideo' => 'https://youtu.be/qSwBxnHZxKA',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 23,
                'CourseDetailTitle' => 'Mixing Colors',
                'CourseDetailDesc' => "MAGENTA: Winsor & Newton Gouache in Rose Tyrien, Winsor & Newton Cotman Watercolor in Permanent Rose. YELLOW: Winsor & Newton Gouache in Primary Yellow, Winsor & Newton Cotman Watercolor in Lemon Yellow. CYAN: Winsor & Newton Gouache in Pthalo Blue, Cerulean, and Primary Blue, Winsor & Newton Cotman Watercolor in Cerulean.",
                'CourseDetailVideo' => 'https://youtu.be/Ax9F622xwfs ',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 24,
                'CourseDetailTitle' => 'How To Use Color — Color Basics',
                'CourseDetailDesc' => "In this episode, Greg Gunn will teach you the basics of how color works and provide some easy tips and tricks for using it. Hue, Saturation, and Value are the building blocks of color. Once you understand how to use them your graphic design, digital art and illustration work will take on a whole new life.",
                'CourseDetailVideo' => 'https://youtu.be/QkCVrNoqcBU',
                'CourseStatus' => 0,
                'day' => 1
            ]
        );

        DB::table('course_detail')->insert(
            [
                'CourseID' => 24,
                'CourseDetailTitle' => 'Make Hundreds of Color Palettes from 1 COLOR! - Design Tutorial',
                'CourseDetailDesc' => "Adobe Photoshop CC 2020 tutorial. What is the best way to build color palettes in Adobe Photoshop 2020? How do you combine colors? How do you know if your colors are any good? In this design tutorial, illustrator and animator, Greg Gunn, walks you through his easy process for making color palettes that work.",
                'CourseDetailVideo' => 'https://youtu.be/u5AnzLg1HxY',
                'CourseStatus' => 0,
                'day' => 2
            ]
        );
    }
}
