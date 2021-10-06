
  <div class="sidebar" style="padding: 0">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Bikin</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list" style="overflow: auto; padding-right: 0.5rem; padding-left: 0">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="/backoffice">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      
      <li>
        <a href="{{route('headers.index')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Header</span>
        </a>
        <span class="tooltip">Header</span>
      </li>
      <li>
        <a href="{{route('titres.index')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Titres</span>
        </a>
        <span class="tooltip">Titres</span>
      </li>
      <li>
        <a href="{{route('heros.index')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Heros</span>
        </a>
        <span class="tooltip">Heros</span>
      </li>
      <li>
       <a href="{{route('abouts.index')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
       <a href="{{route('features.index')}}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Features</span>
       </a>
       <span class="tooltip">Features</span>
     </li>
     <li>
       <a href="{{route('services.index')}}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Services</span>
       </a>
       <span class="tooltip">Services</span>
     </li>
     <li>
       <a href="{{route('portfolios.index')}}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Portfolios</span>
       </a>
       <span class="tooltip">Portfolios</span>
     </li>
     <li>
       <a href="{{route('testimonials.index')}}">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Testimonials</span>
       </a>
       <span class="tooltip">Testimonials</span>
     </li>
     
     <li>
      <a href="{{route('teams.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Teams</span>
      </a>
      <span class="tooltip">Teams</span>
    </li>
    <li>
      <a href="{{route('contacts.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Contact</span>
      </a>
      <span class="tooltip">Contact</span>
    </li>
    <li style="display: flex">
      <li class="mb-3">
        <a href="{{route('footers.index')}}">
          <i class='bx bx-cart-alt' ></i>
          <span class="links_name">Footer</span>
        </a>
        <span class="tooltip">Footer</span>
      </li>
      
      <!-- Authentication -->
      
      <form style=" margin-left:0; width:100%" method="POST" action="{{ route('logout') }}">
        
          @csrf
          <x-dropdown-link style="width: 100%; padding-left: 0 !important;" :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
                              <i class='bx bx-log-out' ></i>
              <span class="links_name">Log Out</span>
          </x-dropdown-link>
        </form>
   </li>
    
    
     

        
        
          
      
          
        

    </ul>
  </div>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

 