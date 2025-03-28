const mix = require('laravel-mix');
let webpack = require('webpack');
const path = require('path');


directory_asset = 'public/assets';
mix.setPublicPath(path.normalize(directory_asset));

let build_js = [
    {
        from: 'resources/assets/js/pages/home.js',
        to: 'js/home.js'
    },
    {
        from: 'resources/assets/js/pages/search.js',
        to: 'js/search.js'
    },
    {
        from: 'resources/assets/js/pages/detail.js',
        to: 'js/detail.js'
    },
    {
        from: 'resources/assets/test/app_test.js',
        to: 'test/app_test.js'
    },
    {
        from: 'resources/assets/js/pages/user.js',
        to: 'js/app_user.js'
    },

];

let build_scss = [
    {
        from: 'resources/assets/scss/pages/review_location/review_location.scss',
        to: 'css/review_location.css'
    },
    {
        from: 'resources/assets/scss/pages/home/home.scss',
        to: 'css/home.css'
    },
    {
        from: 'resources/assets/scss/pages/search/search.scss',
        to: 'css/search.css'
    },
    {
        from: 'resources/assets/scss/pages/detail/detail.scss',
        to: 'css/detail.css'
    },
    {
        from: 'resources/assets/scss/pages/user/user.scss',
        to: 'css/user.css'
    },
    {
        from: 'resources/assets/scss/pages/ticket/ticket.scss',
        to: 'css/ticket.css'
    },
    {
        from: 'resources/assets/scss/pages/article/article.scss',
        to: 'css/article.css'
    },
    {
        from: 'resources/assets/test/app_test.scss',
        to: 'test/app_test.css'
    },

];

build_js.map((file) => {
    mix.js(file.from, file.to);
});

build_scss.map((file) => {
    mix.sass(file.from, file.to).minify(directory_asset + '/' + file.to).version();
});

// // ADMIN
// mix.sass('resources/valex/scss/pages/admin_dashboard.scss', 'public/css_admin').version();
// mix.js('resources/valex/js/pages/admin_dashboard.js', 'public/js_admin').version();


mix.options({
    processCssUrls: false
})
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

// mix.disableNotifications();
mix.webpackConfig({
    plugins: [
        new webpack.ContextReplacementPlugin(/\.\/locale$/, 'empty-module', false, /js$/),
        new webpack.IgnorePlugin(/^codemirror$/),
    ],
    node: {
        fs: "empty"
    },
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: ['modernizr-loader']
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: ['modernizr-loader', 'json-loader']
            }
        ]
    },
    resolve: {
        alias: {
            "handlebars": "handlebars/dist/handlebars.js",
            modernizr$: path.resolve(__dirname, "resources/assets/js/.modernizrrc")
        }
    }
});
if (mix.inProduction()) {
    mix.version();
}
// mix.browserSync('123job.abc');
new webpack.LoaderOptionsPlugin({
    test: /\.s[ac]ss$/,
    options: {
        includePaths: [
            path.resolve(__dirname, './public/')
        ]
    }
});
