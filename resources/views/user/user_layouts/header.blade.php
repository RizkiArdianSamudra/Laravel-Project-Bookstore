<div class="sticky top-0 bg-[#27ae60] border-b-2 border-black/50">
    <nav class="flex justify-between items-center px-20 py-3">
        <div class="flex items-center">
            <svg class="icon icon-tabler icon-tabler-book-2 w-10 text-[#219150]" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z"></path><path d="M19 16h-12a2 2 0 0 0 -2 2"></path><path d="M9 8h6"></path></svg>
            <button class="text-white font-bold text-2xl">Toko Buku Nusantara</button>
        </div>
        <div class="flex items-center">
            <a href="/user" class="navLink{{ Request::is('user') ? ' aktif' : '' }} px-4 py-1 text-white hover:underline rounded-full ml-10">Home</a>
            <a href="/user/buku" class="navLink{{ Request::is('user/buku') ? ' aktif' : '' }} px-4 py-1 text-white hover:underline rounded-full ml-10">Buku</a>
            <form action="/user/logout" method="POST">
                @csrf
                <button type="submit" class="px-4 py-1 text-white hover:underline rounded-full ml-10">Logout</button>
            </form>
        </div>
    </nav>
</div>