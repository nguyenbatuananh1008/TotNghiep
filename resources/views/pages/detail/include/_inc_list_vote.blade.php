<div class="tab-content-item" id="tab-review">
    <div class="text-item description">
        <div class="lists-vote">
            <div class="box-30 dashboard">
                @php
                    $age  = 0;
                    if($garage->vote_total)
                    {
                        $age = round($garage->vote_number / $garage->vote_total, 2);
                    }
                @endphp
                <p class="first"><span>{{ $age }}</span> <span class="total"> / {{ $garage->vote_total }}</span></p>
                <p>
                    @for($i = 1 ; $i <= 5 ; $i ++)
                        <i class="fa {{ $age >= $i ? 'fa-star selected' : 'fa-star-o ' }}"
                           style="color: rgb(255, 255, 255);"></i>
                    @endfor
                </p>
            </div>
            <div class="votes-lists">
                @foreach($ratingDefault as $item)
                    @php
                        $ageItem = 0;
                        if($item['total'])
                        {
                            $ageItem = round($item['total'] / $item['count_number'], 2);
                        }
                        $percentItem = round($ageItem / 5,2) * 100;
                    @endphp

                    <div class="item">
                        <div>{{ $typeVote[$item['v_type']]['name'] }}</div>
                        <div class="process-vote">
                            <p class="process">
                                <span class="progress-bar" style="width: {{ $percentItem }}%"></span>
                            </p>
                            <span>{{ $ageItem }} <i class="fa fa-star"></i></span>
                        </div>
                    </div>
                @endforeach
                <div style="clear: both"></div>
            </div>
        </div>
        <h4 class="mt20">Đánh giá chi tiết từ khách hàng</h4>
        <div class="lists-vote-db mt10">
            @foreach($votes ?? [] as $item)
                <div class="item">
                    <p class="vote">
                        @for($i = 1 ; $i <= 5 ; $i ++)
                            <i class="fa fa-star {{ $item->v_number >= $i ? ' selected' : '' }}"
                               style="color: rgb(255, 255, 255);"></i>
                        @endfor
                    </p>
                    <p class="auth">Đánh giá bởi <b><i>{{ $item->user->name ?? "[N\A]" }}</i></b></p>
                    <p class="content">{{ $item->v_content }}</p>
                    <p><i class="fa fa-clock"></i>{{ $item->created_at->format('Y-m-d') }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>