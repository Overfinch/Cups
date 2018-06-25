@foreach($categories as $category)
     <ul>
         <li>
             <a href="{{url('category/'.$category->id.'-'.$category->slug)}}">{{$category->name}}</a>
         </li>
     @if(count($category->children) > 0)
         @include('categories.tree', [
             'categories' => $category->children
         ])
     @endif
     </ul>
 @endforeach