 <div class="border py-8">
     <h1 class="text-center py-5">Create City</h1>
     <form class="flex items-center justify-center gap-x-6" action="/city/store" method="post">
         @csrf
         <input name="name" class="border px-3 py-2 rounded-xl w-1/2" placeholder="Insert a valid country name"
             type="text">

         <select class="border px-2 py-1" name="country_id" id="">
             <option disabled selected value="">Select country</option>
             @foreach ($countries as $country)
                 <option value="{{ $country->id }}">{{ $country->name }}</option>
             @endforeach
         </select>
         <button class="bg-black text-white px-8 py-2 rounded-xl">Save</button>
     </form>


     {{-- @foreach ($countries as $country)
         <div class="py-4 px-8 border border-red-500">

             <h1 class="font-bold text-xl">{{ $country->name }}</h1>

             @foreach ($country->cities as $city)
                 <h1 class="py-2 border border-green-300">{{ $city->name }}</h1>
             @endforeach
         </div>
     @endforeach --}}

     <hr><hr><hr><hr><hr>


     @foreach ($cities as $city)
         <h1 class="font-bold text-xl">{{ $city->name }}</h1>

         <p>{{ $city->country->name }}</p>
     @endforeach


 </div>
