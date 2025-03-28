<div class="search-page container-full">
    @include('pages.search.include._inc_filter_search')
    <div class="search-page__box-project">
        @include('pages.search.include._inc_box_search')
        @if(detectDevice() == 'mobile')
            <div class="box-filter">
                <div class="box">
                    <a href="" class="js-show-filter-sort"><i class="fa fa-sort-amount-asc"></i> Sắp xếp</a>
                    <a href="" class="js-show-filter"><i class="fa fa-filter"></i> Lọc</a>
                </div>

                <div class="drop-down-filter">
                    <ul class="">
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  5]) }}" class="{{ \Request::get('sort') == 5 ? 'active' : '' }}"> Giờ sớm nhất </a> </li>
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  6]) }}" class="{{ \Request::get('sort') == 6 ? 'active' : '' }}"> Giờ muộn nhất </a> </li>
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  1]) }}" class="{{ \Request::get('sort') == 1 ? 'active' : '' }}"> Mới nhất </a> </li>
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  2]) }}" class="{{ \Request::get('sort') == 2 ? 'active' : '' }}"> Cũ nhất </a> </li>
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  3]) }}" class="{{ \Request::get('sort') == 3 ? 'active' : '' }}"> Giá cao đến thấp </a> </li>
                        <li> <a  href="{{ request()->fullUrlWithQuery(['sort' =>  4]) }}" class="{{ \Request::get('sort') == 4 ? 'active' : '' }}"> Giá thấp đến cao </a> </li>
                    </ul>
                </div>
            </div>
        @endif
        @if(isset($route))
            <h1>{{ $route->name }} có <b>{{ $buses->total() ?? 0 }}</b> vé</h1>
        @else
            <h2>Kết quả tìm kiếm : Có {{ $buses->total() ?? 0 }} chuyến xe</h2>
        @endif
        <div class="list-project">
            @foreach($buses ?? [] as $key => $item)
                <div class="project">
                    @if(isset($item->guest))
                        <div class="project__img">
                            <a href="{{ route('get.garage.detail',['slug' => $item->guest->slug ?? '','id' => $item->b_guest_id]) }}"
                               title="{{ $item->guest->name ?? "" }}">
                                <img data-src="{{ pare_url_file($item->vehicle->v_avatar ?? '' ) }}"
                                     alt="{{ $item->vehicle->v_name ?? "" }}" src="{{ asset('images/preloader.gif') }}"
                                     class="lazy">
                            </a>
                        </div>
                    @endif
                    <div class="project__info">
                        @if(isset($item->guest))
                            <h3>
                                <a href="{{ route('get.garage.detail',['slug' => $item->guest->slug,'id' => $item->b_guest_id]) }}"
                                   title="{{ $item->guest->name ?? "" }}" target="_blank"
                                   title="{{ $item->guest->name ?? "" }}">
                                    {{ $item->vehicle->v_name ?? "" }}
                                </a>
                                <span class="start">
                                <i class="fa fa-star"></i>
                                @if($item->guest->vote_total)
                                        <b>{{ round($item->guest->vote_number / $item->guest->vote_total,2) }}</b>
                                    @endif
                                <b>({{ $item->guest->vote_total }})</b>
                            </span>
                            </h3>
                        @endif
                        <p class="place">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            {{ $item->vehicle->v_name ?? "" }} {{ $item->vehicle->v_number_seats ?? '' }} chỗ
                        </p>
                        <p class="price">
                            {{--                            <i class="fa fa-usd" aria-hidden="true"></i>--}}
                            <span>Từ {{ number_format($item->b_price,0,',','.') }} đ</span>
                        </p>
                        <div class="from-to">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="14" height="74" viewBox="0 0 14 74">
                                <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2"
                                      stroke-dasharray="0 7" d="M7 13.5v46"></path>
                                <g fill="none" stroke="#484848" stroke-width="3">
                                    <circle cx="7" cy="7" r="7" stroke="none"></circle>
                                    <circle cx="7" cy="7" r="5.5"></circle>
                                </g>
                                <path d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                      fill="#787878"></path>
                            </svg>
                            <div class="from-to-content">
                                @php
                                    \Carbon\Carbon::setLocale('vi');
                                    $timeStart = (new \Carbon\Carbon($item->b_time_start));
                                    $timeStop  = (new \Carbon\Carbon($item->b_time_stop));
                                    $duration  = $timeStop->diffInMinutes($timeStart);
                                @endphp
                                <div class="content from">
                                    <div class="hour">{{ $timeStart->format('H:i') }}</div>
                                    <div class="place">• {{ $item->starting->loc_name ?? '' }}</div>
                                </div>
                                <div class="duration">{{ renderTimeDistance($duration) ?? 0 }}</div>
                                <div class="content to">
                                    <div class="hour">{{ $timeStop->format('H:i') }}</div>
                                    <div class="place">• {{ $item->destination->loc_name ?? '' }}</div>
                                </div>
                            </div>
                        </div>
                        @if(isset($item->vehicle) && $item->vehicle->v_tags)
                            @php
                                $tags = explode(',', $item->vehicle->v_tags)
                            @endphp
                            <div class="tags" >
                                @foreach($tags as $tag)
                                    <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                        <div class="footer">
                            <a href="#"
                               data-key="{{ $item->id }}"
                               title="" class="js-quick-view" data-id="{{ $item->id }}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                Chi tiết
                            </a>
                            <a href="{{ route('get.ticket.process', $item->id) }}" target="_blank" title="Đặt vé"
                               class="btn btn-xs" data-class="js-book-ticket">Đặt vé</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if($buses)
            {{ $buses->appends($query ?? [])->links('vendor/pagination/default') }}
            @endif
        </div>
        <div class="search-relative">
            @if(isset($pageContent) && $pageContent)
                <h2 class="main-key">
                    <a href="#">{{$pageContent->name}}</a>
                </h2>
                <div class="description">{!! $pageContent->content !!}</div>
            @endif
        </div>
    </div>
    <div class="search-page__box-sidebar" id="html-content-quick-view">
        <div class="timeline-wrapper">
            <div class="timeline-item">
                <div class="animated-background">
                    <div class="background-masker content-first-end"></div> {{--right--}}
                    <div class="background-masker first-line"></div> {{--Hàng trắng--}}

                    <div class="background-masker content-second-end"></div> {{--right--}}
                    <div class="background-masker second-line"></div> {{--Hàng trắng--}}

                    <div class="background-masker content-third-end"></div>
                    <div class="background-masker third-line"></div>
                    <div class="background-masker line-4"></div>
                    <div class="background-masker line-5"></div>
                    <div class="background-masker line-6"></div>

                    <div class="background-masker content-4-end"></div>
                    <div class="background-masker line-7"></div>
                    <div class="background-masker line-8"></div>
                    <div class="background-masker line-9"></div>
                    <div class="background-masker line-10"></div>
                    <div class="background-masker line-11"></div>
                    <div class="background-masker line-12"></div>
                    <div class="background-masker content-line-12-end"></div>
                    <div class="background-masker line-13"></div>
                </div>
            </div>
        </div>

    </div>
</div>