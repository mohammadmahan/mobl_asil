@extends('ManagementViews.layout.main')
@section('title')
پیام های دریافتی
@stop
@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h4 class="content-header-title">پیام های دریافتی</h4>
        </div>
    </div>
    <div class="content-body">
        <!-- Table head options start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">شناسه</th>
                                        <th scope="col">نام و نام خانوادگی</th>
                                        <th scope="col">شماره تماس</th>
                                        <th scope="col">ایمیل</th>
                                        <th scope="col">پیام</th>
                                        <th scope="col">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($massages && count($massages)>0)
                                    @foreach($massages as $massage)
                                    <tr>
                                        <th scope="row">{{$massage->id}}</th>
                                        <td>{{$massage->fullname}}</td>
                                        <td>{{$massage->number}}</td>
                                        <td>{{$massage->email}}</td>
                                        <td>{{$massage->massage}}</td>
                                        <td>
                                            <a class="link-edit-product" data-toggle="modal" data-target="#deleteModal" data-original-title="حذف پیام" data-massageid={{$massage->id}}>
                                                <i class="fa fa-minus-square" aria-hidden="true" style="color: red;"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!------------------start modal delete----------------------------->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">حذف پیام</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('delete.massage','test')}}" method="post">

                                                    {{csrf_field()}}
                                                <div class="modal_bodyfooter">
                                                    <div class="modal-body">
                                                        ایا میخواهید حذف کنید؟
                                                    </div>
                                                        <input type="hidden" name="massages_id" id="massage_id" value="">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                                        <button type="submit" class="btn btn-primary delete-button">حذف</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------end modal delete----------------------------->
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">
                    {{$massages->links()}}
                </div>
            </div>
        </div>
        <!-- Table head options end -->


    </div>
</div>

@stop

@section('script')
{{--    <script src="/js/myJq.js"></script>--}}
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)

            var massage_id = button.data('massageid')
            var modal = $(this)

            modal.find('.modal_bodyfooter #massage_id').val(massage_id)
        });

    </script>
@stop
