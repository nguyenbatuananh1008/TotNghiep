<section class="news">
    <div class="container news-content">
        <h2 class="section-title text-center">Tin tức, thông tin bất động sản</h2>
        <div class="list-news">
            <div class="hot-news">
                <h4>March 1, 2020</h4>
                <a href="#">
                    <img src="{{ asset('images/preloader.gif') }}" data-src="{{ asset('images/project/4.jpg') }}" alt="" class="lazy">
                </a>
                <div class="hot-news__info">
                    <h3>
                        <a href="#">Zumper National Rent Report</a>
                    </h3>
                    <p class="main-info">The Zumper National Rent Report analyzes rental data from over 1 million active listings across the United Sta…</p>
                    <a href="#" class="btn btn-blue">Chi tiết</a>
                </div>
            </div>
            <div class="sub-news">
                @for ($i = 0; $i < 4; $i++)
                    <div href="#" class="item-sub">
                        <div>Personal Finance</div>
                        <a href="#">
                            <img src="{{ asset('images/preloader.gif') }}" data-src="{{ asset('images/project/4.jpg') }}" alt="" class="lazy">
                            <h3>
                                How to Lower Your Utility Bill
                            </h3>
                            <div>Read more</div>
                        </a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
