
@if($paginator->hasPages())
<div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
<div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
    <div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate">
<ul class="pagination">
@if ($paginator->onFirstPage())
    <li class="page-item previous disabled"><a href="javascript:void(0);"class="page-link"><i class="previous"></i></a></li>
    @else

    <li class="page-item previous "><a href="{{ $paginator->previousPageUrl() }}" class="page-link"><i class="previous"></i></a></li>

          
    @endif

    @foreach ($elements as $element)
    @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
    @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())

    <li class="page-item active"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
    @else
    <li class="page-item "><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>

    @endif
                @endforeach
            @endif
        @endforeach



    @if ($paginator->hasMorePages())
    <li class="page-item next"><a href="{{ $paginator->nextPageUrl() }}"  class="page-link"><i class="next"></i></a></li>

    @else
    <li class="page-item next"><a href="javascript:void(0);" class="page-link"><i class="next"></i></a></li>
    @endif
</ul>
</div></div>
@endif



 