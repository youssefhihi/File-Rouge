 <x-admin-layout>
<x-success-alert/>

<div class="w-11/12 m-auto mt-10 flex flex-col gap-5">
        <div class="flex space-x-10 w-full bg-white rounded-md p-5">
                <a href="" class="w-1/4 drop-shadow-2xl">
                    <img src="{{asset('storage/' . $book->image->path)}}" alt="" class="drop-shadow-2xl">
                </a>
                <div class="flex flex-col gap-5  w-3/4">
                    <div class="flex flex-col gap-4">
                        <p class="text-3xl font-bold text-center mb-2">{{$book->title}}</p>
                        <p class="text-xl font-medium  px-4">Author : <span class="text-gray-700  font-normal hover:underline">{{$book->author->name}}</span></p>
                        <p class="text-xl  font-medium px-4">Genre: <span class="text-gray-700 font-normal hover:underline">{{$book->genre->name}}</span></p> 
                        <div class="flex justify-between max-w-xl">
                            <p class="text-xl  font-medium px-4">Publication Date: <span class="text-gray-700 font-normal ">{{$book->publicationDate}}</span></p> 
                            <p class="text-xl  font-medium px-4">Edition: <span class="text-gray-700 font-normal ">{{$book->edition}}</span></p> 
                        </div>
                        <div class="flex justify-between max-w-xl">
                            <p class="text-xl  font-medium px-4">Number of pages: <span class="text-gray-700 font-normal ">{{$book->PagesNumber}} pages</span></p> 
                            <p class="text-xl  font-medium px-4">Language: <span class="text-gray-700 font-normal ">{{$book->language}}</span></p> 
                        </div>
                        <p class="text-xl font-medium px-4">Description: <span class="text-gray-700 font-normal">{{$book->description}}</span></p> 

                    </div>    
                    <div class="flex justify-between px-10 ">
                        <div class="flex space-x-3">
                            @for ($i = 0; $i < 5; $i++)
                            @if ($i < intval($book->reviews->avg('starsCount')))
                                <i class="fas fa-star text-yellow-600"></i>
                            @else
                                <i class="far fa-star" ></i>
                            @endif
                            @endfor             
                            <p >{{$book->reviews->count()}}<span class="text-sm font-semibold"> reviews</span> </p>
                        </div>
                </div>
                </div>
            </div>
</x-admin-layout>
