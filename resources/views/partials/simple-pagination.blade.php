@if ($paginator->hasPages())
<div class="join grid grid-cols-2">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <button disabled class="join-item btn btn-disabled" aria-disabled="true"
        aria-label="@lang('pagination.previous')">Previous page</button>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline" rel="prev"
        aria-label="@lang('pagination.previous')">Previous page</a>
    @endif
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline" rel="prev"
        aria-label="@lang('pagination.next')">Next Page</a>

    @else
    <button disabled class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">Next
        Page</button>
    @endif
</div>
@endif