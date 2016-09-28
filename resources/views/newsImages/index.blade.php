@extends('layouts.admin')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <h1 class="pull-left">@lang('newsImages/index.model_name')</h1>
                <a class="btn btn-primary pull-right" href="{!! route('administration.newsImages.create') !!}">@lang('newsImages/index.add_new')</a>
            </div>
            <div class="widget-content padded clearfix">
                @if($newsImages->isEmpty())
                    <div class="well text-center">@lang('newsImages/index.no_model_found')</div>
                @else
                    <div class="table-responsive">
                        @include('newsImages.table')
                    </div>
                @endif
            </div>
            <div style="padding-left: 7px;">
                @include('common.paginate', ['records' => $newsImages])

            </div>
        </div>

    </div>

@endsection

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')

    <script type="text/javascript">
        $('.dataTable').dataTable({
            "bPaginate": false,
            "bInfo": false,
            "dom": 'Bfrtip',
            "aaSorting": [],
            "buttons": [
                // 'copyHtml5',
                'excelHtml5',
                // 'csvHtml5',
                // 'pdfHtml5'
            ]
        });
        $('.buttons-excel').each(function() {
           $(this).removeClass('dt-button').addClass('btn btn-primary-outline');
           $(this).html('<i class="fa fa-print"></i>'+$(this).html());
        });
    </script>

@stop

