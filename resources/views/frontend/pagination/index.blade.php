@if ($paginator->hasPages())
<ul class="pagination pagination d-flex justify-content-center align-items-center" style="gap: 20px;">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <li class="disabled "><span>«</span></li>
    @else
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="text-decoration:none">«</a></li>
    @endif

    @if($paginator->currentPage() > 3)
    <li class="hidden-xs fw-bold"><a href="{{ $paginator->url(1) }}" class="fw-bold" style="text-decoration:none">1</a></li>
    @endif
    @if($paginator->currentPage() > 4)
    <li class="fw-bolder  text-white" style="background-color: #0068B3;"><span>. &nbsp; . &nbsp; .</span></li>
    @endif
    @foreach(range(1, $paginator->lastPage()) as $i)
    @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
        @if ($i == $paginator->currentPage())
        <li class="active fw-bold"><span class="border-0 rounded-circle  text-white" style="padding: 1px 1px;background-color:#ae8a59;">{{ $i }}</span></li>
        @else
        <li class="fw-bold"><a href="{{ $paginator->url($i) }}" style="text-decoration:none">{{ $i }}</a></li>
        @endif
        @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li class="fw-bolder text-white"><span>. &nbsp; . &nbsp; .</span></li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 2)
                <li class="hidden-xs fw-bold"><a href="{{ $paginator->url($paginator->lastPage()) }}" style="text-decoration:none">{{ $paginator->lastPage() }}</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" style="text-decoration:none">»</a></li>
                @else
                <li class="disabled"><span>»</span></li>
                @endif
</ul>
@endif
