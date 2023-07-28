<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <button class="menu-button">Menu 1</button>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Daily Offer
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('daily_offer.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Daily Offer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('daily_offer.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> List Daily Offer</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Product Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('product.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Product Category Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('category.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Product Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Product category List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Reservation Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('reservation_create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Reservation </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('reservation_list') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Reservation List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Customer's Order
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                {{-- <li class="nav-item">
                <a href="{{ route('genarel.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Add Genarel Information
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li> --}}

                <li class="nav-item">
                    <a href="{{ url('order_list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Order List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Coupon Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('coupon.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Add Coupon
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>

                <li class="nav-item">
                    <a href="{{ route('coupon.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Coupon List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Table Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('table.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Add Table
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>

                <li class="nav-item">
                    <a href="{{ route('table.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Table List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Waiter Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ route('waiter.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Add Waiter
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>

                <li class="nav-item">
                    <a href="{{ route('waiter.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                           Waiter List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- mamun --}}
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Teams Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('team.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Add Teams Member
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('team.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Teams List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Testimonial Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('testimonial.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Add Testimonial Member
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Testimonial List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    General Information Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('genarel.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Add General Information
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('genarel.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            General Information List
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
      

        {{-- aiamin --}}
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    About Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('ab.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ab.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> About List </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    About Two Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('abcom.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add About Two </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('abcom.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> About Two List </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Choose Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('chosen.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Choose</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('chosen.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Choose List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Blog Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('blogs.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Blog</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Blog List</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item ">
            <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Chefs Menu
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('cheff.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Add Chefs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('cheff.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Chefs List</p>
                    </a>
                </li>
            </ul>
        </li>

        {{-- mamun --}}
        <li class="nav-item">
            <a href="{{ url('contact_list') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Contact List</p>
            </a>
        </li>


        <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Logout</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

{{-- <ul>
  <li class="menu-item">
      <button class="menu-button">Menu 1</button>
      <ul class="submenu">
          <li>Submenu 1-1</li>
          <li>Submenu 1-2</li>
          <li>Submenu 1-3</li>
      </ul>
  </li>
  <li class="menu-item">
      <button class="menu-button">Menu 2</button>
      <ul class="submenu">
          <li>Submenu 2-1</li>
          <li>Submenu 2-2</li>
          <li>Submenu 2-3</li>
      </ul>
  </li>
  <!-- Add more menu items as needed -->
</ul> --}}

{{-- <style>
  .submenu {
      display: none;
  }
  
  .menu-item.open .submenu {
      display: block;
  }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      $('.menu-button').click(function() {
          // Close all other open menus
          $('.menu-item').not($(this).parent()).removeClass('open');
          
          // Toggle the clicked menu
          $(this).parent().toggleClass('open');
      });
  });
</script> --}}
