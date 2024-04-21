<x-client-layout>
@section('header')
    <x-client.navbar page="books" /> 
@endsection
 
<div class="w-full m-auto mt-10 flex flex-col gap-5">
    <x-success-message/>
        <x-error-message/>
        <div class="flex space-x-10 w-full bg-white rounded-md p-5">
                <div class="w-1/4">
                    <img src="{{asset('storage/' . $book->image->path)}}" alt="">
                </div>
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
                            <p class="text-xl  font-medium px-4">Number of pages: <span class="text-gray-700 font-normal ">{{$book->pagesNumber}} pages</span></p> 
                            <p class="text-xl  font-medium px-4">Language: <span class="text-gray-700 font-normal ">{{$book->language}}</span></p> 
                        </div>
                        <p class="text-xl font-medium px-4">Description: <span class="text-gray-700 font-normal">{{$book->description}}</span></p> 

                    </div>    
                    <div class="flex justify-between px-10 ">
                        <div onclick="openReview()" class="cursor-pointer flex space-x-3">
                            <div class="flex text-xl p-1 gap-1 ">
                                                       
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $stars)
                                    <i class="fas fa-star text-yellow-600"></i>
                                @else
                                    <i class="far fa-star" ></i>
                                @endif
                            @endfor
                        </div>                            
                            <p >12<span class="text-sm font-semibold"> reviews</span> </p>
                        </div>
                </div>
                <div class="flex justify-end mr-2">
                          <button class="bg-black text-white border-xl flex space-x-2 rounded-xl py-2 px-8">
                             <i class="fas fa-shopping-basket mt-1"></i> <span>Reserve</span>
                          </button>
                      </div>
                </div>
            </div>
            <div class="w-11/12 m-auto mt-20 flex justify-evenly">
    <x-client.articles-bookPage :posts="$posts"/>

    <x-client.side-cards :authors="$authors" :genres="$genres" :books="$topBooks"/></div>

    <div id="review" class=" hidden min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover">
            <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
            <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
                               
                    <form method="POST"  action="{{route('review.store') }}" class="space-y-4" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <div class="rating">
                        <input value="5" name="starsCount" id="star5" type="radio">
                        <label title="text" for="star5"></label>
                        <input value="4" name="starsCount" id="star4" type="radio">
                        <label title="text" for="star4"></label>
                        <input value="3" name="starsCount" id="star3" type="radio">
                        <label title="text" for="star3"></label>
                        <input value="2" name="starsCount" id="star2" type="radio">
                        <label title="text" for="star2"></label>
                        <input value="1" name="starsCount" id="star1" type="radio">
                        <label title="text" for="star1"></label>
                    </div>
                      <button class="bg-black text-white">
                        add
                      </button>
                </form>
            </div>
        </div>
</div>
<style>
    .rating:not(:checked) > input {
  position: absolute;
  appearance: none;
}

.rating:not(:checked) > label {
  float: right;
  cursor: pointer;
  font-size: 30px;
  color: #666;
}

.rating:not(:checked) > label:before {
  content: '★';
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
  color: #e58e09;
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
  color: #ff9e0b;
}

.rating > input:checked ~ label {
  color: #ffa723;
}




</style>
<script>
    function openReview(){
        document.getElementById('review').classList.remove('hidden');
    }
    function CloseReview(){
        document.getElementById('review').classList.add('hidden');
    }
</script>
</x-client-layout>