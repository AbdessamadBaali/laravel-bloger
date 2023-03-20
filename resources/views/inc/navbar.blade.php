
<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="/">{{config('app.name','app')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-white"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          <a class="nav-link text-white" href="/about">About</a>
          <a class="nav-link text-white" href="/services">Services</a>
          <a class="nav-link text-white" href="/posts">Blog</a>
        </div>
        <div class="navbar-nav ">
          <a class="nav-link active text-white"  href="/posts/create">Create Post</a>
        </div>
      </div>
    </div>
  </nav>