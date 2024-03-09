<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
     UPRESS
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
        <a href="{{route('customer.customer_dashboard')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>

      
      <li class="nav-item nav-category">Components</li>
      <li class="nav-item">
            <li class="nav-item">
        <a href="{{route('customer.product.add_orders')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Purchase</span>
        </a> 
      </li>
      <li class="nav-item">
        <a href="{{route('customer.product.add_orders')}}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Track Orders</span>
        </a>
      </li>
      {{-- <li class="nav-item nav-category">Maps</li>
     
      <li class="nav-item">
        <a href={{route('farmers.form.rice_map')}} class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">ZamboAgriMap</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="https://earth.google.com/web/@7.15493912,122.21738186,143.06466033a,158600.66482102d,30.00000001y,0h,0t,0r" class="nav-link">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Google Earth</span>
        </a>
      </li>
      <li class="nav-item nav-category">Features</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Agri-Districts</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="uiComponents">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="" class="nav-link">Ayala</a>
            </li>
            <li class="nav-item">
              <a href="pages/ui-components/alerts.html" class="nav-link">Tumaga</a>
            </li>
            <li class="nav-item">
              <a href="pages/ui-components/badges.html" class="nav-link">Culianan</a>
            </li>
            <li class="nav-item">
              <a href="pages/ui-components/breadcrumbs.html" class="nav-link">Manicahan</a>
            </li>
            <li class="nav-item">
              <a href="pages/ui-components/buttons.html" class="nav-link">Curuan</a>
            </li>
            <li class="nav-item">
              <a href="pages/ui-components/button-group.html" class="nav-link">Vitali</a>
            </li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
          <i class="link-icon" data-feather="anchor"></i>
          <span class="link-title">Agriculture Sector</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="advancedUI">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('personalinfo.index')}}" class="nav-link">Crops</a>
            </li>
            <li class="nav-item">
              <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Livestock</a>
            </li>
            <li class="nav-item">
              <a href="pages/advanced-ui/sortablejs.html" class="nav-link">Fisheries</a>
            </li>
            
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
          <i class="link-icon" data-feather="inbox"></i>
          <span class="link-title">Forms</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="forms">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{route('farmers.rice_farmersforms')}}" class="nav-link">RiceFarmerForms</a>
            </li>
           <!--- <li class="nav-item">
              <a href="pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
            </li>
            <li class="nav-item">
              <a href="pages/forms/editors.html" class="nav-link">Editors</a>
            </li>
            <li class="nav-item">
              <a href="pages/forms/wizard.html" class="nav-link">Wizard</a>
            </li>-->
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="calendar">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Rice Varieties</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/charts/apex.html" class="nav-link">Inbred</a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/chartjs.html" class="nav-link">Jasmin Rice</a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/flot.html" class="nav-link">Basmati Rice</a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/morrisjs.html" class="nav-link">Brown</a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/peity.html" class="nav-link">Glutinous rice</a>
            </li>
            <li class="nav-item">
              <a href="pages/charts/sparkline.html" class="nav-link"> Arborio rice</a>
            </li>
          </ul>
        </div>
      </li> <li class="nav-item">
        <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">Schedule</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="p" class="nav-link">Planting</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Harvest</a>
            </li>
          
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
          <i class="link-icon" data-feather="layout"></i>
          <span class="link-title">Crops Production</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
          <i class="link-icon" data-feather="smile"></i>
          <span class="link-title">Coordinates Update</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/icons/feather-icons.html" class="nav-link">polygon Boundary</a>
            </li>
            <li class="nav-item">
              <a href="pages/icons/flag-icons.html" class="nav-link">latitude</a>
            </li>
            <li class="nav-item">
              <a href="pages/icons/mdi-icons.html" class="nav-link">longhitude</a>
            </li>
          </ul>
        </div>
      </li> --}}
      {{-- end of sidebar --}}

    <!--  <li class="nav-item nav-category">Pages</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
          <i class="link-icon" data-feather="book"></i>
          <span class="link-title">Special pages</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
            </li>
            <li class="nav-item">
              <a href="pages/general/faq.html" class="nav-link">Faq</a>
            </li>
            <li class="nav-item">
              <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
            </li>
            <li class="nav-item">
              <a href="pages/general/profile.html" class="nav-link">Profile</a>
            </li>
            <li class="nav-item">
              <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
          <i class="link-icon" data-feather="unlock"></i>
          <span class="link-title">Authentication</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="authPages">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="admin_login" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="pages/auth/register.html" class="nav-link">Register</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
          <i class="link-icon" data-feather="cloud-off"></i>
          <span class="link-title">Error</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="errorPages">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/error/404.html" class="nav-link">404</a>
            </li>
            <li class="nav-item">
              <a href="pages/error/500.html" class="nav-link">500</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Docs</li>
      <li class="nav-item">
        <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
          <i class="link-icon" data-feather="hash"></i>
          <span class="link-title">Documentation</span>
        </a>
      </li>-->
    </ul>
  </div>
</nav> 