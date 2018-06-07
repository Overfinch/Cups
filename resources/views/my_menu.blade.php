<ul class="navbar-nav mr-auto">
                @foreach($items as $menu_item)
                        <li class="nav-item">
                                <a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
                                @if(!$menu_item->children->isEmpty())
                                        @include('my_menu', ['items' => $menu_item->children, 'options' => $options, 'innerLoop' => true])
                                @endif

                        </li>
                @endforeach
</ul>