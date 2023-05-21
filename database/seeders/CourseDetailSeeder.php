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
    }
}
