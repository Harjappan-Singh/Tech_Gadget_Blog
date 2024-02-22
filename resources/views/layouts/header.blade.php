<nav class="flex items-center myNavBar px-10 py-10 mx-0 my-0">
    <span class="text-white w-4 cursor-pointer">TechTrek</span>
    <ul class="flex-1 text-right">
      <li class="list-none inline-block px-5"> <a class="no-underline text-white px-2" href="{{ url('/') }}">Home</a></li>
      <li class="list-none inline-block px-5">  <a class="no-underline text-white px-2" href="/blog">Blog</a></li>
       @guest
            <li class="list-none inline-block">
              <a class="no-underline text-white px-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline text-white px-5" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
            </li>
        @else
             <span class="no-underline text-white px-2" >{{ Auth::user()->name }}</span>
             <li class="list-none inline-block px-5">
              <a class="no-underline text-white px-2" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
             </li>     
        @endguest               
    </ul>
</nav>

<div >
    <div class="content text-white mt-48 relative">
        <div class="w-full xl:w-1/2 xl:absolute top-40 bottom-0 right-0 left-20">
            <h2 class="text-4xl font-semibold"> Hello, What Would You Like To Read?</h2>
            <div class="input-group mb-3">
                <input type="text" class="border-gray-300 border rounded-lg py-2 px-4 w-80" placeholder="new upgrade in java" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="button" id="button-addon2">Search</button>
                <div class="suggestion mt-2">
                    <a class="text-gray-500 text-sm px-2" href="#">New update in ios</a>
                    <a class="text-gray-500 text-sm px-2" href="#">What's new in bootstrap</a>
                    <a class="text-gray-500 text-sm px-2" href="#">Why learn data science</a>
                    
                </div>
            </div>
      </div>

        <img src="home.svg" alt="read-img" class="w-full xl:w-1/2 xl:absolute top-0 bottom-0 right-20">
</div>