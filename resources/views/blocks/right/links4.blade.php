<div class="updates">
    <strong>
        Содержание
    </strong>

    <div id="accordion">
        @foreach($navigation->bookLinks as $key=>$link)
            <div class="card">
                <div class="card-header" id="heading-{{ $key }}">
                    <a data-toggle="collapse" data-parent="#accordion" href="#colapse-{{ $key }}">
                        <h5 class="mb-0">{{ $link->name }}</h5>
                    </a>
                </div>
                <?php
                $activeBook = strrpos($property['book'], $key) !== false;
                $activeChapter = (int)explode('_', $property['book'])[1];
                ?>
                <div id="colapse-{{ $key }}" class="collapse{{ $activeBook ? ' show' : '' }}" role="tabpanel">
                    <div class="card-body">
                        <ul class="pagination">
                            <li class="page-item{{ $activeBook && 0 == $activeChapter ? ' active' : '' }}">
                                <a class="page-link ru-link" href="{{ asset('comment?book=' . explode('_', $property['book'])[0] . '_000') }}">
                                    <span>0</span>
                                </a>
                            </li>
                            @foreach($navigation->numberLinks[$key] as $page)
                                <li class="page-item{{ $activeBook && (int)explode('_', $page->c)[1] == $activeChapter ? ' active' : '' }}">
                                    <a class="page-link ru-link" href="{{ asset('comment'.$page->href) }}">
                                        <span>{{ (int)explode('_', $page->c)[1] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('blocks.right.two')