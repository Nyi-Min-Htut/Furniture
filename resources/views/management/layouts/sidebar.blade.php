<div id="sidebar" class=' w-60 h-screen bg-black text-white '>
    <div c>
        <nav class="px-5 py-3 mb-5 text-xl flex justify-between">
            <span>
                {{ config('app.name') }}
            </span>
            <span id='toggleSidebar'>
                <i class='fa-solid fa-bars'></i>
            </span>
        </nav>
      

    </div>
   
    <ul>
        <li class="hover:bg-gray-800 pl-4 {{ trim($__env->yieldContent('admin')) ? 'bg-gray-900 text-white' : 'text-gray-400 hover:text-white' }} cursor-pointer transition-all duration-500 py-3">
            <a href="{{ route('admin') }}">Admin</a>
        </li>

        <li class="hover:bg-gray-800 pl-4 {{ trim($__env->yieldContent('category')) ? 'bg-gray-900 text-white' : 'text-gray-400 hover:text-white' }} cursor-pointer transition-all duration-500 py-3">
            <a href="{{ route('category') }}">Categories</a>
        </li>

        <li class="hover:bg-gray-800 pl-4 {{ trim($__env->yieldContent('variation')) ? 'bg-gray-900 text-white' : 'text-gray-400 hover:text-white' }} cursor-pointer transition-all duration-500 py-3">
            <a href="{{ route('variation') }}">Variations</a>
        </li>
        
    </ul>

</div>

<div id='sidebarBlack'  class='p-4  text-black' style='display:none'>
    <span>
        <i class='fa-solid fa-bars text-md'></i>
    </span>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var sidebar = document.getElementById('sidebar');
    var toggleButton = document.getElementById('toggleSidebar');
    var sidebarBlack = document.getElementById('sidebarBlack');

    if (toggleButton ) {
        toggleButton.addEventListener('click', function () {
            sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
            sidebarBlack.style.display = (sidebarBlack.style.display === 'block' || sidebarBlack.style.display === '') ? 'block' : 'block';
        });
    }

    
    });

    var sidebarBlack = document.getElementById('sidebarBlack');
    var sidebar = document.getElementById('sidebar');

    sidebarBlack.addEventListener('click',function(){
        sidebar.style.display = 'block'
    })





</script>
