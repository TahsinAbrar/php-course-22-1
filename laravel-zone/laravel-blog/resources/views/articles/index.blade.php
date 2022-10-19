@extends('templates.master')


@section('content')
<section class="blog-container">
  <div class="contaniner m-1">
    <div class="row mx-auto">
      <div class="col col-lg-8">
        <div class="blog-left">
          <!-- Top Blog Section -->
          <!-- Card Group -->
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($articles as $article)
            <div class="col col-xs-6">
              <div class="card">
                <img
                  src="https://images.unsplash.com/photo-1590341328520-63256eb32bc3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8c3VwZXJoZXJvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">{{ $article->title }}</h5>
                  <p class="card-text">
                    {{ Str::words($article->description, 10) }}
                  </p>
                  <div class="date d-flex gap-2">
                    <p class="card-text">
                      <small class="text-muted"
                        ><a href="author.html" class="link-secondary"
                          >{{ $article->author_name  }}</a
                        ></small
                      >
                    </p>
                    <p class="card-text">
                      <small class="text-muted"
                        >{{ "Last updated " . $article->updated_at->diffForHumans() }}</small
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

              <div class="row">
                  {{-- $articles->withQueryString()->links() --}}
              </div>

          </div>
        </div>
      </div>

      <!-- Blog Right -->
      <div class="col col-lg-4 d-none d-lg-block">
        <div class="blog-right">
          <div class="blog-search mb-5">
            <form class="d-flex" role="search">
              <input
                class="form-control me-2 input-group-sm"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button
                class="btn btn-sm btn-outline-secondary"
                type="submit"
              >
                Search
              </button>
            </form>
          </div>

          <div class="blog-recent mb-5">
            <h5>Recent Post</h5>
            <div class="recent-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
            <div class="recent-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
            <div class="recent-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
          </div>

          <div class="blog-popular mb-5">
            <h5>Popular Post</h5>
            <div class="popular-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
            <div class="popular-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
            <div class="popular-single-post">
              <a>
                <span
                  >6 Free Quick Wireframe Tools For UI/UX Designers in
                  2019</span
                >
              </a>
            </div>
          </div>
          <div class="blog-tags mb-5">
            <h5>Tags</h5>
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
            <span class="badge rounded-pill text-bg-secondary"
              ><a
                href="tagpost.html"
                class="link-light text-decoration-none"
                >Primary</a
              ></span
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('pagination')
    @include('partials.pagination')
@endsection
