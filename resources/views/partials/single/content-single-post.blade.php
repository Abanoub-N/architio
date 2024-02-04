@php
  $postType = 'news';
  $taxonomy = 'news_category';
  $queried_object = get_queried_object();
  $terms = get_the_terms( get_the_ID() , $taxonomy );

@endphp

<section class="single single-news">
  <div class="container">
    <div class="spacer-30"></div>
    <div class="breadcrumb-wrapper">

    </div>

    <div class="feature">
      <img class="img-fluid w-100 object-fit-cover h-486 rounded-10px" src="{!! Utilities::global_thumbnails(get_the_ID(), 'large') !!}" alt="{{the_title(get_the_ID())}}">
    </div>

    <div class="heading">
      <div class="spacer-15"></div>
      <h2 class="font-18 font-weight-900 text-primary section-title single-primary d-inline-block">
        {{the_title()}}
      </h2>
    </div>

    <div class="row justify-content-between mt-1 mb-2">
      <span class="date px-1 text-gray font-15 mx-2 w-auto font-weight-700">
        {{ date('M d ,Y') }}
      </span>
      <span class="read-time px-1 text-gray font-15 mx-2 w-auto font-weight-700">
        {{  Utilities::reading_time(get_the_content()) }} {{ _e('M','persga')}}
      </span>
      <div class="spacer-15"></div>
    </div>

    <div class="content">
      {!! the_content() !!}
    </div>
  </div>
</section>
