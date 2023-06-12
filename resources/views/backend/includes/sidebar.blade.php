<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin/dashboard')}}">
         <div class="sidebar-brand-icon ">
             <img class="img-thumbnail" width="50px" src="{{ asset('image/logo/logo.png') }}">
         </div>
         <div class="sidebar-brand-text mx-1">BLUE JADE BD</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{ url('/admin/dashboard') }}">
             <i class="fa-solid fa-house"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fa-solid fa-image-portrait"></i>
             <span>About</span>
         </a>
         <div id="collapseSlider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ url('/about/create') }}">About Create</a>
                 <a class="collapse-item" href="{{ url('/about/manage') }}">About Manage</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-image-portrait"></i>
            <span>Slider</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('sliders.create') }}">Slider Create</a>
                <a class="collapse-item" href="{{ route('sliders.index') }}">Slider Manage</a>
            </div>
        </div>
    </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContact"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fa-solid fa-address-book"></i>
             <span>Contact</span>
         </a>
         <div id="collapseContact" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ url('/contact/manage') }}">About Create</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConcernsCatagory"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Concrens Category</span>
         </a>
         <div id="collapseConcernsCatagory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ url('/concerns/category/create') }}">Create</a>
                 <a class="collapse-item" href="{{ url('/concerns/category/manage') }}">Manage</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConcernsSubatagory"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Concrens Subcategory</span>
         </a>
         <div id="collapseConcernsSubatagory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ url('/concerns/subcategory/create') }}">Create</a>
                 <a class="collapse-item" href="{{ url('/concerns/subcategory/manage') }}">Manage</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComphanyInfo"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Copphany Info</span>
         </a>
         <div id="collapseComphanyInfo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="{{ url('/comphany/info/create') }}">Create</a>
                 <a class="collapse-item" href="{{ url('/comphany/info/manage') }}">Manage</a>
             </div>
         </div>
     </li>


 </ul>
