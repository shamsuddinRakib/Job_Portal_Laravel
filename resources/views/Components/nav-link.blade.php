 {{-- following props is a blade componets that indicates that anything inside is should not be consider as attributes --}}
 @props(['active'])
 
 <a class="{{ $active? 'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white' }}rounded-md px-3 py-2 text-sm font-medium text-white"
  aria-current="page" {{$attributes}}>{{$slot}}</a> 
  {{-- $attributes means copy all the attributes from our custom html tag in this case href will appear here --}}