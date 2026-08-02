<x-layout>
  <div class="flex min-h-screen flex-col items-center px-4 py-8">
    <div class="w-full max-w-md">
      <h1 class="text-2xl font-bold mb-6 text-center">Contact Us</h1>

      @if (session('success'))
        <div class="alert alert-success mb-6 shadow-sm">
          <span>{{ session('success') }}</span>
        </div>
      @endif

      <form action="/contact" method="POST" class="bg-base-200 p-6 rounded-xl border border-base-300 shadow-sm space-y-4">
        @csrf

        <div class="form-control w-full">
          <label class="label">
            <span class="label-text font-medium">Name</span>
          </label>
          <input type="text" name="name" class="input input-bordered w-full" placeholder="Your Name" required />
        </div>

        <div class="form-control w-full">
          <label class="label">
            <span class="label-text font-medium">Email</span>
          </label>
          <input type="email" name="email" class="input input-bordered w-full" placeholder="your.email@example.com" required />
        </div>

        <div class="form-control w-full">
          <label class="label">
            <span class="label-text font-medium">Message</span>
          </label>
          <textarea name="message" class="textarea textarea-bordered h-32 w-full" placeholder="How can we help you?" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-full mt-2">Send Message</button>
      </form>
    </div>
  </div>
</x-layout>
