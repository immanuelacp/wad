<div class="card mt-4" style="font-family: 'Comfortaa'">
    <div class="card-body">
        <nav class="nav flex-column">
            @if (Auth::user()->level == 'Admin')
              <a class="nav-link" href="{{route('villa.index')}}">Villa</a>
              <a class="nav-link" href="{{route('book.history')}}">History</a>
              @else
              <a class="nav-link" href="{{route('book.index')}}">History</a>
            @endif

        </nav>
    </div>
</div>
