<x-admin-layout>
 <!-- CONTENT -->
 

    <table class="min-w-full divide-y divide-gray-200 overflow-x-auto mt-10">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    borrower                
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Book
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Duration
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($reservations as $reservation )
                
            <tr>
                 <td class="px-2 py-4 whitespace-nowrap">
                     <div class="flex items-center">
                         <div class="flex-shrink-0">
                         @if ($reservation->client->image)
                         <img class="h-14 w-14 rounded-full" src="{{asset('storage/'. $reservation->client->image->path)}}" alt="">
                        @else
                        @if ($reservation->client->gender === 'female')
                        <img class="h-14 w-14 rounded-full" src="{{asset('imgs/profileFemale.png')}}" alt="">                       
                        @else                       
                        <img class="h-14 w-14 rounded-full" src="{{asset('imgs/profileMale.png')}}" alt="">                       
                        @endif
                        @endif
                         </div>
                         <div class="text-sm font-medium text-gray-900 ml-4">
                             {{$reservation->client->user->name}}
                         </div>
                     </div>
                 </td>
                 <td class="px-5 py-4 whitespace-nowrap">
                     <div class="flex items-center">
                         <div class="flex-shrink-0">
                             <img class="h-20 w-14" src="{{asset('storage/'. $reservation->book->image->path)}}" alt="">
                         </div>
                         
                     </div>
                 </td>
                 <td class="px-6 py-4 whitespace-nowrap text-md text-gray-500">

                     <span>{{ $reservation->daysUntilReturn() }} </span> Days
                 </td>
               
             </tr>
            @empty
                noo
            @endforelse

        </tbody>
    </table>

</x-admin-layout>