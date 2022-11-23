<div class="aside">
    <div class="logo">
        <a href="/">
            <h4>Abbas <span>Zabier</span></h4>
        </a>
    </div>
    <ul class="nav">
        <li><a href="/" class="{{ ($title==="Home") ? 'active' :'' }}"><i class="{{ ($title==="Home") ? 'bi bi-house-fill' :'bi bi-house' }}"></i> Home</a></li>
        <li><a href="/about"class="{{ ($title==="About") ? 'active' :'' }}"><i class="{{ ($title==="About") ? 'bi bi-person-fill' :'bi bi-person' }}" ></i></i> About</a></li>
        <li><a href="/services"class="{{ ($title==="Services") ? 'active' :'' }}"><i class=" {{ ($title==="Services") ? '<bi bi-file-earmark-text-fill' :'bi bi-file-earmark-text' }}"></i> Services</a></li>
        <li><a href="/portfolio" class="{{ ($title==="Portfolio") ? 'active' :'' }}"><i class="{{ ($title==="Portfolio") ? 'bi bi-grid-fill' :'bi bi-grid' }}"></i> Portfolio</a></li>
        <li><a href="/contact" class="{{ ($title==="Contact") ? 'active' :'' }}"><i class="{{ ($title==="Contact") ? 'bi bi-telephone-plus-fill ' :'bi bi-telephone-plus' }}"></i> Contact</a></li>
    </ul>
    <div class="footer mb-2 text-center">
        @auth
        <ul class="navbar-nav">
            <li class="nav-item dropdown bg-transparent">
              <a class="nav-link dropdown-toggle" style="color:transparent" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <form action="/logout" method="POST">
                @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </ul>
            </li>
          </ul>
    
        @else
        <a href="/login" class="text-decoration-none {{ ($title==="login") ? 'active' :'' }}" style="color: #fdf9ff">Masuk</a>
        @endauth
        <p class="text-center ">Created with <i class="bi bi-heart-fill" style="color: #e42d0d"></i> by Abbas Zabier</p>
    </div>
</div>