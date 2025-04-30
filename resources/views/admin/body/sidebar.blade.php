 <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Admin<span> Panel</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">DJLI</li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('slider.images') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Slider Images</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('application.form.all') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Submitted Forms</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('branches.all') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Branches</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('consultancies.all') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Consultancy Booking</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('team.members.all') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Team Members</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('gallery.image.all') }}">
              <i class="link-icon" data-feather="chevron-right"></i>
              <span class="link-title">Gallery Images</span>
            </a>
          </li>


        </ul>
      </div>
    </nav>
