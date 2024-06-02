<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							{{-- <i class="dw dw-search2 search-icon"></i> --}}
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="fa fa-search" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="text-right">
										<button class="btn btn-primary">Search</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="fa fa-moon-o" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
							<a href="{{ route('profs.annonce') }}">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                <span class="badge notification-active"></span>
                            </a>
							
						
					
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon rounded-circle overflow-hidden border border-secondary d-inline-block" style="width: 50px; height: 50px;">
								<img src="{{ $teacher->Image ? asset($teacher->Image) : asset('vendors/images/default.jpg') }}" alt="{{ $teacher->name }}" class="w-100 h-auto" />

							</span>
							<span class="user-name">{{ $teacher->name }}</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href={{ route('profs.profile') }}
								><i class="fa fa-user" aria-hidden="true"></i> Profile</a
							>
							<a class="dropdown-item" href={{ route('profs.profile') }}
								><i class="fa fa-cog" aria-hidden="true"></i> Setting</a
							>
                            <form id="teacher-logout-form" action="{{ route('teacher.logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							<a class="dropdown-item" href="{{ route('teacher.logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('teacher-logout-form').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                            </a>
						</div>
					</div>
				</div>
				<div class="github-link">
					<a href="{{ route('profs.github') }}" target="_blank"
						><img src="{{ asset('vendors/images/github.svg') }}" alt=""
					/></a>
				</div>
			</div>
		</div>