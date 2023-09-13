@extends('front.beranda')
@section('content')

@endsection

@section('featured')
<h1 name="featured-judul" class="display-4 fst-italic"></h1>
<p name="featured-isi" class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
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

  <p name="article-isi" >This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
  <hr>
</article>
</div>
@endsection

@section('pagination')
  <a class="btn btn-outline-primary" href="#">Older</a>
  <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
@endsection

@section('widget')
<div class="p-4">
  <h4 class="fst-italic">About</h4>
  <p>Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
</div>

<div class="p-4">
  <h4 class="fst-italic">Archives</h4>
  <ol class="list-unstyled mb-0">
    <li><a href="#">March 2021</a></li>
    <li><a href="#">February 2021</a></li>
    <li><a href="#">January 2021</a></li>
    <li><a href="#">December 2020</a></li>
    <li><a href="#">November 2020</a></li>
    <li><a href="#">October 2020</a></li>
    <li><a href="#">September 2020</a></li>
    <li><a href="#">August 2020</a></li>
    <li><a href="#">July 2020</a></li>
    <li><a href="#">June 2020</a></li>
    <li><a href="#">May 2020</a></li>
    <li><a href="#">April 2020</a></li>
  </ol>
</div>

<div class="p-4">
  <h4 class="fst-italic">Elsewhere</h4>
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
        $('[name="featured-isi"]').text(featured.isi_artikel);
        $('[name="article-judul"]').text(featured.judul_artikel);
        $('[name="article-isi"]').text(featured.isi_artikel);
        $('[name="article-date"]').text(featured.updated_at);
        $('[name="article-penulis"]').text('by: '+ featured.penulis);
        
        for (let i = 0; i < artikels.length; ++i) {
          const artikel = artikels[i];
          const thumbnail = `<div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">${artikel.kategori_artikel}</strong>
          <h3 class="mb-0">${artikel.judul_artikel}</h3>
          <div class="mb-1 text-muted">${artikel.updated_at}</div>
          <p class="card-text mb-auto">${artikel.isi_artikel}</p>
          <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="100" height="150" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>
          </div>
          </div>`;

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






