 <div class="">
     <h1 class="text-center py-5">Create Country</h1>
     <form class="flex items-center justify-center gap-x-6" action="{{ route('country.store') }}" method="post">
         @csrf
         <input name="name" class="border px-3 py-2 rounded-xl w-1/2" placeholder="Insert a valid country name"
             type="text">
         <button class="bg-black text-white px-8 py-2 rounded-xl">Save</button>
     </form>

     <div class="py-5 px-8 grid grid-cols-5 gap-3">
         @forelse ($countries as $country)
             <div class="py-8 px-16 flex items-center justify-center border">
                 {{ $country->name }}
             </div>
         @empty
             <h1 class=" text-center text-black/20">No country exist at the moment</h1>
         @endforelse
     </div>
