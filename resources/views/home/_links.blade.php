<div class="col-md-12 index-links">
  <div class="panel panel-default">
    <div class="panel-heading">友情链接</div>

    <div class="panel-body">
      @foreach(\App\Models\Link::orderBy('order')->get() as $item)
        <a href="{{ $item->link }}" target="_blank">{{ $item->title }}</a>
      @endforeach
    </div>
  </div>
</div>
