<section class="box-link">
    <div class="container box-link-content">
        <div class="item-link">
            <h5>{{ $title ?? "[N\A]" }}</h5>
            <div class="tab-content">
                @foreach($guests->chunk(4) as $items)
                    <div class="col-3">
                        <ul class="section-link-list">
                            @foreach($items as $key => $item)
                                <li>
                                    <a href="{{ route('get.garage.detail',['slug' => $item->slug,'id' => $item->id]) }}" title="">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>