<style>
    .btn-load {
        display: inline-block;
        width: 160px;
        height: 45px;
        line-height: 45px;
        text-align: center;
        background: transparent;
        color: #111111;
        border: 1px solid #e6e6e6;
        cursor: pointer;
        margin-top: 50px;
        margin-bottom: 40px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    .btn-load:hover {
        background: -moz-linear-gradient(90deg, rgb(248, 71, 62) 20%, rgb(254, 121, 69) 100%);
        background: -webkit-linear-gradient(90deg, rgb(248, 71, 62) 20%, rgb(254, 121, 69) 100%);
        background: linear-gradient(90deg, rgb(248, 71, 62) 20%, rgb(254, 121, 69) 100%);
        color: #fff;
        border: 1px solid rgb(248, 71, 62);
    }
</style>
@foreach($stories as $story)
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
    <div class="blog_category_box_wrapper blog_box_wrapper2 float_left">
        <div class="blog_news_img_wrapper float_left">
            <a href="{{ url('/success-stories/storyDetails/'.$story->id) }}"><img
                    src="{{ asset('/uploads/'.$story->featured_image) }}"></a>
        </div>
        <div class="lest_news_cont_wrapper float_left">
            <div class="blog_heaidng_top">
                <?php
                            $storyDate = date('m/d/Y', strtotime($story->created_at));
                            ?>
                <span> <i class="flaticon-calendar"></i>{{ $storyDate }}</span>
                <h3> <a href="{{ url('/success-stories/storyDetails/'.$story->id) }}">{{ $story->title }}</a></h3>
            </div>

            <div class="blog-single_cntnt"> {!!mb_substr(html_entity_decode($story->description),0,46) .
                ((strlen(html_entity_decode($story->description)) > 46) ? '...' : '')!!} <a
                    href="{{ url('/success-stories/storyDetails/'.$story->id) }}"> read more</a> </div>

        </div>

    </div>
</div>
@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    @if ($total > $limit+4)
    <button class="btn-load" onclick="storyLoad({{$limit}})">Show more stories</button>
    @endif

</div>