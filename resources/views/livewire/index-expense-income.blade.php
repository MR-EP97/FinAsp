<div class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">{{__('Expense & Income')}}</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder">
                                        {{__('Title')}}</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        {{__('Amount')}}
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        {{__('Start Date')}}
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        {{__('Done')}}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenseIncomes as $expenseIncome)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm">{{$expenseIncome['title']}}</h6>
                                                </div>
                                            </div>
                                        </td>


                                        <td>
                                            @switch($expenseIncome['type'])
                                                @case('income')
                                                    <div class="btn-outline-success text-xs">
                                                        <i class="material-icons text-sm">
                                                            expand_less
                                                        </i>{{$expenseIncome['amount']}} {{__('$')}}
                                                    </div>
                                                    @break
                                                @case('expense')
                                                    <div class="btn-outline-danger text-xs">
                                                        <i class="material-icons text-sm">
                                                            expand_more
                                                        </i>{{$expenseIncome['amount']}} {{__('$')}}
                                                    </div>
                                                    @break
                                            @endswitch
                                        </td>

                                        <td>
                                            <span
                                                class="text-xs font-weight-bold">{{strtok($expenseIncome['start_date'], ' ')}}</span>
                                        </td>

                                        <td>
                                            <div class="d-flex px-2">
                                                <div class="my-auto">
                                                    <span class="mb-0 text-sm">1/5</span>
                                                </div>
                                            </div>
                                        </td>


                                        {{--                                        <td class="align-middle text-center">--}}
                                        {{--                                            <div class="d-flex align-items-center justify-content-center">--}}
                                        {{--                                                <span class="me-2 text-xs font-weight-bold">60%</span>--}}
                                        {{--                                                <div>--}}
                                        {{--                                                    <div class="progress">--}}
                                        {{--                                                        <div class="progress-bar bg-gradient-info"--}}
                                        {{--                                                             role="progressbar" aria-valuenow="60"--}}
                                        {{--                                                             aria-valuemin="0" aria-valuemax="100"--}}
                                        {{--                                                             style="width: 60%;"></div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </td>--}}
                                        {{--                                        <td class="align-middle">--}}
                                        {{--                                            <button class="btn btn-link text-secondary mb-0">--}}
                                        {{--                                                <i class="fa fa-ellipsis-v text-xs"></i>--}}
                                        {{--                                            </button>--}}
                                        {{--                                        </td>--}}
                                    </tr>

                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
