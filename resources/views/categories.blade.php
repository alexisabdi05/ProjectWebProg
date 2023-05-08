@extends('master')
@section('Title','Categories')
@section('Style','/css/categories.css')
@section('content')
@include('include.form')
<p>Categories</p>

<div class="cate">
    <ul>
        <li>
            <img src="../Asset/Ps.svg" alt="">
            <div class="box"></div>
            <h1>Adobe Photoshop</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/Ai.svg" alt="">
            <div class="box"></div>
            <h1>Adobe Illustrator</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/Canva.svg" alt="">
            <div class="box"></div>
            <h1>Canva</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/graphicDesign.svg" alt="">
            <div class="box"></div>
            <h1>Graphic Design</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/logoDesign.svg" alt="">
            <div class="box"></div>
            <h1>Logo Desgin</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/figureDraw.svg" alt="">
            <div class="box"></div>
            <h1>Figure Draw</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/cartoon.svg" alt="">
            <div class="box"></div>
            <h1>Cartoon</h1>
            <h2>50+ Courses →</h2>
        </li>
        <li>
            <img src="../Asset/colorTheory.svg" alt="">
            <div class="box"></div>
            <h1>Color Theory</h1>
            <h2>50+ Courses →</h2>
        </li>
    </ul>
</div>

<p class="course">Courses</p>

<ul class="courses">
    <div class="layout">


    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
    <li class="cour">
        <div></div>
        <h3>Adobe Photoshop Essential</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam augue odio, dapibus sit amet vulputate ut.</h4>
        <h5>See more →</h5>
    </li>
</div>
</ul>
@include('layout/footer')
