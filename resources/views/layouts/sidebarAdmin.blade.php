<div class="card mt-4" style="font-family: 'Comfortaa'">
    <div class="card-body">
        <nav class="nav flex-column">
            @if (Auth::user()->level == 'Admin')
              <a class="nav-link" href="{{route('villa.index')}}"><i class="fas fa-home"></i>   Villa</a>
              <a class="nav-link" href="{{route('book.history')}}"><i class="fas fa-history"></i>   History</a>
              @else
              <a class="nav-link" href="{{route('book.index')}}"><i class="fas fa-history"></i> History</a>
            @endif

        </nav>
    </div>
</div>
