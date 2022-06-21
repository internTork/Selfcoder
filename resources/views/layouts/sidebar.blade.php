      <div class="col-lg-4">
          <div class="sidebar-wrapper">
              <div class="sidebar-widget">
                  <h4 class="sidebar-title">Documentation Nav</h4>
                  <div class="sidebar-search sidebar-widget">
                      <div class="sidebar-search-form">
                          <form action="#" method="post">
                              <div class="form-group">
                                  <input type="search" name="search-field" placeholder="Search Now" required="">
                                  <button type="submit"><i class="ri-search-2-line"></i></button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="sidebar-widget">
                  <div class="doc-nav">
                      <ul id="faq">
                          <li> <a href="{{ route('introduction') }}">Getting
                                  started</a></li>
                          <li> <a href="{{ route('user_installation') }}">Installation</a> </li>
                          <li> <a href="#">Setting</a></li>
                          <li> <a data-toggle="collapse" data-parent="#faq" href="#drop-down-menu-1">
                                  Menu levels 1 <i class="la la-angle-down"></i></a>
                              <ul id="drop-down-menu-1" class="panel-collapse collapse">
                                  <li><a href="#intro">Menu 1 </a></li>
                                  <li><a href="#">Menu 2</a></li>
                                  <li><a href="#">Menu 3 </a></li>
                              </ul>
                          </li>
                          <li> <a data-toggle="collapse" data-parent="#faq" href="#drop-down-menu-2">
                                  Menu levels 2 <i class="la la-angle-down"></i></a>
                              <ul id="drop-down-menu-2" class="panel-collapse collapse">
                                  <li><a href="#intro">Menu 1 </a></li>
                                  <li><a href="#">Menu 2</a></li>
                                  <li><a href="#">Menu 3 </a></li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>

          </div>
      </div>
