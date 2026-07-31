<x-layout>


<div class="hero bg-base-200 min-h-screen">
  <div class="hero-content flex-col lg:flex-row">
    <img
      src="{{ asset('assets/Laravel.svg.webp') }}"
      alt="Hero image"
      class="max-w-sm rounded-lg shadow-2xl"
    />
    <div>
      <h1 class="text-5xl font-bold">Laravel Project</h1>
      <p class="py-6">
        This is a simple Laravel project that demonstrates the use of Blade components, Tailwind CSS, and DaisyUI. It includes a basic CRUD application for managing a to-do list.
      </p>
      <a href="/todolist" class="btn btn-primary">Get Started</a>
    </div>
  </div>
</div>
<div class="stats shadow  bg-base-200   flex flex-col md:flex-row justify-around items-center ">
  <div class="stat">
    <div class="stat-figure text-primary">



    </div>
    <div class="stat-title">PHP Developer</div>
    <div class="stat-value text-error">Laravel</div>

  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">


    </div>
    <div class="stat-title">github</div>
    <div class="stat-value text-success">A-hmed1608</div>

  </div>

  <div class="stat">
    <div class="stat-figure text-secondary">
      <div class="avatar avatar-online">
        <div class="w-16 rounded-full">
          <img src="{{ asset('assets/20260201_122154.jpg') }}" alt="Avatar" />
        </div>
      </div>
    </div>

    <div class="stat-title ">Samrane Ahmed </div>


  </div>
</div>
<footer class="footer sm:footer-horizontal bg-neutral text-neutral-content p-10">
  <aside>
    <img
      src="{{ asset('assets/Laravel.svg.webp') }}"
      alt="Hero image"
      class="max-w-sm max-h-25 rounded-lg shadow-2xl"
    />

  </aside>
  <nav>
    <h6 class="footer-title">Social</h6>
    <div class="grid grid-flow-col gap-4">
     <a href="https://github.com/A-hmed1608" target="_blank" rel="noopener noreferrer" aria-label="github" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white p-1 shadow-sm">
        <img src="{{ asset('assets/images.jpg') }}" alt="Github" class="h-6 w-6  object-cover" />
      </a>
       <a href="https://www.linkedin.com/in/samrane-ahmed-71b278385/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white p-1 shadow-sm">
        <img src="{{ asset('assets/images.png') }}" alt="LinkedIn" class="h-5 w-5  object-cover" />
      </a>




    </div>
  </nav>
</footer>



</x-layout>
