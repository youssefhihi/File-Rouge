<x-client-layout>
    @section('header')
    <x-client.navbar page="feed" /> 
    @endsection     

    <x-client.articles  :posts="$posts" page="pp"/>
    <x-client.side-cards :genres="$genres" :books="$books" :authors="$authors" />         
</x-client-layout>