@if($menu)
<section class="project">
    <div class="container project-content">
        <h2 class="section-title text-center">{{ $menu->m_name }}</h2>
        <div class="box-estate">
            <div class="list-project" id="list-estate">
                @include('components.estate._inc_list_estate',['articles' => $articlesHot])
            </div>

        </div>
    </div>
</section>
@endif
