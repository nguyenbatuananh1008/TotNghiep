<div class="col-sidebar">
    <div class="box">
        <h4>
            <span class="icon"><i class="fa fa-th"></i></span>
            <span class="text">Danh mục</span>
        </h4>
        <ul class="ul-categories">
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi THPT</span> <span
                            class="number">{{ rand(20,100) }}</span>
                </a>
                <div class="sub-menu">
                    @for ($j = 1 ; $j <= 10 ; $j ++)
                        <div class="sub-menu-item">
                            <a href="{{ route('document.category') }}">Menu cấp 2</a>
                        </div>
                    @endfor
                </div>
            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 10</span> <span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 11</span> <span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 12</span> <span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 6 </span><span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 7 </span><span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 8 </span><span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
            <li>
                <a href="{{ route('document.category') }}"> <span class="text"><i class="fa fa-folder"></i>Đề thi lớp 9 </span><span
                            class="number">{{ rand(20,100) }}</span></a>

            </li>
        </ul>
        <div class="line"></div>
        <h4>
            <span class="icon"><i class="fa fa-th"></i></span>
            <span class="text">Hỗ trợ hướng dẫn</span>
        </h4>
        <div class="supports">
            @for ($i = 1 ; $i <= 5; $i ++)
                <div class="item">
                    <img class="lazy loaded" src="https://tailieu247.net/images/icon/icon-call.png" onerror="this.onerror=null;this.src='/images/preloader.png';" data-src="https://tailieu247.net/images/icon/icon-call.png" alt="Hỗ Trợ Hướng Dẫn" data-was-processed="true">
                    <div class="info">
                        <p> <span>Mr Nhật &nbsp;</span> <a href="tel:0877247888" title="Mr Nhật"> 0877.247.888 </a> </p>
                        <p>(Zalo, Gọi điện)</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>