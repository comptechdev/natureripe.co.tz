@extends('layouts.website')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2">
    <x-website.about.rece />
    <div class="grid grid-cols-1 md:grid-cols-2">
        <x-website.about.recepies background="{{ asset('img/bk2.jpg') }}" title="PILIPILI MBUZI" titlestyle="text-red-600 text-2xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
        <x-website.about.recepies background="{{ asset('img/bk3.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-yellow-600 text-xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/>
        <x-website.about.recepies background="{{ asset('img/bk4.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-blue-600 text-xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
        <x-website.about.recepies background="{{ asset('img/bk5.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-green-600 text-xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
   </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4">
    <x-website.about.recepies background="{{ asset('img/bk6.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-yellow-600 text-2xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
    <x-website.about.recepies background="{{ asset('img/bk7.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-pink-600 text-2xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
    <x-website.about.recepies background="{{ asset('img/bk8.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-pink-600 text-2xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
    <x-website.about.recepies background="{{ asset('img/bk9.jpg') }}" title="RED PILIPILI MBUZI" titlestyle="text-pink-600 text-2xl font-extrabold" description="Tailwind lets you conditionally apply utility classes in different states"/> 
</div>
@endsection