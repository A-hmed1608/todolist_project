<x-layout>
  <div class="flex min-h-screen flex-col items-center px-4 py-8">
    <!-- Form Section -->
    <form action="/todolist" method="POST" class="w-full max-w-md">
      @csrf
      <fieldset class="fieldset">
        <legend class="fieldset-legend">New Todo</legend>
        <textarea id="todolist" name="todolist" class="textarea h-24 w-full" placeholder="What needs to be done?"></textarea>
        <button type="submit" class="btn btn-soft btn-secondary btn-sm mt-2 w-full">Save</button>
      </fieldset>
    </form>

    <!-- List Section -->
    @if ($todolist->count())
      <div class="mt-8 w-full max-w-md">
        <h2 class="mb-4 font-bold text-lg">Your Todo List</h2>
        <ul class="space-y-2">
          @foreach($todolist as $todo)
            <li class="flex items-start justify-between gap-4 rounded-lg bg-base-200 p-4 shadow-sm">
              <div class="flex-1 min-w-0 whitespace-pre-line break-words pt-1">
                {{ $todo->description }}
              </div>

              <div class="flex shrink-0 items-center space-x-2">
                <!-- Bouton UP -->
                <form action="/todolist/{{ $todo->id }}/up" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline btn-xs">Up</button>
                </form>

                <!-- Bouton DOWN -->
                <form action="/todolist/{{ $todo->id }}/down" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-outline btn-xs">Down</button>
                </form>

                <!-- Bouton DELETE -->
                <form action="/todolist/{{ $todo->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-error btn-xs">Delete</button>
                </form>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    @else
      <p class="mt-6 text-base-content/60">No todo items found.</p>
    @endif
  </div>
</x-layout>
