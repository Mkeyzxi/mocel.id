<header style="background-image: url(../img/backgroundBeranda2.png);" class="bg-cover bg-no-repeat flex items-center fixed top-0 -right-2 -left-2 z-50 justify-between lg:justify-around h-[80px] gap-16 lg:py-2 ">
    <div><img src="{{ $slot }}/img/LogoMocel.svg" alt="logo mocel" width="55px" class="lg:w-lg"></div>
    <nav class=" hidden lg:block">
        <ul class="lg:flex gap-16 text-white font-inter filter-none">
            <li><a  class="font-light transition-all border-b-[2px] border-transparent hover:border-b-secondary hover:text-sixty py-1" href="/beranda">Beranda</a></li>
            <li><a class="font-light transition-all border-b-[2px] border-transparent hover:border-b-secondary hover:text-sixty py-1" href="/infobengkel">Info Bengkel</a></li> 
            <li><a class="font-light transition-all border-b-[2px] border-transparent hover:border-b-secondary hover:text-sixty py-1" href="/artikels">Info Otomotif</a></li>
            {{-- <li><a class="font-light transition-all border-b-[2px] border-transparent hover:border-b-secondary hover:text-sixty py-1" href="#">Tanya Montir</a></li> --}}
        </ul>
        <!-- <div id="toggle" class="lg:hidden w-8 h-7 box-border relative cursor-pointer">
            <ion-icon id="icon" class="w-full h-full relative" name="menu"></ion-icon>
        </div> -->
    </nav>
    <div  class="w-5 h-5"><ion-icon id="modeMalam" class="w-full h-full text-white" name="aperture-outline"></ion-icon> </div>       
    <div class="w-7 h-7 lg:hidden"><ion-icon id="menu" class="w-full h-full" name="menu"></ion-icon>
        <ul id="toggle" class="lg:flex gap-16 z-2 absolute hidden left-0 top-20 p-2">
            <li><a href="#">Beranda</a></li>
            <li><a href="/infobengkel">Info Bengkel</a></li>
            <li><a href="/artikels">Info Otomotif</a></li>
            {{-- <li><a href="#">Tanya Montir</a></li> --}}
        </ul>
    </div>
</header>
{{-- <script src="js/script.js"></script>  --}}
<script src="js/script.js"></script> 
<script>

// document.addEventListener('DOMContentLoaded', function() {
        
//         function markActiveLink() {
//             const currentPath = window.location.pathname;
//             const headerLinks = document.querySelectorAll('nav ul li a');
            
//             headerLinks.forEach(link => {
//                 const linkPath = link.getAttribute('href');
//                 if (linkPath === currentPath) {
//                     link.classList.add('font-bold', 'border-b-secondary', 'text-sixty');
//                 } else {
//                     link.classList.remove('font-bold', 'border-b-secondary', 'text-sixty');
//                 }
//             });
//         }

        
//         markActiveLink();

        
//         const modeMalam = document.getElementById('modeMalam');
//         modeMalam.addEventListener('click', () => {
//             const html = document.querySelector('html');
//             if (html.classList.contains('dark')) {
//                 html.classList.remove('dark');
//                 localStorage.setItem('mode', 'light'); 
//             } else {
//                 html.classList.add('dark');
//                 localStorage.setItem('mode', 'dark'); 
//             }
//         });

        
//         const currentMode = localStorage.getItem('mode');
//         if (currentMode === 'dark') {
//             document.querySelector('html').classList.add('dark');
//         }
//     });
</script>