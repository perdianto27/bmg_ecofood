@extends('front.beranda')
@section('content')

@endsection

@section('featured')
<h1 name="featured-judul" class="display-4 fst-italic"></h1>
<p name="featured-isi" class="lead my-3 text-justify">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
<p class="lead mb-0"><a href="#" class="text-white fw-bold">Readmore...</a></p>
@endsection

@section('thumbnail')
<div id="thumbnail" class="row mb-2">

</div>
@endsection

@section('article')
<div id="thumbnail" class="row mb-2">
  <article class="blog-post">
    <h2 name="article-judul" class="blog-post-title"></h2>
    <b name="article-penulis" class="blog-post-meta"></b>
    <p name="article-date" class="blog-post-meta"></p>
    <p name="article-isi" class="text-justify"></p>
  </article>
</div>
@endsection

@section('pagination')
  <a class="btn btn-outline-primary" href="#">Older</a>
  <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
@endsection

@section('widget')
<div class="p-4">
  <h4 class="fst-italic border-bottom">About</h4>
  <p>ecofood adalah makanan kesehatan yang menambah energi kedalam tubuh kita.</p>
</div>

<div class="p-4">
  <h4 class="fst-italic border-bottom">Trending</h4>
  <ol id="widget-trending" class="list-unstyled mb-0">
    
  </ol>
</div>

<div class="p-4">
  <h4 class="fst-italic border-bottom">Soacial</h4>
  <ol class="list-unstyled">
    <li><a href="#">GitHub</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Facebook</a></li>
  </ol>
</div>
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(() => {
    let artikels;
    let url = "{{ route('artikels')}}";
    // ajax adding data to database
    $.ajax({
      url : url,
      type: "POST",
      data: { _token: "{{csrf_token()}}"},
      dataType: "JSON",
      success: function(response)
      {
        artikels = response.artikel;
        const featured = response.artikel[0];
        $('[name="featured-judul"]').text(featured.judul_artikel);
        const maxText = 90;
        const isi = featured.isi_artikel;
        if(isi.length > maxText) {
          const string = isi.substr(0,maxText);
          $('[name="featured-isi"]').text(string);
        }else{
          $('[name="featured-isi"]').text(featured.isi_artikel);
        }
        
        $('[name="article-judul"]').text(featured.judul_artikel);
        $('[name="article-isi"]').text(featured.isi_artikel);
        $('[name="article-date"]').text(featured.updated_at);
        $('[name="article-penulis"]').text('by: '+ featured.penulis);
        const src = "{{asset('/images/featured-1.jpeg')}}";
        let no=0;
        for (let i = 0; i < artikels.length; ++i) {
          no++
          const artikel = artikels[i];
          let post = artikel.isi_artikel;
          if(post.length > maxText) {
            post = post.substr(0,maxText);
          }
          const thumbnail = `<div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">${artikel.kategori_artikel}</strong>
          <h3 class="mb-0">${artikel.judul_artikel}</h3>
          <div class="mb-1 text-muted">${artikel.updated_at}</div>
          <p class="card-text mb-auto text-justify">${post}</p>
          <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <img src="${src}" alt="..." class="img-thumbnail" height="150" width="150">
          </div>          
          </div>
          </div>`;
          const widget = `<li><b>${no+" "}</b><a href="#">${artikel.judul_artikel}</a></li>`;
          $("#widget-trending").append(widget);
          $("#thumbnail").append(thumbnail);
        }              
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
        alert('Error server');
      }
    });
  });
</script>
@endsection






