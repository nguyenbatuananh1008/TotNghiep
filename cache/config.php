<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'log' => 'daily',
    'log_max_files' => 5,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'Asia/Ho_Chi_Minh',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:S8VyjGrR/GGgOSsdUQ/nkdKVlqO06DrKpseK9XY+XWc=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Artesaos\\SEOTools\\Providers\\SEOToolsServiceProvider',
      27 => 'Spatie\\Permission\\PermissionServiceProvider',
      28 => 'Rap2hpoutre\\LaravelLogViewer\\LaravelLogViewerServiceProvider',
      29 => 'App\\Service\\Email\\MailServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'SEOMeta' => 'Artesaos\\SEOTools\\Facades\\SEOMeta',
      'OpenGraph' => 'Artesaos\\SEOTools\\Facades\\OpenGraph',
      'Twitter' => 'Artesaos\\SEOTools\\Facades\\TwitterCard',
      'JsonLd' => 'Artesaos\\SEOTools\\Facades\\JsonLd',
      'JsonLdMulti' => 'Artesaos\\SEOTools\\Facades\\JsonLdMulti',
      'SEO' => 'Artesaos\\SEOTools\\Facades\\SEOTools',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'users' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'admins' => 
      array (
        'driver' => 'session',
        'provider' => 'admins',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'admins' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\System\\Admin',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
      'admins' => 
      array (
        'provider' => 'admins',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cart' => 
  array (
    'calculator' => 'Gloudemans\\Shoppingcart\\Calculation\\DefaultCalculator',
    'tax' => 21,
    'database' => 
    array (
      'connection' => NULL,
      'table' => 'shoppingcart',
    ),
    'destroy_on_logout' => false,
    'format' => 
    array (
      'decimals' => 2,
      'decimal_point' => '.',
      'thousand_separator' => ',',
    ),
    'pay_type' => 
    array (
      0 => 
      array (
        'name' => 'Chuyển khoản',
        'type' => '1',
        'class' => '',
      ),
      1 => 
      array (
        'name' => 'MOMO',
        'type' => '2',
        'class' => '',
      ),
      2 => 
      array (
        'name' => 'Thẻ Visa/  Mastercard',
        'type' => '3',
        'class' => '',
      ),
      3 => 
      array (
        'name' => 'Thanh toán tại cửa hàng',
        'type' => '4',
        'class' => '',
      ),
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'data' => 
  array (
    'estate' => 
    array (
      0 => 
      array (
        'name' => 'Nhà 3 lầu nằm ngay Bùi Đình Túy, Bình Thạnh, 70m2, hẻm 5m, nhà 1 sẹc, cách mặt tiền 50m ',
        'avatar' => '/images/project/1.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Bình Thạch',
      ),
      1 => 
      array (
        'name' => 'Cho thuê nhà đẹp như hình giá 8 triệu, 1 trệt 1 lầu full nội thất',
        'avatar' => '/images/project/2.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Bình Thạch',
      ),
      2 => 
      array (
        'name' => 'Mua Richmond City?Rất đơn giản chỉ 1,35 tỷ = 1PN - Nhận nhà ngay với 1 tỷ - Giá thuê 2PN chỉ 8tr',
        'avatar' => '/images/project/3.jpg',
        'address' => 'VIP Limousine 12 chỗ',
        'district' => 'Quận 1',
      ),
      3 => 
      array (
        'name' => 'Chính chủ bán nhà số 530A Xô Viết Nghệ Tĩnh, Q.Bình Thạnh KV 300m2 64 tỷ',
        'avatar' => '/images/project/4.jpg',
        'address' => 'VIP Limousine 15 chỗ',
        'district' => 'Quận Tân Bình',
      ),
      4 => 
      array (
        'name' => 'Mua Richmond City?Rất đơn giản chỉ 1,35 tỷ = 1PN - Nhận nhà ngay với 1 tỷ - Giá thuê 2PN chỉ 8tr',
        'avatar' => '/images/project/3.jpg',
        'address' => 'VIP Limousine 11 chỗ',
        'district' => 'Quận 1',
      ),
      5 => 
      array (
        'name' => 'Mua Richmond City?Rất đơn giản chỉ 1,35 tỷ = 1PN - Nhận nhà ngay với 1 tỷ - Giá thuê 2PN chỉ 8tr',
        'avatar' => '/images/project/3.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận 1',
      ),
      6 => 
      array (
        'name' => 'Mua Richmond City?Rất đơn giản chỉ 1,35 tỷ = 1PN - Nhận nhà ngay với 1 tỷ - Giá thuê 2PN chỉ 8tr',
        'avatar' => '/images/project/3.jpg',
        'address' => 'VIP Limousine 16 chỗ',
        'district' => 'Quận 1',
      ),
      7 => 
      array (
        'name' => 'Cho thuê nhà đẹp như hình giá 8 triệu, 1 trệt 1 lầu full nội thất',
        'avatar' => '/images/project/2.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Bình Thạch',
      ),
    ),
    'estate_2' => 
    array (
      0 => 
      array (
        'id' => 1,
        'name' => 'Đức Trọng Limousine',
        'avatar' => '/images/project/1.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Bình Thạch',
        'album' => 
        array (
          0 => 1,
          1 => 3,
          2 => 5,
          3 => 6,
        ),
        'price' => 120000,
        'bedroom' => 3,
        'bathroom' => 3,
        'acreage' => 200,
        'direction' => 'Đông',
        'content' => '- Bộ Xây dựng cho phép xây căn hộ diện tích 25m2: Thông tư 21 vừa được Bộ Xây dựng ban hành, về Quy chuẩn kỹ thuật quốc gia về nhà chung cư.  Theo đó, căn hộ chung cư phải có diện tích sử dụng tối thiểu không nhỏ hơn 25m2. Căn hộ tối thiểu phải có 1 phòng ở, 1 khu vệ sinh và phải được chiếu sáng tự nhiên. Diện tích sử dụng của phòng ngủ không được nhỏ hơn 9m2. Trước đó, việc xây dựng căn hộ chung cư 25m2 đã nhiều lần được mang ra bàn luận.

- Khi môi giới bất động sản “di cư” theo làn sóng đầu tư: Số liệu từ Batdongsan.com.vn cho thấy: tỉ lệ người Hà Nội quan tâm tới bất động sản TP.HCM là 18%, trong khi chỉ có khoảng 4% người TP.HCM quan tâm đến bất động sản Hà Nội. Trên thực tế, từ nhiều năm nay, không chỉ các nhà đầu tư “Nam tiến” mà rất nhiều môi giới phía Bắc cũng theo làn sóng này, di cư vào phía Nam nhằm tìm kiếm cơ hội mưu sinh tốt hơn. Cá biệt, trong những cơn sốt đất của thị trường phía Nam, có những văn phòng nhà đất mở lên toàn môi giới phía Bắc. Thừa nhận cơ hội tại các thị trường phía Nam có thể rộng mở hơn nhưng theo một số môi giới chuyên nghiệp, tố chất, sự nỗ lực, chăm chỉ trong việc trau dồi kiến thức, kĩ năng mới đóng vai trò quyết định đến sự thành bại trong công việc của môi giới bất động sản.',
      ),
      1 => 
      array (
        'id' => 2,
        'name' => 'Tuấn Kiệt Limousine',
        'avatar' => '/images/project/2.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Bình Thạch',
        'album' => 
        array (
          0 => 2,
          1 => 4,
          2 => 6,
          3 => 8,
        ),
        'price' => 150000,
        'bedroom' => 5,
        'bathroom' => 2,
        'acreage' => 250,
        'direction' => 'Tây',
        'content' => '- Tái khởi động loạt dự án BT tại Khu đô thị Thủ Thiêm: TP.HCM sẽ rà soát các hợp đồng BT và khởi động lại việc đầu tư xây dựng 4 tuyến đường chính và Quảng trường trung tâm công viên bờ sông trong Khu đô thị mới Thủ Thiêm. Đối với dự án Khu lâm viên sinh thái thuộc Vùng châu thổ phía Nam của Khu đô thị này, thành phố sẽ đấu thầu chọn nhà đầu tư thực hiện.',
      ),
      2 => 
      array (
        'id' => 3,
        'name' => 'Phú xuyên Limousine',
        'avatar' => '/images/project/3.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận 1',
        'album' => 
        array (
          0 => 10,
          1 => 12,
          2 => 14,
          3 => 16,
        ),
        'price' => 2400000,
        'bedroom' => 9,
        'bathroom' => 5,
        'acreage' => 250,
        'direction' => 'Đông',
        'content' => 'Quý vị đang xem nội dung tin rao \'\'Bán căn hộ 3PN dự án C1 C2 Xuân Đỉnh, hướng ban công Đông Nam, nhà mới chưa ở giá 2,13 tỷ\'\'. Mọi thông tin liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm. Chúng tôi luôn cố gắng để có chất lượng thông tin tốt nhất, nhưng chúng tôi không đảm bảo và không chịu trách nhiệm về bất kỳ nội dung nào liên quan tới tin rao này. Nếu quý vị phát hiện có sai sót hay vấn đề gì xin hãy thông báo cho chúng tôi.',
      ),
      3 => 
      array (
        'id' => 4,
        'name' => 'Cửa Ông Limousine',
        'avatar' => '/images/project/4.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Tân Bình',
        'album' => 
        array (
          0 => 9,
          1 => 11,
          2 => 13,
          3 => 16,
        ),
        'price' => 920000,
        'bedroom' => 4,
        'bathroom' => 2,
        'acreage' => 500,
        'direction' => 'Đông - Tây',
        'content' => 'Mặc dù bảng giá đất chủ yếu được áp dụng để tính thuế, phí cho doanh nghiệp sử dụng đất, nhưng nhiều ý kiến lo ngại việc tăng khung giá đất sẽ tạo tình trạng “tát nước theo mưa”, khiến giá nhà đất leo thang. Ví dụ, một dự án chung cư có vốn đầu tư 100 tỷ đồng, khi bảng giá đất tăng 10%, chủ đầu tư sẽ mất thêm 10 tỷ đồng tiền thuế phí. Do đó, chủ đầu tư có thể mượn cớ giá đất tăng dẫn đến chi phí đầu tư tăng, từ đó thúc đẩy việc tăng giá căn hộ.

“Với các dự án bất động sản nhà ở, tiền đất thường chiếm 10 - 14% giá thành. Khi giá đất tăng gấp rưỡi, con số này sẽ lên đến 25% nên giá bán chắc chắn phải tăng. Không những thế, chi phí về đất tăng còn kéo theo tất cả các sản phẩm liên quan đến ngành xây dựng như xi măng, sắt thép, gạch… cũng sẽ tăng giá. Từ đó đẩy giá thành nhà ở lên cao” - ông Nguyễn Quốc Hiệp, Chủ tịch GP Invest nhận định.

Tuy nhiên, trái ngược với tâm lý lo ngại trên, một số chuyên gia lại dự báo khi bảng giá đất tăng, giá thành của các sản phẩm bất động sản không bị ảnh hưởng quá nhiều.

',
      ),
      4 => 
      array (
        'id' => 5,
        'name' => 'Hoàn anh',
        'avatar' => '/images/project/5.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Tân Bình',
        'album' => 
        array (
          0 => 1,
          1 => 2,
          2 => 3,
          3 => 4,
        ),
        'price' => 1290000,
        'bedroom' => 5,
        'bathroom' => 5,
        'acreage' => 140,
        'direction' => 'Đông - Nam',
        'content' => 'Bà Trần Thị Khánh Linh - Trưởng bộ phận Định giá Savills TP.HCM phân tích: “Nếu theo Luật Đất đai 2013, các dự án bất động sản có giá trị trên 30 tỷ đều không căn cứ vào bảng giá đất mà phải sử dụng cơ sở định giá thị trường để xác định nghĩa vụ tài chính. Do đó việc điều chỉnh khung giá đất nhà nước không ảnh hưởng nhiều đến chi phí đầu vào của các dự án bất động sản, từ đó giá thành các sản phẩm bất động sản cũng không bị ảnh hưởng nhiều”.

Nghĩa vụ tài chính tăng',
      ),
      5 => 
      array (
        'id' => 6,
        'name' => 'Đức Nam Tuấn Kiệt Limousine',
        'avatar' => '/images/project/6.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Tân Bình',
        'album' => 
        array (
          0 => 2,
          1 => 5,
          2 => 10,
          3 => 5,
        ),
        'price' => 1690000,
        'bedroom' => 1,
        'bathroom' => 2,
        'acreage' => 280,
        'direction' => 'Bắc',
        'content' => 'Khi giá nhà tăng “ăn theo” bảng giá đất, một bộ phận khách hàng sẽ không còn đủ khả năng tài chính để mua nhà, từ đó dẫn đến sự sụt giảm giao dịch trên thị trường bất động sản. Mặt khác, giá đất tăng cao cũng khiến cho các doanh nghiệp mới e ngại hoặc gặp khó khăn về vốn khi gia nhập thị trường, do đó nguồn cung ngày càng khan hiếm.

Theo ông Lê Hoàng Châu, Chủ tịch Hiệp hội Bất động sản TP.HCM, bảng giá đất quá cao sẽ đẩy giá thị trường bất động sản lên cao, đặc biệt là đẩy giá đất của các dư án (trên thị trường sơ cấp), đồng thời tác động tiêu cực đến các doanh nghiệp, các ngành kinh tế khác và môi trường đầu tư, kể cả trong việc thu hút dòng vốn FDI.

“Giá đất tăng cao trong thời gian tới sẽ đẩy giá bán nhà lên cao, đồng thời doanh nghiệp cũng càng khó tiếp cận đất đai và càng khó giải phóng mặt bằng. Nhìn chung, thị tr',
      ),
      6 => 
      array (
        'id' => 7,
        'name' => 'Hoàng Hùng Limousine',
        'avatar' => '/images/project/7.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận Hoàn Kiếm',
        'album' => 
        array (
          0 => 1,
          1 => 5,
          2 => 6,
          3 => 10,
        ),
        'price' => 1990000,
        'bedroom' => 8,
        'bathroom' => 3,
        'acreage' => 152,
        'direction' => 'Nam',
        'content' => 'Theo báo cáo tổng kết công tác năm 2019 của Bộ Tài nguyên và Môi trường, nguồn thu từ đất đóng góp tới 11% tổng thu ngân sách Nhà nước. Do đó, sự thay đổi của khung, bảng giá đất sẽ tác động trực tiếp đến nguồn thu ngân sách của Nhà nước từ đất đai và thị trường bất động sản.

Đó là chưa kể khi nghĩa vụ tài chính tăng, một bộ phận người dân sẽ chuyển nhượng nhà đất bằng giấy tờ viết tay thay vì làm đúng thủ tục để giảm bớt tiền thuế, phí, làm tăng “thị trường ngầm” trong giao dịch bất động sản. Hệ quả là vừa làm sụt giảm nguồn thu thuế của Nhà nước, vừa dễ phát sinh tranh chấp sau này.',
      ),
      7 => 
      array (
        'id' => 8,
        'name' => 'Mai Anh Limousine',
        'avatar' => '/images/project/8.jpg',
        'address' => 'VIP Limousine 9 chỗ',
        'district' => 'Quận 9',
        'album' => 
        array (
          0 => 14,
          1 => 15,
          2 => 16,
          3 => 17,
        ),
        'price' => 2290000,
        'bedroom' => 9,
        'bathroom' => 2,
        'acreage' => 440,
        'direction' => 'Tây Nam',
        'content' => '“Nếu biên độ tăng giá trong khung giá đất, bảng giá đất quá lớn thì có thể dẫn đến việc tận thu. Trước mắt, có thể làm cho nguồn thu ngân sách nhà nước tăng, nhưng về lâu dài sẽ lợi bất cập hại, bởi vì có thể dẫn đến doanh nghiệp thu hẹp hơn quy mô sản xuất kinh doanh, người dân không làm được “sổ đỏ” dẫn đến giao dịch ngầm, mà hệ quả là làm sụt giảm nguồn thu của Nhà nước” – ông Lê Hoàng Châu nhận định.

Cũng theo ông Châu, nếu nguồn thu ngân sách Nhà nước từ đất đai có ít hơn một chút thì người dân và doanh nghiệp sẽ được lợi. Vì sau khi đã thực hiện xong nghĩa vụ tài chính đối với Nhà nước mà vẫn còn thừa tiền, người dân sẽ tăng chi cho tiêu dùng hoặc kinh doanh. Trong khi đó, doanh nghiệp sẽ có thêm nguồn vốn để mở rộng đầu tư kinh doanh và cuối cùng thì Nhà nước được lợi vì quy mô nền kinh tế sẽ tăng trưởng lớn hơn và mở rộng được diện thu, tăng thêm nguồn thu cho ngân sách.',
      ),
    ),
    'article' => 
    array (
      0 => 
      array (
        'name' => 'Người BÁN NHÀ phải biết: Người MUA NHÀ thực sự mong muốn điều gì? (P.2)',
        'avatar' => '/images/project/a_1.jpg',
        'description' => 'Sở Xây dựng Hà Nội mới đây thông báo dự án nhà ở xã hội tại Đại Mỗ, quận Nam Từ Liêm có giá bán chưa tính phí bảo trì là 19,5 triệu đồng/m2.',
        'created' => '04/03/2020',
      ),
      1 => 
      array (
        'name' => 'Sức hút của phân khúc nhà liên kế và biệt thự tại quận 9 đến từ đâu?',
        'avatar' => '/images/project/a_2.jpg',
        'description' => 'Bộ Xây dựng thống kê trên cả nước có 207 dự án nhà ở xã hội đã hoàn thành tính đến tháng 1/2020. Tổng số căn hộ vào khoảng 85.810 căn với hơn 4.290.500m2',
        'created' => '04/03/2020',
      ),
      2 => 
      array (
        'name' => 'Sở hữu căn hộ 3 phòng ngủ Lovera Vista với gói vay ưu đãi hấp dẫn',
        'avatar' => '/images/project/a_3.jpg',
        'description' => 'Ông Lê Hoàng Châu, Chủ tịch Hiệp hội Bất động sản TP.HCM cho biết, khi gói 30.000 tỷ đồng kết thúc, người mua nhà ở xã hội ngày càng gặp khó khăn hơn khi không dễ tiếp ',
        'created' => '03/03/2020',
      ),
      3 => 
      array (
        'name' => 'Cập nhật LÃI SUẤT vay mua nhà tại các ngân hàng lớn tháng 03/2020',
        'avatar' => '/images/project/a_4.jpg',
        'description' => 'Thật sự mà nói nhà ở xã hội đắt tương đương với nhà ở thương mại là không hợp lý bởi vì bản thân nhà ở xã hội đã được miễn tiền sử dụng đất',
        'created' => '02/03/2020',
      ),
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'db_doan_ban_ve_xe',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_doan_ban_ve_xe',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'map' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'duan_previewcode',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_doan_ban_ve_xe',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'db_doan_ban_ve_xe',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      'F:\\xampp\\htdocs\\xe-doan\\public\\storage' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\app/public',
    ),
  ),
  'frontend' => 
  array (
    'image' => 
    array (
      'default_error' => '/images/default.png',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'lfm' => 
  array (
    'use_package_routes' => true,
    'allow_private_folder' => true,
    'private_folder_name' => 'UniSharp\\LaravelFilemanager\\Handlers\\ConfigHandler',
    'middlewares' => 
    array (
      0 => 'web',
      1 => 'checkLoginAdmin',
    ),
    'user_field' => 'App\\Core\\ConfigAuthUnisharp',
    'allow_shared_folder' => true,
    'shared_folder_name' => 'shares',
    'folder_categories' => 
    array (
      'file' => 
      array (
        'folder_name' => 'files',
        'startup_view' => 'list',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
          5 => 'application/pdf',
          6 => 'text/plain',
        ),
      ),
      'image' => 
      array (
        'folder_name' => 'photos',
        'startup_view' => 'grid',
        'max_size' => 50000,
        'valid_mime' => 
        array (
          0 => 'image/jpeg',
          1 => 'image/pjpeg',
          2 => 'image/png',
          3 => 'image/gif',
          4 => 'image/svg+xml',
        ),
      ),
    ),
    'paginator' => 
    array (
      'perPage' => 30,
    ),
    'disk' => 'public',
    'rename_file' => false,
    'rename_duplicates' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => false,
    'should_validate_size' => false,
    'should_validate_mime' => false,
    'over_write_on_duplicate' => false,
    'should_create_thumbnails' => true,
    'thumb_folder_name' => 'thumbs',
    'raster_mimetypes' => 
    array (
      0 => 'image/jpeg',
      1 => 'image/pjpeg',
      2 => 'image/png',
    ),
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => 
    array (
      'pdf' => 'Adobe Acrobat',
      'doc' => 'Microsoft Word',
      'docx' => 'Microsoft Word',
      'xls' => 'Microsoft Excel',
      'xlsx' => 'Microsoft Excel',
      'zip' => 'Archive',
      'gif' => 'GIF Image',
      'jpg' => 'JPEG Image',
      'jpeg' => 'JPEG Image',
      'png' => 'PNG Image',
      'ppt' => 'Microsoft PowerPoint',
      'pptx' => 'Microsoft PowerPoint',
    ),
    'php_ini_overrides' => 
    array (
      'memory_limit' => '256M',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'encryption' => NULL,
        'username' => '',
        'password' => '',
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'F:\\xampp\\htdocs\\xe-doan\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'menu' => 
  array (
    'nav2' => 
    array (
    ),
    'link_footer' => 
    array (
      0 => 'Xe Limousine đi Vũng Tàu từ Sai Gòn',
      1 => 'Xe Limousine đi Sài Gòn từ Vũng Tàu',
      2 => 'Xe Limousine đi Sa Pa từ Hà Nội',
      3 => 'Xe Limousine đi Hải Phòng từ Hà Nội',
      4 => 'Xe Limousine đi Vinh từ Hà Nội',
      5 => 'Xe Limousine đi Hải Phòng từ Nghệ An',
      6 => 'Xe Limousine đi HCM từ Đà Nẵng',
      7 => 'Xe Limousine đi Vũng Tàu từ Sai Gòn',
      8 => 'Xe Limousine đi Sài Gòn từ Vũng Tàu',
      9 => 'Xe Limousine đi Sa Pa từ Hà Nội',
      10 => 'Xe Limousine đi Hải Phòng từ Hà Nội',
      11 => 'Xe Limousine đi Vinh từ Hà Nội',
      12 => 'Xe Limousine đi Hải Phòng từ Nghệ An',
      13 => 'Xe Limousine đi HCM từ Đà Nẵng',
      14 => 'Xe Limousine đi Hải Phòng từ Hà Nội',
      15 => 'Xe Limousine đi Vinh từ Hà Nội',
    ),
    'footer' => 
    array (
      0 => 
      array (
        'title' => 'Về conha.vn',
        'class' => 'js-about',
        'id' => 'js-about',
        'sub' => 
        array (
          0 => 
          array (
            'title' => 'Phần mền nhà xe',
            'route' => 'home',
            'link' => '',
          ),
          1 => 
          array (
            'title' => 'Phần mềm đại lý',
            'route' => 'home',
            'link' => '',
          ),
          2 => 
          array (
            'title' => 'Tuyển dụng',
            'route' => 'home',
            'link' => '',
          ),
          3 => 
          array (
            'title' => 'Tin tức',
            'route' => 'home',
            'link' => '',
          ),
          4 => 
          array (
            'title' => 'Liên hệ',
            'route' => 'home',
            'link' => '',
          ),
        ),
      ),
      1 => 
      array (
        'title' => 'Hỗ trợ',
        'class' => 'js-policy',
        'id' => 'js-policy',
        'sub' => 
        array (
          0 => 
          array (
            'title' => 'Hướng dẫn thanh toán',
            'route' => 'home',
            'link' => '',
          ),
          1 => 
          array (
            'title' => 'Chính sách bảo mật thông tin',
            'route' => 'home',
            'link' => '',
          ),
          2 => 
          array (
            'title' => 'Chính sách bảo mật thanh toán',
            'route' => 'home',
            'link' => '',
          ),
          3 => 
          array (
            'title' => 'Câu hỏi thường gặp',
            'route' => 'home',
            'link' => '',
          ),
          4 => 
          array (
            'title' => 'Phần mềm hãng xe',
            'route' => 'home',
            'link' => '',
          ),
        ),
      ),
      2 => 
      array (
        'title' => 'Người dùng',
        'class' => 'js-user',
        'id' => 'js-user',
        'sub' => 
        array (
          0 => 
          array (
            'title' => 'Đăng tin',
            'route' => 'home',
            'link' => '',
          ),
          1 => 
          array (
            'title' => 'Tìm kiếm tin',
            'route' => 'home',
            'link' => '',
          ),
          2 => 
          array (
            'title' => 'Quản lý BĐS',
            'route' => 'home',
            'link' => '',
          ),
        ),
      ),
      3 => 
      array (
        'title' => 'Hướng dẫn',
        'class' => 'js-guide',
        'id' => 'js-guide',
        'sub' => 
        array (
          0 => 
          array (
            'title' => 'Hướng dẫn đăng tin',
            'route' => 'home',
            'link' => '',
          ),
          1 => 
          array (
            'title' => 'Hướng dẫn rút tiền',
            'route' => 'home',
            'link' => '',
          ),
          2 => 
          array (
            'title' => 'Hướng dẫn chuyển tiền',
            'route' => 'home',
            'link' => '',
          ),
        ),
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'F:\\xampp\\htdocs\\xe-doan/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
        'assets/js/app' => 'Resources/assets/js/app.js',
        'assets/sass/app' => 'Resources/assets/sass/app.scss',
        'webpack' => 'webpack.mix.js',
        'package' => 'package.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'webpack' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
          3 => 'PROVIDER_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
          6 => 'PROVIDER_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'F:\\xampp\\htdocs\\xe-doan\\Modules',
      'assets' => 'F:\\xampp\\htdocs\\xe-doan\\public\\modules',
      'migration' => 'F:\\xampp\\htdocs\\xe-doan\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'routes' => 
        array (
          'path' => 'Routes',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests/Unit',
          'generate' => true,
        ),
        'test-feature' => 
        array (
          'path' => 'Tests/Feature',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'commands' => 
    array (
      0 => 'CommandMakeCommand',
      1 => 'ControllerMakeCommand',
      2 => 'DisableCommand',
      3 => 'DumpCommand',
      4 => 'EnableCommand',
      5 => 'EventMakeCommand',
      6 => 'JobMakeCommand',
      7 => 'ListenerMakeCommand',
      8 => 'MailMakeCommand',
      9 => 'MiddlewareMakeCommand',
      10 => 'NotificationMakeCommand',
      11 => 'ProviderMakeCommand',
      12 => 'RouteProviderMakeCommand',
      13 => 'InstallCommand',
      14 => 'ListCommand',
      15 => 'ModuleDeleteCommand',
      16 => 'ModuleMakeCommand',
      17 => 'FactoryMakeCommand',
      18 => 'PolicyMakeCommand',
      19 => 'RequestMakeCommand',
      20 => 'RuleMakeCommand',
      21 => 'MigrateCommand',
      22 => 'MigrateRefreshCommand',
      23 => 'MigrateResetCommand',
      24 => 'MigrateRollbackCommand',
      25 => 'MigrateStatusCommand',
      26 => 'MigrationMakeCommand',
      27 => 'ModelMakeCommand',
      28 => 'PublishCommand',
      29 => 'PublishConfigurationCommand',
      30 => 'PublishMigrationCommand',
      31 => 'PublishTranslationCommand',
      32 => 'SeedCommand',
      33 => 'SeedMakeCommand',
      34 => 'SetupCommand',
      35 => 'UnUseCommand',
      36 => 'UpdateCommand',
      37 => 'UseCommand',
      38 => 'ResourceMakeCommand',
      39 => 'TestMakeCommand',
      40 => 'LaravelModulesV6Migrator',
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'F:\\xampp\\htdocs\\xe-doan\\vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'nwidart',
      'author' => 
      array (
        'name' => 'Nicolas Widart',
        'email' => 'n.widart@gmail.com',
      ),
    ),
    'composer-output' => false,
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
    'activators' => 
    array (
      'file' => 
      array (
        'class' => 'Nwidart\\Modules\\Activators\\FileActivator',
        'statuses-file' => 'F:\\xampp\\htdocs\\xe-doan\\modules_statuses.json',
        'cache-key' => 'activator.installed',
        'cache-lifetime' => 604800,
      ),
    ),
    'activator' => 'file',
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Spatie\\Permission\\Models\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'display_role_in_exception' => false,
    'enable_wildcard_permission' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
    'group' => 
    array (
      1 => 'Tổng quan',
      2 => 'Tin tức && Sự kiện',
      3 => 'Từ khoá',
      4 => 'Menu',
      5 => 'Bài viết',
      6 => 'Xe',
      7 => 'Địa điểm',
      8 => 'Nhà xe',
      9 => 'Lịch trình',
      10 => 'Tuyến đường',
      12 => 'Thống kê vé',
      13 => 'Người dùng',
      14 => 'Thành viên',
      15 => 'Code',
      16 => 'Dữ liệu nền',
      17 => 'Slide',
      18 => 'Config Data',
      19 => 'Page',
      20 => 'Config Email',
      21 => 'MenuBar',
      22 => 'Admin',
      23 => 'Permission',
      24 => 'Role',
      25 => 'Account',
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'seotools' => 
  array (
    'meta' => 
    array (
      'defaults' => 
      array (
        'title' => 'Hệ thống đặt vé xe khách lớn nhất Việt Nam',
        'titleBefore' => false,
        'description' => 'Code thuê, làm thuê đồ án, trang cung cấp đồ án uy tín, giá rẻ nhất hiện nay',
        'separator' => ' - ',
        'keywords' => 
        array (
        ),
        'canonical' => false,
        'robots' => 'NOINDEX, NOFOLLOW',
      ),
      'webmaster_tags' => 
      array (
        'google' => NULL,
        'bing' => NULL,
        'alexa' => NULL,
        'pinterest' => NULL,
        'yandex' => NULL,
        'norton' => NULL,
      ),
      'add_notranslate_class' => false,
    ),
    'opengraph' => 
    array (
      'defaults' => 
      array (
        'title' => 'Hệ thống đặt vé xe khách lớn nhất Việt Nam',
        'description' => 'Code thuê, làm thuê đồ án, trang cung cấp đồ án uy tín, giá rẻ nhất hiện nay',
        'url' => false,
        'type' => false,
        'site_name' => false,
        'images' => 
        array (
        ),
      ),
    ),
    'twitter' => 
    array (
      'defaults' => 
      array (
      ),
    ),
    'json-ld' => 
    array (
      'defaults' => 
      array (
        'title' => 'Over 9000 Thousand!',
        'description' => 'For those who helped create the Genki Dama',
        'url' => false,
        'type' => 'WebPage',
        'images' => 
        array (
        ),
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'setting_admin' => 
  array (
    'sidebar' => 
    array (
      0 => 
      array (
        'name' => 'Tổng quan',
        'route' => 'get_admin.dashboard',
        'class-icon' => 'la la-tachometer-alt',
      ),
      1 => 
      array (
        'name' => 'Tin tức && Sự kiện',
        'class-icon' => 'la la-edit',
        'sub' => 
        array (
          0 => 
          array (
            'name' => 'Từ khoá',
            'route' => 'get_admin.keyword.index',
          ),
          1 => 
          array (
            'name' => 'Menu',
            'route' => 'get_admin.menu.index',
          ),
          2 => 
          array (
            'name' => 'Bài viết',
            'route' => 'get_admin.article.index',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'Xe',
        'class-icon' => 'la la-server',
        'sub' => 
        array (
          0 => 
          array (
            'name' => 'Địa điểm',
            'route' => 'get_admin.location.index',
          ),
          1 => 
          array (
            'name' => 'Nhà xe',
            'route' => 'get_admin.guest.index',
          ),
          2 => 
          array (
            'name' => 'Lịch trình',
            'route' => 'get_admin.buses.index',
          ),
          3 => 
          array (
            'name' => 'Tuyến đường',
            'route' => 'get_admin.route.index',
          ),
          4 => 
          array (
            'name' => 'Thống kê vé',
            'route' => 'get_admin.ticket.index',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'Người dùng',
        'class-icon' => 'la la-user',
        'sub' => 
        array (
          0 => 
          array (
            'name' => 'Thành viên',
            'route' => 'get_admin.user.index',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'Promotion Code',
        'route' => 'get_admin.promotion_code.index',
        'class-icon' => 'la la-tachometer-alt',
      ),
      5 => 
      array (
        'name' => 'Dữ liệu nền',
        'class-icon' => 'la la-database',
        'sub' => 
        array (
          0 => 
          array (
            'name' => 'Slide',
            'route' => 'get_admin.slide.index',
          ),
          1 => 
          array (
            'name' => 'Config Data',
            'route' => 'get_admin.configuration.index',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'Page',
        'route' => 'get_admin.page.index',
        'class-icon' => 'la la-file-alt',
      ),
      7 => 
      array (
        'name' => 'Config Email',
        'route' => 'get_admin.email.index',
        'class-icon' => 'la la-envelope',
      ),
      8 => 
      array (
        'name' => 'Menu Navbar',
        'route' => 'get_admin.navbar.index',
        'class-icon' => 'la la-bars',
      ),
      9 => 
      array (
        'name' => 'Admin',
        'class-icon' => 'la la-cogs',
        'sub' => 
        array (
          0 => 
          array (
            'name' => 'Permission',
            'route' => 'get_admin.permission.index',
          ),
          1 => 
          array (
            'name' => 'Role',
            'route' => 'get_admin.role.index',
          ),
          2 => 
          array (
            'name' => 'Quản trị viên',
            'route' => 'get_admin.account.index',
          ),
        ),
      ),
    ),
  ),
  'user' => 
  array (
    'name' => 'User',
    'menu' => 
    array (
      0 => 
      array (
        'title' => 'Thông tin tài khoản',
        'route' => 'get_user.info',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/account-circle.svg',
      ),
      1 => 
      array (
        'title' => 'Bạn bè',
        'route' => 'get_user.friend',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/friend.svg',
      ),
      2 => 
      array (
        'title' => 'Vé của tôi',
        'route' => 'get_user.ticket',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/ticket.svg',
      ),
      3 => 
      array (
        'title' => 'Đăng xuất',
        'route' => 'get.logout',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/logout.svg',
      ),
    ),
    'menu_guest' => 
    array (
      0 => 
      array (
        'title' => 'Quản lý vé',
        'route' => 'get_guest.ticket.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/credit-card.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      1 => 
      array (
        'title' => 'QL vé trung chuyển',
        'route' => 'get_guest.ticket.index_pick_home',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/credit-card.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      2 => 
      array (
        'title' => 'Quản lý chuyến xe',
        'route' => 'get_guest.buses.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/map.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      3 => 
      array (
        'title' => 'Thống kê',
        'route' => 'get_guest.statistical.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/chart.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      4 => 
      array (
        'title' => 'Quản lý xe',
        'route' => 'get_guest.vehicles.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/car.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      5 => 
      array (
        'title' => 'Album ảnh',
        'route' => 'get_guest.album.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/album.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      6 => 
      array (
        'title' => 'Giới thiệu',
        'route' => 'get_guest.about.index',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/info.svg',
        'level' => 
        array (
          0 => 1,
        ),
      ),
      7 => 
      array (
        'title' => 'Thông tin tài khoản',
        'route' => 'get_guest.info',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/account-circle.svg',
        'level' => 
        array (
          0 => 0,
          1 => 1,
        ),
      ),
      8 => 
      array (
        'title' => 'Bạn bè',
        'route' => 'get_user.friend',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/friend.svg',
        'level' => 
        array (
          0 => 0,
          1 => 1,
        ),
      ),
      9 => 
      array (
        'title' => 'Vé của tôi',
        'route' => 'get_user.ticket',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/ticket.svg',
        'level' => 
        array (
          0 => 0,
          1 => 1,
        ),
      ),
      10 => 
      array (
        'title' => 'Biến động tài khoản',
        'route' => 'get_user.pay_history',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/history.svg',
        'level' => 
        array (
          0 => 0,
          1 => 1,
        ),
      ),
      11 => 
      array (
        'title' => 'Đăng xuất',
        'route' => 'get.logout',
        'icon' => 'fa fa-dashboard',
        'img' => 'images/icon/logout.svg',
        'level' => 
        array (
          0 => 0,
          1 => 1,
        ),
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'F:\\xampp\\htdocs\\xe-doan\\resources\\views',
    ),
    'compiled' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\framework\\views',
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'F:\\xampp\\htdocs\\xe-doan\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'admin' => 
  array (
    'name' => 'Admin',
  ),
  'blog' => 
  array (
    'name' => 'Blog',
  ),
  'guest' => 
  array (
    'name' => 'Guest',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
