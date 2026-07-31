<x-layout>
     <form action="/todolist" method="POST" >
        @csrf

    <div class="flex min-h-screen  justify-center px-4 py-8">
        <fieldset class="fieldset w-full max-w-md">
            <legend class="fieldset-legend">Your bio</legend>
            <textarea id="todolist" name="todolist" class="textarea h-24" placeholder="Bio"></textarea>
            <button type="submit" class="btn btn-soft btn-secondary btn-sm max-w-30">Save</button>
            <div class="label">Optional</div>
        </fieldset>
    </div>
  </form>

  @if ($todolist->count())
   <div class="mt-6 text-White">
    <h2 class="font-bold">Your Todo List</h2>
    <ul>
      @foreach($todolist as $todo)
        <li>{{ $todo->description }}</li>
      @endforeach
    </ul>
    </div>
  @endif
</x-layout>
