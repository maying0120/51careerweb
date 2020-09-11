<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">管理后台</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/51careerlogo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>用户</p>
                  </a>
                   <ul>
                    <li class="nav-item">
                      <a href="{{route('user.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>注册信息</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('profile.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>求职信息</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>





         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
                      with font-awesome or any other icon font library -->
                 <li class="nav-item has-treeview menu-open">
                   <a href="#" class="nav-link active">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                       求职
                     </p>
                   </a>
                    <ul>
                     <li class="nav-item">
                       <a href="./index1.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>发布职位</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index2.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>职位分类</p>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="./index3.html" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>简历管理</p>
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>


                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
                              with font-awesome or any other icon font library -->
                         <li class="nav-item has-treeview menu-open">
                           <a href="./index2.html" class="nav-link active">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                文章

                             </p>
                           </a>
                            <ul>

                             <li class="nav-item">
                               <a href="{{ route('post.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>发布文章</p>
                               </a>
                             </li>

                             <li class="nav-item">
                               <a href="{{ route('category.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>文章分类</p>
                               </a>
                             </li>

                             <li class="nav-item">
                               <a href="{{ route('tag.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>tag管理</p>
                               </a>
                             </li>


                           <li class="nav-item">
                           <a href="./index2.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>评论管理</p>
                            </a>
                             </li>
                            </ul>
                          </li>


                       </ul>


                          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                         <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                             <li class="nav-item has-treeview menu-open">
                                          <a href="#" class="nav-link active">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                              视频
                                            </p>
                                          </a>
                                           <ul>
                                            <li class="nav-item">
                                              <a href="./index1.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>发布视频</p>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a href="./index2.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>视频分类</p>
                                              </a>
                                            </li>
                                            <li class="nav-item">
                                              <a href="./index3.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>评论管理</p>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
