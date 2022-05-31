@extends('layouts.website')

@section('content')
<!-- ====== Contact Section Start -->

<div class="container">
    <div class="grid grid-cols-8">
        <div class="col-span-4">
           <div class="py-12 pl-14">
    <h1 class="font-bold">CONTACT US</h1>
    <div class="mt-8 max-w-md">
      <div class="grid grid-cols-1 gap-6">
        <label class="block">
          <span class="text-gray-700">Full name</span>
          <input  type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-400 focus:ring-indigo-200 focus:ring-opacity-50" placeholder=""/>
        </label>
        <label class="block">
          <span class="text-gray-700">Email address</span>
          <input type="email"  class="mt-1 block w-full  rounded-mdborder-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com"/>
        </label>
        <!-- <label class="block">
          <span class="text-gray-700">When is your event?</span>
          <input
            type="date"
            class="
              mt-1
              block
              w-full
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            "
          />
        </label> -->
        <label class="block">
          <span class="text-gray-700">What type inquery?</span>
          <select
            class="
              block
              w-full
              mt-1
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            "
          >
            <option>Choose Inquery</option>
            <option>General Inquery</option>
            <option>Quality Inquery</option>
          </select>
        </label>
        <label class="block">
          <span class="text-gray-700">Additional details</span>
          <textarea
            class="
              mt-1
              block
              w-full
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            "
            rows="3"
          ></textarea>
        </label>
        <label class="block">
          <span class="text-gray-700">What is your favorite flavor?</span>
          <select
            class="
              block
              w-full
              mt-1
              rounded-md
              border-gray-300
              shadow-sm
              focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            "
          >
            <option>Mango Pickle</option>
            <option>Pilipili Mbuzi</option>
            <option>Mango Chill Sauce</option>
            <option>Other</option>
          </select>
        </label>
        <div class="block">
          <div class="mt-2">
            <div>
              <label class="inline-flex items-center">
                <input
                  type="checkbox"
                  class="
                    rounded
                    border-gray-300
                    text-indigo-600
                    shadow-sm
                    focus:border-indigo-300
                    focus:ring
                    focus:ring-offset-0
                    focus:ring-indigo-200
                    focus:ring-opacity-50
                  "
                  checked
                />
                <span class="ml-2">Email me news and special offers</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        </div>
        <div class="col-span-8 md:col-span-4 pt-28 justify-items-center">
            <h2 class="text-2xl md:text-4xl font-bold text-gray-500">Address</h2>
            <p>NatureRipe Kilimanjaro Ltd (NKL)
               743 Mindu Str, <br>Upanga West. P.O. Box 5496</p>
               <h2 class="text-4xl font-bold text-gray-500">Mobile</h2>
               &nbsp;
               <p>Tel: 255-22-2151457 <br>
               Cell phone +255 655 151 457</p>
               <h2 class="text-4xl font-bold text-gray-500">Email</h2>
               <p>info@natureripe.co.tz</p>
               <h2 class="text-4xl font-bold text-gray-500">Website</h2>
               <p>www.natureripe.co.tz</p>
        </div>
    </div>
</div>
@endsection