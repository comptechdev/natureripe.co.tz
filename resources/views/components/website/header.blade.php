
<div class="flex justify-center py-5 space-x-5 text-md font-semibold bg-slate-200 text-red-500 shadow-lg items-center">
    <!-- Well begun is half done. - Aristotle -->
    <x-website.header.item title="HOT SOURCES"></x-website.header.item>
    <x-website.header.item title="RECEPIES"></x-website.header.item>
    <x-website.header.item title="ABOUT"></x-website.header.item>
    <div class="">
        <img src="{{ asset('img/FRESH.png') }}" alt="fresh" class="h-16">
    </div>
    <x-website.header.item title="OUR HOME"></x-website.header.item>
    <div class="border-2 border-red-600 hover:bg-red-600 hover:text-white w-40">
     <a href="#" class="p-2">BUY ONLINE</a>
    </div>

    <div class="md:hidden flex items-center">
	<button class="outline-none mobile-menu-button">
		<svg
			class="w-6 h-6 text-gray-500"
			x-show="!showMenu"
			fill="none"
			stroke-linecap="round"
			stroke-linejoin="round"
			stroke-width="2"
			viewBox="0 0 24 24"
			stroke="currentColor"
		>
		<path d="M4 6h16M4 12h16M4 18h16"></path>
		</svg>
	</button>
</div>
<div class="hidden mobile-menu">
	<ul class="">
        <li><x-website.header.item title="OUR HOME" :show="true"></x-website.header.item></li>
        <li><x-website.header.item title="OUR HOME"></x-website.header.item></li>
        <li><x-website.header.item title="OUR HOME"></x-website.header.item></li>
	</ul>
</div>


<script>
	// Grab HTML Elements
	const btn = document.querySelector("button.mobile-menu-button");
	const menu = document.querySelector(".mobile-menu");

	// Add Event Listeners
	btn.addEventListener("click", () => {
	menu.classList.toggle("hidden");
	});
</script>

    

</div>

</div>

