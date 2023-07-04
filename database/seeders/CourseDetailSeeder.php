<?php

namespace Database\Seeders;

use App\Models\CourseDetail;
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
        CourseDetail::create(
            [
                'course_id' => 1,
                'CourseDetailTitle' => 'Let’s Take a Tour of Photoshop!',
                'CourseDetailDesc' => "On day 1 of 5 Days of Photoshop, we go on a tour of the entire program, exploring every major tool, option, and menu. Learn basic navigation, get a quick summary of the most common tools, learn how to customize your workspace, and much more!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=MZpmhkZNfOw&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB',
                'day' => 1
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 1,
                'CourseDetailTitle' => 'Opening, Editing & Saving in Photoshop',
                'CourseDetailDesc' => "In day 2 of 5 Days of Photoshop we break down how to open, edit, and save your work. Learn how to open any image file in Photoshop, make changes, and then save it out as both a PSD (a layered file) and a JPEG (for the web and social media).",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=A-k5kX2MC1s&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=4',
                'day' => 2
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 1,
                'CourseDetailTitle' => 'How to Use Layers & Masks in Photoshop',
                'CourseDetailDesc' => "In day 3 of 5 Days of Photoshop, Aaron covers two of the most important tools in all of Photoshop – Layers and Masks! Learn about how Photoshop projects are organized and how to combine multiple Layers and elements together to create a dynamic final image.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=yQsYziKvx9c&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=5',
                'day' => 3
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 1,
                'CourseDetailTitle' => 'How to Use Adjustment Layers in Photoshop',
                'CourseDetailDesc' => "In day 4 of 5 days of Photoshop, we show you how Adjustment Layers can change the way you work! From exposure adjustments, to color grading, to creating seamless composite images, Adjustment Layers can help us tackle a lot. Learn about all of the different types and how you can use them to enhance any photo non-destructively.
                How to Create Selections in Photoshop",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=pUv7npHOk7E&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=6',
                'day' => 4
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 1,
                'CourseDetailTitle' => 'How to Create Selections in Photoshop',
                'CourseDetailDesc' => "Last day of Photoshop is all about selections! Learn about the wide variety of selection tools in Photoshop, and then use them to cut a person out from the background and change the color of their lips and eyes.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Erfx1cqM1Hs&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=7',
                'day' => 5
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 2,
                'CourseDetailTitle' => 'How to Use Levels & Curves in Photoshop',
                'CourseDetailDesc' => "In this course, Aaron shows you how to fix exposure and color grade your photos with Levels and Curves! Learn about the differences between Levels and Curves, how to use them to brighten or darken an image, and how to add beautiful color toning.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=dvbnPi52GX0&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=8',
                'day' => 1
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 2,
                'CourseDetailTitle' => 'How to Change Any Color with Hue/Saturation in Photoshop',
                'CourseDetailDesc' => "Today Aaron shows you how to change the color of anything in a photo with Hue/Saturation Adjustment Layers! Learn about hue, lightness, and saturation, and how to target specific colors in a photograph.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=cuy12EOEztg&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=9',
                'day' => 2
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 2,
                'CourseDetailTitle' => 'Scale, Rotate & Align with Transform in Photoshop',
                'CourseDetailDesc' => "For the last day, we show you how to Warp, Scale, Rotate, and Align your Layers in Photoshop! Learn how to keep projects organized while making sure every element in your image is perfectly placed.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=_J1zOKgBWPw&list=PL7JpMMpENaD3KL_lvmw4eS5U5AD746yKB&index=10',
                'day' => 3
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 3,
                'CourseDetailTitle' => 'How to Create an Awesome Letter Portrait - Photoshop Tutorial',
                'CourseDetailDesc' => "This Photoshop tutorial covers how to create a Letter Portrait effect. We'll be using free stock images so you can follow along to create your own.. This tutorial is easy to follow along! Go ahead and give it a try! If you're new, please don't forget to subscribe. So that you will be notified when I upload new content. Thx! ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Q2E1npU5xmk&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z',
                'day' => 1
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 3,
                'CourseDetailTitle' => 'Photoshop: How to Create a Glass Shatter Effect - Tutorial',
                'CourseDetailDesc' => "Learn how to create a stunning glass shatter effect. This Photoshop tutorial covers a few great techniques, on how to apply the effect using custom brushes. We'll be working with Filters, Free Brushes, Masks and other basic tools. I've tried to trim this episode down a tad without losing important information. If it's slightly too fast, you can also slow it down in the player.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=O4DMvPhFclI&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z&index=3',
                'day' => 2
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 3,
                'CourseDetailTitle' => 'Photoshop Tutorial - Neon Text Effect',
                'CourseDetailDesc' => "This Photoshop tutorial covers how to create a realistic neon text effect with wires. We'll be working with styles, filters, free textures and fonts & much more. If you enjoyed this tutorial, please slap a like on it. It lets me know you've liked it.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=jJxqSgDOqdk&list=PLSoOtQkDh8ByH7x6eQfjVt09V9GJMxL2Z&index=4',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 4,
                'CourseDetailTitle' => 'Interface Introduction to Adobe Illustrator',
                'CourseDetailDesc' => " In this tutorial I am going to introduce you to the Adobe Illustrator interface.In this video tutorial I will be using Adobe Illustrator CC for mac. Almost all of the principles demonstrated and covered will apply to future and previous versions. Some differences may apply if you are using a previous or future version.",
                'CourseDetailVideo' => 'https://youtu.be/QKWnkIPur2Q',
                'day' => 1
            ]
        );
        CourseDetail::create(
            [
                'course_id' => 4,
                'CourseDetailTitle' => 'Panels & Workspaces in Adobe Illustrator',
                'CourseDetailDesc' => "In this video I am going to show you how to customize the panel layout to create a more comfortable workspace. Also I will also be recommending the workspace that I use that I find really effective.",
                'CourseDetailVideo' => 'https://youtu.be/2E9oGKd0Ayg',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 5,
                'CourseDetailTitle' => 'Glass Planet Vector Illustration – Adobe Illustrator Tutorial',
                'CourseDetailDesc' => "Build this AWESOME Glass Planet from scratch in this Adobe Illustrator tutorial!
                We’ll create line art from simple shape tools and a little pathfinder work and then build out gradients using a custom palette of colors to build out a really cool looking piece of artwork!",
                'CourseDetailVideo' => 'https://youtu.be/Z2SNeH9v-Ug',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 5,
                'CourseDetailTitle' => 'Animal Silhouette Moonlight Vector Illustration - Illustrator Tutorial',
                'CourseDetailDesc' => "SHAPE TOOLS AND PATHFINDER TRICKS TO GET THIS EFFECT! | Learn tricks of the scatter brush, layer styles, masking and more!",
                'CourseDetailVideo' => 'https://youtu.be/RtnCn65MdN0',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 6,
                'CourseDetailTitle' => 'Adobe Illustrator CC Tutorial Flat Design',
                'CourseDetailDesc' => " In this Adobe Illustrator CC tutorial we will learn to create a Flat Pizza Hut Background  Design for Beginners...
                If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can. And if you also have any other Question, about Adobe Illustrator CC, or any other Software's that I have tutorials for, on my Channel,  I will try to solve that problem of yours if I can",
                'CourseDetailVideo' => 'https://youtu.be/5JhnDzlMZa0',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 6,
                'CourseDetailTitle' => 'Ice-Cream illustration Design',
                'CourseDetailDesc' => "In this Adobe Illustrator CC tutorial we will learn to create an Ice-Cream Cone illustration Design for Beginners...
                If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can.",
                'CourseDetailVideo' => 'https://youtu.be/yoNr6CjHrjo',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'VIDEO Editing in Canva',
                'CourseDetailDesc' => "Here's how to edit videos in Canva, including all the latest 2023 video editing features and all the best tips you should know as a beginner to start making videos. A complete, step-by-step, easy tutorial with all the video editing basics in a nutshell.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=hD5MQQCSZtA&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'Canva for Beginners',
                'CourseDetailDesc' => "In this video, you’ll learn about how to use Canva and be guided step by step through the key features available in 2023 so you get familiar with all the basics of Canva",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=fPSQb72t6i8&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=2',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 8,
                'CourseDetailTitle' => 'How to Remove Video Background in Canva',
                'CourseDetailDesc' => "Here's how to remove the background of any video in just 1 click in Canva! In this video tutorial, you'll learn everything there is to this amazing new video background remover feature!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=L9Mp0bFzxpw&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=4',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 8,
                'CourseDetailTitle' => '10 Tips to Stay Organized in Canva with Folders',
                'CourseDetailDesc' => "Here are 10 tips for you to tidy up your Canva account, and stay organized so that you save time when working with Canva. Over time, your files and designs might pile up to being dozens (hundreds!), and keeping them in order is key.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=-k02x4xn0pI&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=5',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 9,
                'CourseDetailTitle' => 'How to Create a Design Planner to SPEED UP your Workflow',
                'CourseDetailDesc' => "This video will show us how to prepare a design project. This video will guide us through a simple design planner to organize design ingredients whenever you use Canva. This video will also give us some ideas on how to stay organized with our designs along with some graphic design tips and tricks for beginners",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=9iQxgfedh8k&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=3',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 9,
                'CourseDetailTitle' => 'How to Create ANIMATED QUOTES for social media with Canva',
                'CourseDetailDesc' => "This is a great social media tutorial for beginners who want to learn new tips and tricks about Canva. ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=X_WCsS96dRs&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=5',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 10,
                'CourseDetailTitle' => 'Getting Started with Digital Painting',
                'CourseDetailDesc' => "You’ll learn about some of the pros and cons of choosing digital over traditional, get an overview of the software and hardware that you’ll need and learn some basics on hotkeys, tools, and document settings",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=WUZ5V2aWJzg&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 10,
                'CourseDetailTitle' => 'How to Digitally Paint in Grayscale',
                'CourseDetailDesc' => "In this digital painting fundamentals lesson you’ll learn about grayscale painting from reference!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=LaP-7kJRHwE&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH&index=2',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 11,
                'CourseDetailTitle' => 'Digital Art for BEGINNERS - How to Start',
                'CourseDetailDesc' => "Digital Art for Beginners is sort of like a Digital Art 101 class. It is a guide for artists who are completely new to digital art and want to know the basics of what's required to quickly get started making art on a computer or mobile device.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=kc9J4TCE2iA&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 11,
                'CourseDetailTitle' => 'How to Use a DRAWING TABLET for Beginners',
                'CourseDetailDesc' => "Learn how to draw on a tablet in this comprehensive tutorial for beginners and experts alike. This video will demonstrate drawing on 3 different kinds of tablets, the Wacom Intuos, the Wacom Cintiq and the Wacom MobileStudio Pro",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=OFw4jcBjQKs&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa&index=2',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 12,
                'CourseDetailTitle' => '2D ARTISTS should use 3D MODELS',
                'CourseDetailDesc' => "In this video, you will be taught everything you need to know about posing 3D models in CSP, so you can start creating your own pose references.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=22DNGGvYy-Y&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=1',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 12,
                'CourseDetailTitle' => 'Shading Tutorial 🎓 Cartoon VS Semirealism + Rendering Techniques',
                'CourseDetailDesc' => "In this video we'll be shading a cartoon character in 1) a cartoony shading and 2) in a semi-realistic shading. I'm sharing tips & tricks as well as showing you shading and rendering techniques. The tutorial is done in Clip Studio Paint, because Photoshop is really buggy at the moment.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=xkHlaMNDIDg&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=5',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 13,
                'CourseDetailTitle' => 'What is Logo? Logo Design Course Class 1',
                'CourseDetailDesc' => "Hey Everyone, Here's Class 1 of The Design Design Course. In this class I will discuss about what's exactly what a logo and will tell you what you want to expect in this class.",
                'CourseDetailVideo' => 'https://youtu.be/NfkQeOSmIMY',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 13,
                'CourseDetailTitle' => 'Brand, Branding & Brand Identity - Logo Design Course Class 2',
                'CourseDetailDesc' => "Hey Everyone, Here's Class 2 of Logo Design Course. In this lecture I will discuss about what exactly is a Brand, So commonly people think that a logo is a brand but no. Brand is not something visual, it's the experience a customer gets. Then you will also learn about Branding, now branding is like matchmaking of company with the consumer. And Lastly I'll talk about Brand identity, So brand identity is visual which includes a Logo, Colors, Fonts or even any design pattern. Which can be used to design different objects of stationary like: business cards, letter heads, etc. Hope you will get a clear idea of all three after watching this video.",
                'CourseDetailVideo' => 'https://youtu.be/7-CggMlbPx0',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 14,
                'CourseDetailTitle' => 'Course intro',
                'CourseDetailDesc' => "Hey Everyone, Welcome to The Logo Design Mastery. In this course we will together discuss about how to make a great logo and will help you to achieve your goal in designing a great logo!",
                'CourseDetailVideo' => 'https://youtu.be/Z6gL23k7OcA',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 14,
                'CourseDetailTitle' => 'Course Guide',
                'CourseDetailDesc' => "Hey Everyone, Here's the course guide, this is basically the introduction to the tool, or the terms that will help you understanding the next video!",
                'CourseDetailVideo' => 'https://youtu.be/-51_Td08qyY',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 15,
                'CourseDetailTitle' => 'Minimalist logo design in Adobe illustrator//Create minimalist logo',
                'CourseDetailDesc' => " Hello everyone in this video we learn create a minimal logo in adobe illustrator",
                'CourseDetailVideo' => 'https://youtu.be/rqvzOZ_REWc',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 15,
                'CourseDetailTitle' => 'Create a logo design in adobe illustrator//Home Construction Logo',
                'CourseDetailDesc' => "Throughout this tutorial, you will explore various design techniques and tools within Adobe Illustrator to create a logo that balances simplicity, symbolism, and professionalism. By following along, you'll gain valuable insights into the logo design process while honing your skills in vector-based artwork creation.",
                'CourseDetailVideo' => 'https://youtu.be/V7Gp9yALh7w',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 16,
                'CourseDetailTitle' => 'Secret To Drawing The Human Figure',
                'CourseDetailDesc' => "Welcome to the first installment of our Figure Drawing Lessons series, where we unravel the secrets to capturing the human figure with finesse and accuracy. In this introductory video, we will delve into the fundamental principles and techniques that form the foundation of figure drawing.",
                'CourseDetailVideo' => 'https://youtu.be/BvrocH4noms',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 16,
                'CourseDetailTitle' => 'Drawing Human Proportions Using Stick Figures',
                'CourseDetailDesc' => "Welcome to the second installment of our Figure Drawing Lessons series! In this video, we'll explore an essential technique for drawing the human figure: using stick figures to establish accurate proportions.",
                'CourseDetailVideo' => 'https://youtu.be/eVBAPGBlnls',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 17,
                'CourseDetailTitle' => 'Lesson #1 The Process',
                'CourseDetailDesc' => "In this first session we'll look at the core ideas of an approach to figure drawing which we will build upon in future sessions, starting with a front pose.",
                'CourseDetailVideo' => 'https://youtu.be/gpH8T2CRlLI',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 17,
                'CourseDetailTitle' => 'Lesson #2 Back View',
                'CourseDetailDesc' => "Building upon the lessons in the first session, this time we'll look at some of the important considerations for the back",
                'CourseDetailVideo' => 'https://youtu.be/Dffiympi1RA',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 18,
                'CourseDetailTitle' => 'How to use a mannequin',
                'CourseDetailDesc' => "In this tutorial you learn to use a mannequin to draw the figure or people from your imagination in virtually any position imaginable. It will become easier with adequate practice! :-) This tutorial is part of a series of sketching and drawing the figure with pen and ink or any other drawing instrument you may feel comfortable using.",
                'CourseDetailVideo' => 'https://youtu.be/-_TO7ELxemE',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 18,
                'CourseDetailTitle' => 'Gesture Drawing',
                'CourseDetailDesc' => "How to do a gesture drawing or draw figure gestures as a part of how to draw people and the human figure | In this pen and ink and life and figure drawing tutorial we take a close look at how to do gesture drawing when sketching or drawing the figure and people. We examine some key concepts and techniques to keep in mind and practice to get the most out of gesture drawing. We cover human proportion, line of action, movement, gestures, speed, rhythm and balance.",
                'CourseDetailVideo' => 'https://youtu.be/cb3ad2mA8y4',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 19,
                'CourseDetailTitle' => 'Faces',
                'CourseDetailDesc' => "Artist Pete McKee will guide you through the basics of character development starting with how to draw simple faces and expressions. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/q8f8ag58jDs',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 19,
                'CourseDetailTitle' => 'Ageing',
                'CourseDetailDesc' => " Artist Pete McKee will guide you through the basics of character development, part 2 will focus on ageing your faces. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/N_25Cxc0RcE',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 20,
                'CourseDetailTitle' => 'How to draw Male Characters Course',
                'CourseDetailDesc' => " Drawing stylized male characters is a ton of fun simply because of the never ending types of characters you can come up with, from superheros and villains, to a crazy magician, a barbaric warrior, or even just a regular dude of the block",
                'CourseDetailVideo' => 'https://youtu.be/Gql7zJ_DIqc',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 20,
                'CourseDetailTitle' => 'How to draw Female Characters Course',
                'CourseDetailDesc' => "Female Character Design Course with Paris Christou.  32 characters! 12 hour training! 4 Blueprints!'Same Style, Different Design'Learn from home today.",
                'CourseDetailVideo' => 'https://youtu.be/TwEDwc7nv_U',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 21,
                'CourseDetailTitle' => 'How To Draw Faces- Front View',
                'CourseDetailDesc' => "The first in a new series of videos...Cartooning 101!  In this first episode, I walk you through how to use basic shapes and proportions to draw different types of cartoon heads! ",
                'CourseDetailVideo' => 'https://youtu.be/T52UIiUtozA',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 21,
                'CourseDetailTitle' => 'How To Draw Faces- 3/4 View',
                'CourseDetailDesc' => "The second in a new series of videos...Cartooning 101!  In today's episode, I walk you through how to use basic shapes and proportions to draw different types of cartoon heads in a 3/4's perspective!",
                'CourseDetailVideo' => 'https://youtu.be/Eg-16MooOuk',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 22,
                'CourseDetailTitle' => 'Warm vs Cool Colors',
                'CourseDetailDesc' => "Find out what colors are warm, what colors are cool and how to tell the difference between them.",
                'CourseDetailVideo' => ' https://youtu.be/e5IO4uSDQps',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 22,
                'CourseDetailTitle' => 'Split Primary Palette | What Is It? & How To Make One',
                'CourseDetailDesc' => "In the second episode of our color theory series, we take a look at what is so good about the split primary palette, as well as hints and tips on how to put together your own split primary based palette.",
                'CourseDetailVideo' => ' https://youtu.be/AjGvtp0lOtw ',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 23,
                'CourseDetailTitle' => 'Vocabulary',
                'CourseDetailDesc' => "This is my first color video, going over the terms you need to know to study color more in depth! Created for fashion designers and illustrators, but I'm told many others find this helpful!",
                'CourseDetailVideo' => 'https://youtu.be/qSwBxnHZxKA',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 23,
                'CourseDetailTitle' => 'Mixing Colors',
                'CourseDetailDesc' => "MAGENTA: Winsor & Newton Gouache in Rose Tyrien, Winsor & Newton Cotman Watercolor in Permanent Rose. YELLOW: Winsor & Newton Gouache in Primary Yellow, Winsor & Newton Cotman Watercolor in Lemon Yellow. CYAN: Winsor & Newton Gouache in Pthalo Blue, Cerulean, and Primary Blue, Winsor & Newton Cotman Watercolor in Cerulean.",
                'CourseDetailVideo' => 'https://youtu.be/Ax9F622xwfs ',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 24,
                'CourseDetailTitle' => 'How To Use Color — Color Basics',
                'CourseDetailDesc' => "In this episode, Greg Gunn will teach you the basics of how color works and provide some easy tips and tricks for using it. Hue, Saturation, and Value are the building blocks of color. Once you understand how to use them your graphic design, digital art and illustration work will take on a whole new life.",
                'CourseDetailVideo' => 'https://youtu.be/QkCVrNoqcBU',
                'day' => 1
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 24,
                'CourseDetailTitle' => 'Make Hundreds of Color Palettes from 1 COLOR! - Design Tutorial',
                'CourseDetailDesc' => "Adobe Photoshop CC 2020 tutorial. What is the best way to build color palettes in Adobe Photoshop 2020? How do you combine colors? How do you know if your colors are any good? In this design tutorial, illustrator and animator, Greg Gunn, walks you through his easy process for making color palettes that work.",
                'CourseDetailVideo' => 'https://youtu.be/u5AnzLg1HxY',
                'day' => 2
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'How to create a TikTok Video using Photos using Canva Mobile',
                'CourseDetailDesc' => "Here's how to create a TikTok video using photos (it also works for Instagram) with text and music, from your mobile phone, EASY and QUICK! Using just the Canva mobile app, we'll make a super trendy slideshow, that we'll be able to post right away on our favorite social media.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=uKqN5FNwkA0&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=4',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'Create your own ANIMATED BACKGROUND in Canva',
                'CourseDetailDesc' => "Learn how to create an animated background in Canva in less than a minute! These moving backgrounds are super easy and fun to make: just follow these steps and you'll have your own ready to go!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=uM3w3KOaAp0&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=5',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'Canva Website',
                'CourseDetailDesc' => "Here's your ultimate guide on how to create your Canva website in less than an hour! Step by step, you will learn how to make your own website using the new 2022 version of Canva Sites. It's easy and fun! Canva Sites are fully responsive and you can now have your own custom domain.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Eyhue7UQiuo&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=6',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 7,
                'CourseDetailTitle' => 'Making your LOGO in Canva',
                'CourseDetailDesc' => "Here's all the info you should know before you start making a logo with Canva, plus a whole lot of helpful tips and useful resources, such as where to find inspiration, for you to create the most awesome and effective logo, for you or your client! ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=6hf0IbVwrJI&list=PL2jU5A3fxwC8kvuc_zB0FPzAiXwmRAoFQ&index=9',
                'day' => 6
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 8,
                'CourseDetailTitle' => 'A Simple Hack to insert Gradient into ANY Text in Canva',
                'CourseDetailDesc' => "Wondering how to insert a gradient into text in Canva? Not talking about letter frames here: rather any text, with any font! Until recently, I thought it wasn't possible but IT IS! We'll be using a simple hack to achieve it since this feature isn't available yet.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=_-r0Vjq-vWg&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=6',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 8,
                'CourseDetailTitle' => 'How to make a STUNNING 3D Instagram Post Mockup',
                'CourseDetailDesc' => "Here's how to achieve it with this amazing Instagram Post mockup that has a special 3D effect. It is easy to make, yet you will need a Canva Pro account as it requires using premium features.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=yQMtTrUnEEM&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=10',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 8,
                'CourseDetailTitle' => 'How to CREATE a 3D EFFECT in Canva',
                'CourseDetailDesc' => "Here's how to create a 3D effect in Canva, guys! Name it Pop-out, break-through, window-smash, with pixel stretch... whatever you call it, all these 3D photo effects are so catchy, we couldn't resist and had to show you how to create them easily with Canva!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=7OJ-6nBlvpY&list=PL2jU5A3fxwC-GNcJku2PkDZBFGL2cZxC0&index=18',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 9,
                'CourseDetailTitle' => 'Create ANIMATED Presentations with Canva',
                'CourseDetailDesc' => "In this video We will be shown how to animate presentations with Canva. We will cover 4 different ways to add motion to presentations and also give some graphic design tips and tricks along the way.",
                'CourseDetailVideo' => 'Create ANIMATED Presentations with Canva
                https://www.youtube.com/watch?v=Qj6g0AXF_CM&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=8',
                'day' =>3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 9,
                'CourseDetailTitle' => 'How to Create a Social Media Report with Canva',
                'CourseDetailDesc' => "The tutorial explains step-by-step how to design the report based on social media report templates from the Canva library. This video will also tell us some graphic design and social media marketing tips and tricks to help you design your social media report.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=MWgyKeBiRhI&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=14',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 9,
                'CourseDetailTitle' => 'Create VISUALS for your NEWSLETTER in Canva',
                'CourseDetailDesc' => "This video will show you how to design email headers with Canva and most importantly how to make sure your emails remain on-brand. Creating consistent email headers and visuals will help you look more professional with your email marketing strategy.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=em1lMGsDfF4&list=PLATYfhN6gQz8mNwk1cPwjCeppRiUKTUVD&index=22',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 10,
                'CourseDetailTitle' => 'Solving Drawing Problems with Digital Painting',
                'CourseDetailDesc' => "This demo shows you how to complete a digital grayscale painting from reference in a traditional, painterly style. This video shows you how to achieve this by using traditional techniques and traditionally-inspired brushes with additional advice to help you avoid getting stuck in the details.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=ZAr5rTde7co&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH&index=3',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 10,
                'CourseDetailTitle' => 'Painting Tips for Digital Artists',
                'CourseDetailDesc' => "Digitally painting in grayscale is a fantastic way to focus on values, brushwork, and composition without getting caught up in color selection. You can approach your next digital grayscale painting with confidence! ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=rr5UrbH909s&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH&index=5',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 10,
                'CourseDetailTitle' => 'How to Use Layers for Digital Painting',
                'CourseDetailDesc' => "Layers introduce a unique feature for digital artists that you’ll want to utilize. If you’re coming from a traditional background or you’re just new to art altogether, you may have a lot of questions about how layers work. In this lesson, you’ll discover how layers work and some of the ways that you can use these powerful tools to make your art even more impressive.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=szxDoCHvERI&list=PLtG4P3lq8RHHBiU_VqcY_L9T2iFDeCUJH&index=4',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 11,
                'CourseDetailTitle' => 'Ultimate Guide to COLORING Digital Art Like a Pro',
                'CourseDetailDesc' => "Learn all of the different ways you can color digital art: Hand-coloring, Paint Bucket Tool, Selections, Advanced Fills and A.I. (or Machine Learning) fills.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=DAwQ0qOwp9k&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa&index=4',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 11,
                'CourseDetailTitle' => 'How to BLEND Digital Art for Beginners',
                'CourseDetailDesc' => "This tutorial will explain the basics of blending color digitally. I'll demonstrate how to blend in Krita, Photoshop, Corel Painter, PaintTool SAI, Medibang, ArtRage, Rebelle and ClipStudio Paint Pro.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=PCSN7fP_VEc&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa&index=6',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 11,
                'CourseDetailTitle' => 'How to Make DIGITAL ART Look TRADITIONAL',
                'CourseDetailDesc' => "I'll share some advice on how to make your digital artwork look less synthetic and more like traditional art.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=jepg73Q8Sp8&list=PLo_kbikcLfN_P93T3PZZZx9bs_GsNTPEa&index=5',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 12,
                'CourseDetailTitle' => 'How to Blend 🎓 Digital Art Tutorial in Corel Painter 2021',
                'CourseDetailDesc' => "The video is divided into two main parts: (1) Blending Techniques and demonstration and (2) Real-time blending of a face using the said techniques.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=v_MDpvu8Rh8&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=9',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 12,
                'CourseDetailTitle' => '【 PART 1 】★ A Beginner Guide to Become a Digital Artist',
                'CourseDetailDesc' => "Here’s some tips and tricks to become a pro in Digital Art part 1. ",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=5pmIYH1ugtk&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=7',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 12,
                'CourseDetailTitle' => '【 PART 2 】★ A Beginner Guide to Become a Digital Artist',
                'CourseDetailDesc' => "Here’s some tips and tricks to become a pro in Digital Art part 2.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=Xlg7FdbB-P8&list=PLmGWRDStiZfQRrvpPIEWFfXEkSCvUT4yH&index=8',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 13,
                'CourseDetailTitle' => '7 types of Logos and their usage - Logo Design Course Class 3',
                'CourseDetailDesc' => "Hey everyone! Here's the class number 3 of Logo Design Course in Urdu / Hindi. In this class I will explain you 7 types of Logos and their usage. I will be discussing about when to use which logo category and when not to use it. So 7 types of logos are:
                1. Emblem
                2. Logotype or Wordmark
                3. Monogram or Lettermark
                4. Brand Mark or Pictorial Mark
                5. Abstract Logo Mark
                6. Mascot
                7. Combination Mark.
                I suggest you to watch whole video till the end. It will give you a good idea when you start a Logo design project for your clients.
                ",
                'CourseDetailVideo' => 'https://youtu.be/LFObJFogu0I',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 13,
                'CourseDetailTitle' => 'Questions to Ask your Client - Logo Design Course Class 4
                ',
                'CourseDetailDesc' => "Hey everyone! Here's the class number 4 of Logo Design Course. In this class I'll tell you a few questions that you should ask your client before starting your new logo design project.",
                'CourseDetailVideo' => 'https://youtu.be/KD66pGWcuMI',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 13,
                'CourseDetailTitle' => 'What are Metaphors? - Logo Design Course Class 5',
                'CourseDetailDesc' => "Hey everyone! Here's the class number 5 of Logo Design Course also with English subtitles. In this class you will learn about Metaphors and their usage in Logo Design.",
                'CourseDetailVideo' => 'https://youtu.be/a3LOnuWUU4k',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 14,
                'CourseDetailTitle' => 'Logo design theory design basics anatomy',
                'CourseDetailDesc' => "Throughout the video, we showcase practical examples and case studies to illustrate the concepts discussed, providing real-world insights and inspiration. By the end, you'll have a solid understanding of logo design theory, equipped with the knowledge to create captivating and meaningful logos that leave a lasting impression.",
                'CourseDetailVideo' => 'https://youtu.be/lwNlNFl2h-Y',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 14,
                'CourseDetailTitle' => 'Logo Design Theory logo design styles',
                'CourseDetailDesc' => "In this informative video, we delve into the world of logo design theory, specifically focusing on exploring different logo design styles. If you're a designer or a business owner seeking to understand the various design approaches used in logo creation, this video is a valuable resource.",
                'CourseDetailVideo' => 'https://youtu.be/1hghJXXalHU',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 14,
                'CourseDetailTitle' => 'Logo Design Theory Characteristics of Solid Logo Designs',
                'CourseDetailDesc' => " In this insightful video, we delve into the theory behind creating solid logo designs, focusing on the key characteristics that make a logo impactful and effective. Whether you're a designer or a business owner looking to understand the fundamental principles of logo design, this video offers valuable insights.",
                'CourseDetailVideo' => 'https://youtu.be/bESik9_NQsU',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 15,
                'CourseDetailTitle' => 'Create a logo in adobe illustrator//minimalist logo design',
                'CourseDetailDesc' => "Throughout this course, you will be guided step-by-step by industry experts who have extensive experience in logo design and a deep understanding of minimalist aesthetics. You'll gain valuable insights into the principles and techniques that underpin successful minimalist logo design, allowing you to craft logos that are visually striking, versatile, and memorable.",
                'CourseDetailVideo' => 'https://youtu.be/_jUeEfBmZiQ',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 15,
                'CourseDetailTitle' => 'Minimalist logo design in adobe illustrator//Logo design',
                'CourseDetailDesc' => "Understanding Minimalism in Logo Design: Discover the core principles of minimalism and how they apply to logo design. Learn how to effectively use negative space, simplicity, and balanced compositions to create impactful logos.",
                'CourseDetailVideo' => 'https://youtu.be/j-YkmnKVHqI',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 15,
                'CourseDetailTitle' => 'How to make a logo in adobe illustrator// Logo design',
                'CourseDetailDesc' => "Shape Creation and Composition: Dive into Adobe Illustrator's shape tools and techniques to create and manipulate shapes for your logo. Learn how to arrange and balance the elements to create a visually pleasing composition.",
                'CourseDetailVideo' => 'https://youtu.be/km7Gv7WtRzQ',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 16,
                'CourseDetailTitle' => 'How To Draw Perspective - Drawing Two Point Perspective',
                'CourseDetailDesc' => "Welcome to the third installment of our Figure Drawing Lessons series! In this video, we will tackle an essential topic in figure drawing: perspective. Specifically, we'll focus on drawing two-point perspective to bring depth and realism to your artwork.",
                'CourseDetailVideo' => 'https://youtu.be/phWtQ2odZh0',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 16,
                'CourseDetailTitle' => 'How To Draw The Human Figure In Perspective',
                'CourseDetailDesc' => "Welcome to the fourth installment of our Figure Drawing Lessons series! In this video, we'll delve into the exciting topic of drawing the human figure in perspective. Building upon our previous lesson on perspective, we'll now focus specifically on applying those principles to draw figures with depth and dimension.",
                'CourseDetailVideo' => 'https://youtu.be/8lp6gc4gjjY',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 16,
                'CourseDetailTitle' => 'Drawing The Manikin (Mannequin) Figure',
                'CourseDetailDesc' => "Welcome to the fifth installment of our Figure Drawing Lessons series! In this video, we'll explore the concept of drawing the manikin, also known as a mannequin figure. The manikin serves as a useful tool for understanding and practicing the underlying structure of the human figure.",
                'CourseDetailVideo' => 'https://youtu.be/zFyiM-Z3NZc',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 17,
                'CourseDetailTitle' => 'Figure Drawing Quick Tips - Straights against Curves',
                'CourseDetailDesc' => "Just some quick thoughts on how we can use straights against curves in our drawing to bring more dynamics and visual interest.",
                'CourseDetailVideo' => 'https://youtu.be/TgzHsKNL7_s',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 17,
                'CourseDetailTitle' => 'Figure Drawing Process Demo and Talk',
                'CourseDetailDesc' => "Talk a bit about my process. From the intro - Blocking -  Unto the Final Thoughts",
                'CourseDetailVideo' => 'https://youtu.be/d9XgVpiXARo',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 17,
                'CourseDetailTitle' => 'Dynamics in Figure Drawing - Foreshortening study',
                'CourseDetailDesc' => "How we can adapt our process to fit the needs of the pose.",
                'CourseDetailVideo' => 'https://youtu.be/2MLsnTjjg9s',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 18,
                'CourseDetailTitle' => 'The 7 Ls of Gesture Drawing',
                'CourseDetailDesc' => "How to Draw and Sketch People Part 4 | In this tutorial I share the 7 Ls of Gesture Drawing. They form an essential foundation of gesture drawing, figure drawing, and drawing or sketching in general.",
                'CourseDetailVideo' => 'https://youtu.be/NvjB0rj6yAc',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 18,
                'CourseDetailTitle' => 'Gesture & Figure Drawing Tips | Natural Rhythm & Flow Lines: How to find & use them',
                'CourseDetailDesc' => "Gesture drawing and figure drawing tips that will enable you to find natural rhythm lines that will enhance the fluidity of your figures",
                'CourseDetailVideo' => 'https://youtu.be/PZufU_-Bj-w',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 18,
                'CourseDetailTitle' => 'How to Draw Tips | The 5 STAGES of a Drawing',
                'CourseDetailDesc' => "How to draw people, animals, objects, and things in 5 stages as a part of how to draw basics and fundamentals. This tutorial provides drawing tips and techniques on how to draw from start to finish. We will cover the drawing process and how to develop your drawing step by step from a sketch and gesture drawing to a establishing proportions and measurement which may address human proportions. Then proceeding to constructing mass, form and structure, which may address human anatomy. Then to issues of value, light and shadow and shading. And finally, the refinenment stage where everything culminates to a final finished drawing.",
                'CourseDetailVideo' => 'https://youtu.be/HzydK56tr9U',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 19,
                'CourseDetailTitle' => 'Bodies',
                'CourseDetailDesc' => "Artist Pete McKee will guide you through the basics of character development. In this episode we'll be adding bodies to our characters. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/UOTMtsYtyOY ',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 19,
                'CourseDetailTitle' => 'Animals ',
                'CourseDetailDesc' => "Join artist Pete McKee as he guides you through the basics of cartooning. In this episode Pete, joined by his new best friend Eric, will show you how to draw some cute little critters. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/KdKpPmBbr6s ',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 19,
                'CourseDetailTitle' => 'Drawing ¾',
                'CourseDetailDesc' => "Join artist Pete McKee as he guides you through the basics of cartooning. In this episode Pete, will show you how to draw in the 3/4 to give your characters more depth as well as showing some simple techniques that some of the biggest cartoon studios use. So grab a pen, pencil or whatever you can find and join in on the fun!",
                'CourseDetailVideo' => 'https://youtu.be/LlszMS_8njw ',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 20,
                'CourseDetailTitle' => 'Sillhouette Painting Training',
                'CourseDetailVideo' => "https://youtu.be/gpcViAs-Ip8 ",
                'CourseDetailDesc' => 'This digital art-form is simply taking a sketch and creating a silhouette of colors that forms a beautiful stylized cartoon character. Capturing shapes of colors that portrays a character instead of lines is what makes Silhouette Painting so unique and one of the most popular digital art styles online. Some of the biggest influencers online became super popular using this style to create their artwork.',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 20,
                'CourseDetailTitle' => 'Digital Painting Training level 1',
                'CourseDetailDesc' => "This course was specifically designed and created for artists in the digital art world who struggle to polish there art from sketch to color. Sometimes keeping things simple is the ultimate form of sophistication.",
                'CourseDetailVideo' => 'https://youtu.be/aPiShOHCJNs',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 20,
                'CourseDetailTitle' => 'Digital Painting Training level 2',
                'CourseDetailVideo' => "https://youtu.be/6TJ5PejvJSU",
                'CourseDetailDesc' => 'Paris Christou demonstrates this course using the software Autodesk Sketchbook Pro and uses only 5 tools, a Pencil, a Soft Round Brush, an AirBrush and the Hard/Soft Eraser which means you can Easily follow along with ANY art software like Photoshop, Paint Tool Sai etc. But you DO need to have the basic knowledge of your softwares user interface before taking this course.',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 21,
                'CourseDetailTitle' => 'How To Draw Faces- Side View',
                'CourseDetailVideo' => "https://youtu.be/DwqNEwqpJ08",
                'CourseDetailDesc' => 'The third in a new series of videos...Cartooning 101!  In today episode, I walk you through how to use basic shapes and proportions to draw different types of cartoon heads',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 21,
                'CourseDetailTitle' => 'How To Draw Eyes',
                'CourseDetailVideo' => "https://youtu.be/AhwKnpv9zhs",
                'CourseDetailDesc' => 'The fourth in a new series of videos...Cartooning 101!  In today episode, I walk you through how to draw different styles of cartoon eyes for both men and women!',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 21,
                'CourseDetailTitle' => 'How To Draw Noses',
                'CourseDetailDesc' => "In this episode of Cartooning 101, I walk you through how to use basic shapes and proportions to draw different types of cartoon noses!",
                'CourseDetailVideo' => 'https://youtu.be/nR6QYaRhNf0',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 22,
                'CourseDetailTitle' => 'Color Wheel Palette - Color Mixing Without Mud!',
                'CourseDetailDesc' => "Discover how to create a watercolor palette according to the color wheel. By making a palette this way, you will be full control of your color mixing process, and be able to always avoid mud (muted colors) when you don't want them. There are also suggestions for what colors you should get from Daniel Smith, Holbein, Sennelier and Schmincke so you don't have to do any guess work!",
                'CourseDetailVideo' => 'https://youtu.be/lboOrFAnzB4 ',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 22,
                'CourseDetailTitle' => 'How to Avoid Muddy Colors - Complimentary Colors',
                'CourseDetailDesc' => "https://youtu.be/ixPEbzAVwE0",
                'CourseDetailVideo' => 'In this video we talk about the first part of avoid making mud. Mixing complimentary colors together, what is it, and how making this kind of mud can be really useful in watercolor paintings.',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 22,
                'CourseDetailTitle' => 'How to Avoid Muddy Colors Part 2: Mixing Temperatures:',
                'CourseDetailDesc' => "In this video we bring together everything we've learnt so far into one palette.",
                'CourseDetailVideo' => 'https://youtu.be/en7uvdLbYkM',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 23,
                'CourseDetailTitle' => 'Tints, Shades, and Tones',
                'CourseDetailDesc' => "This video is like getting 2 for the price of 1! I discuss tints, shades, and tones while testing and reviewing a gouache brand I've never used before!",
                'CourseDetailVideo' => 'https://youtu.be/lPvH27EhfOk',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 23,
                'CourseDetailTitle' => 'Mutes, Undertones, Neutrals',
                'CourseDetailDesc' => "This is the last of the super deep dive technical color vocab vids before we start applying these concepts to fashion design and illustration. This video covers mutes, what they are, how to use them, how understanding them will help you mix all sorts of colors and neutrals, how to pick neutrals that work well with what colors, all kinds of stuff.",
                'CourseDetailVideo' => 'https://youtu.be/d6BBP9w39fU',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 23,
                'CourseDetailTitle' => 'Color Theory Applied to Fashion Design',
                'CourseDetailDesc' => "Concepts discussed in this video include monochromatic, analogous, and complementary color schemes; value usage and placement and how it affects proportions and focal points; how complementary color schemes are more than just bright jarring opposites.",
                'CourseDetailVideo' => 'https://youtu.be/Rv-oMZebBEU',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 24,
                'CourseDetailTitle' => 'How To Balance Your Color Palette – The 60-30-10 Rule',
                'CourseDetailDesc' => "How much of a color should you use? Are there rules for how to use a color palette? In this video, Greg Gunn explains the foundation of how to use and balance your color palette using the 60/30/10 rule.",
                'CourseDetailVideo' => 'https://youtu.be/V-SD_zV9S2c',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 24,
                'CourseDetailTitle' => 'Quick Tips for Selecting Color Combinations Using Harmonies',
                'CourseDetailDesc' => "Why do some colors look great together? How do you make color schemes that work? Using color harmony will help you choose the right colors for your project. The Futur’s resident color expert, Greg Gunn, will walk you through the different color harmonies you need to know to make meaningful color palettes for your branding project.",
                'CourseDetailVideo' => 'https://youtu.be/p6SkfMIREHA',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 24,
                'CourseDetailTitle' => 'How to Apply a Color Palette to Your Design – Tutorial',
                'CourseDetailDesc' => "In this video, The Futur Creative Director, Greg Gunn, shares a handy color trick known as the 60-30-10 rule. He’ll explain what the rule is and how you can use it to give balance to your color palette. By the end of this video, you will understand how to come up with your own color ratio and give your palette purpose and consistency, wherever it is used.",
                'CourseDetailVideo' => 'https://youtu.be/eXcKOqviLE0',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 4,
                'CourseDetailTitle' => 'Panels & Workspaces in Adobe Illustrator',
                'CourseDetailDesc' => "In this video we are going to take a closer look at artboards in Adobe illustrator. Topics Covered The Artboard panel and Artboard tool, Enjoy!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=2E9oGKd0Ayg&list=PLYfCBK8IplO4X-jM1Rp43wAIdpP2XNGwP&index=4',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 4,
                'CourseDetailTitle' => 'Artboards in Adobe Illustrator',
                'CourseDetailDesc' => "https://www.youtube.com/watch?v=9GbLm_WXWwk&list=PLYfCBK8IplO4X-jM1Rp43wAIdpP2XNGwP&index=5",
                'CourseDetailVideo' => 'In this tutorial I am going to talk about how creative elements work and how we can begin to operate in illustrator. In this video you will get a good understanding of the basics so we can move on later and start building our own creative elements.',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 4,
                'CourseDetailTitle' => 'Vector basics | Selection & Direct selection tool & more',
                'CourseDetailDesc' => "In this tutorial I am going to talk about Fill & Stroke effects in adobe Illustrator. We’ll be covering Stroke effects, Stroke align effects, Stroke corner effects, Stroke dash effects, and Arrowhead effects.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=GFY0_EMVYDw&list=PLYfCBK8IplO4X-jM1Rp43wAIdpP2XNGwP&index=6',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 5,
                'CourseDetailTitle' => 'HOW TO USE THE PEN TOOL - Adobe Illustrator',
                'CourseDetailDesc' => "Learn the basics of the Pen Tool to create a simple Spiderman illustration in this detailed Adobe Illustrator tutorial! We’ll learn how anchor points work, what tangent handles are, why the Pen Tool is so frustrating when you just try to draw with it, how to adjust fills and strokes for your lines and shapes, how to use the Curvature Pen Tool, the Shaper Tool, and a bunch more to create this cool Spiderman style head.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=tXpnKlUMZQA&list=PLwnXQvUxjbNsvCG_rJJ8vzhbqtEjphKsf&index=3&themeRefresh=1',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 5,
                'CourseDetailTitle' => 'The Golden Ratio for Logo or Icon Design in Illustrator',
                'CourseDetailDesc' => "CREATE THE GOLDEN RATIO SPIRAL AND A LOGO MARK WITH THIS TUTORIAL! | We’ll create the Golden Ratio rectangle from scratch in this tutorial and you'll see how easy, fun, and useful this technique can really be!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=6bkVu2xtypw&list=PLwnXQvUxjbNsvCG_rJJ8vzhbqtEjphKsf&index=5',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 5,
                'CourseDetailTitle' => '13 beginner tips and tricks for Adobe Illustrator',
                'CourseDetailDesc' => "If you’re new to Illustrator, this video will be perfect for you! We’ll learn about some of the things that changed my design-life in Adobe Illustrator when I learned about them. This video covers live shapes, snap to point, the pathfinder, global colors, calligraphic brushes, and much more!",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=cubZGKpajXU&list=PLwnXQvUxjbNsvCG_rJJ8vzhbqtEjphKsf&index=5&themeRefresh=1',
                'day' => 5
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 6,
                'CourseDetailTitle' => 'Adobe Illustrator CC Tutorial Flat Design',
                'CourseDetailDesc' => "In this Adobe Illustrator CC tutorial we will learn to create a sleek  design. If you don't understand any part of the video tutorial, please let me know in the comments section, with the timing of that particular part of the video, I will be more than obliged to respond, if I can.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=rPXB8yWbyI0&list=PLrdZb8zHBvYR3RVcte76JYTqdzVMriplD&index=4',
                'day' => 3
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 6,
                'CourseDetailTitle' => 'Adobe Illustrator CC Tutorial Flat Design',
                'CourseDetailDesc' => "In this Adobe Illustrator CC tutorial we will learn to create a Flat Magic Potion Bottle Design for Beginners. If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can. The Color Palates are included at the end of the video. And if you also have any other Question, about Adobe Illustrator CC, or any other Software's that I have tutorials for, on my Channel,  I will try to solve that problem of yours if I can.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=KxA_Q8edrNI&list=PLrdZb8zHBvYR3RVcte76JYTqdzVMriplD&index=5',
                'day' => 4
            ]
        );

        CourseDetail::create(
            [
                'course_id' => 6,
                'CourseDetailTitle' => 'Adobe Illustrator CC Tutorial Flat Design of a Shoe',
                'CourseDetailDesc' => "In this Adobe Illustrator CC tutorial we will learn to create a Flat Shoe  Design for Beginners. If you don't understand any part of the video tutorial, please let me know in the comments section, with timing of that particular part of illustrator cc video tutorial , I will be more than obliged to respond, if I can. The Color Palates are included at the end of the video. And if you also have any other Question, about Adobe Illustrator CC, or any other Software's that I have tutorials for, on my Channel,  I will try to solve that problem of yours if I can.",
                'CourseDetailVideo' => 'https://www.youtube.com/watch?v=MbyDe-iIzR4&list=PLrdZb8zHBvYR3RVcte76JYTqdzVMriplD&index=6',
                'day' => 5
            ]
        );

        // CourseDetail::create(
        //     [
        //         'course_id' => ,
        //         'CourseDetailTitle' => '',
        //         'CourseDetailDesc' => "",
        //         'CourseDetailVideo' => '',
        //    
        //         'day' =>
        //     ]
        // );
    }
}
