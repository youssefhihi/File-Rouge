<!-- component -->
<!-- This is an example component -->

<x-admin-layout>
<div class="px-20">
    
    <form action="{{route('books.update',$book->ISBN)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class=" flex flex-col gap-5">
        <div class="grid xl:grid-cols-2 xl:gap-6">
            <x-image-input path="{{asset('storage/' . $book->image->path)}}" page="book" class="h-72 w-52 rounded-sm"/>                  
                <div class=""> 
                <div class="relative z-0 mb-6 w-full group">
                    <label for="isbn" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        ISBN
                    </label>
                    <input type="hidden"  value="{{$book->ISBN}}" name="ISBN"/>
                    <p class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer"> 
                    {{$book->ISBN}}
                    </p>                
                </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="title" id="title" value="{{$book->title}}" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
                        <label for="title" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Title
                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group ">
                        <label for="genre" class="text-gray-500 dark:text-black ">
                            Genre</label>
                            <select name="genre_id" id="genre" class="block py-2.5 px-3 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 ">
                                @foreach ( $genres as $genre )    
                                @if ($genre->name === $book->genre->name)                            
                                <option value="{{$genre->id}}" selected>{{$genre->name}}</option>           
                                @else                                
                                <option value="{{$genre->id}}">{{$genre->name}}</option>
                                @endif                        
                                @endforeach  
                            </select>                        
                        </div>
                    </div>
                </div>
                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="edition" id="edition" value="{{$book->edition}}" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
                        <label for="edition" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Edition
                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="publication date" class="text-gray-500 dark:text-black ">Publication Date</label>
                        <input type="date" name="publicationDate" value="{{$book->publicationDate}}" id="floating_first_name" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder=" " required />
                    </div>
                </div>
                
                <div class="grid xl:grid-cols-2 xl:gap-6">
                    
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="number" name="quantity" value="{{$book->quantity}}"  id="quantity" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
                        <label for="quantity" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Quantity
                        </label>
                    </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="number" name="pagesNumber" value="{{$book->PagesNumber}}" id="pagesNumber" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
                    <label for="pagesNumber" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Number Of Pages
                    </label>
                </div>
            </div>
            
            <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <label for="floating_email" class="text-gray-500 dark:text-black ">
                            Author</label>
                            <select name="author_id" id="author" class="block py-2.5 px-3 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 ">
                                @foreach ( $authors as $author )                            
                                @if ($author->name === $book->author->name)               
                                <option value="{{$author->id}}" selected>{{$author->name}}</option>           
                                @else                                
                                <option value="{{$author->id}}">{{$author->name}}</option>
                                @endif
                                @endforeach                           
                            </select>   
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="language" class="text-gray-500 dark:text-black ">
                                language</label>
                            <select name="language" id="genre" class="block py-2.5 px-3 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 ">
                                <option value="arabic">Arabic</option>
                                <option value="english">English</option>
                                <option value="french">French</option>
                            </select>  
                    </div>
                </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="description" value="{{$book->description}}" id="description" class="block py-2.5 px-0 w-full text-md  bg-transparent border-0 border-b-2 border-gray-800 appearance-none  dark:border-black dark:focus:border-gray-500 focus:outline-none focus:ring-0 focus:border-gray-600 peer" placeholder=" " required />
                <label for="description" class="absolute text-md text-gray-500 dark:text-black duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-ray-600 peer-focus:dark:text-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Description
                </label>
            </div>		
        </div>	
        <div class="w-full max-w-3xl flex justify-center p-5 ">
		<button type="submit" class="text-white bg-black w-full hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm mx-auto px-5 py-2.5 text-center  dark:hover:bg-gray-700 dark:focus:ring-gray-800">Submit</button>
	    </div>	
    </form>
    </div>
    <x-error-alert :messages="$errors->all()" />
</x-admin-layout>
