<div class="left-side-bar">
	<div class="brand-logo">
		<a href="{{Route('admin.index')}}">
			<img src="{{asset('admin/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
			<img src="{{asset('admin/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">
				<li>
					<a href="{{Route('admin.index')}}" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle">
						<span class="micon dw dw-house-1"></span><span class="mtext">Portfolio</span>
					</a>
					<ul class="submenu">
						<li><a href="{{Route('admin.about')}}">About</a></li>
						<li><a href="{{Route('admin.education')}}">Education</a></li>
						<li><a href="{{Route('admin.experience')}}">Experience</a></li>
						<li><a href="{{Route('admin.tags')}}">Tags</a></li>
						<li><a href="{{Route('admin.skills')}}">Skills</a></li>
						<li><a href="{{Route('admin.portfolio')}}">Portfolio</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="mobile-menu-overlay"></div>