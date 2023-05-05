@props(['comments'])
<section class="container">
    <div class="col-md-8 mx-auto">
      <h3 class="my-3 text-secondary">Comment ({{$comments->count()}})</h3>
      @foreach ($comments as $comment)
          <x-single-comment :comment="$comment"/>
      @endforeach
      {{$comments->links()}}
    </div>
  </section>