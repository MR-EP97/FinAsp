<div class="container-fluid px-2 px-md-4">
    {{--    <div class="page-header min-height-300 border-radius-xl mt-4"--}}
    {{--         style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">--}}
    {{--        <span class="mask  bg-gradient-primary  opacity-6"></span>--}}
    {{--    </div>--}}
    {{--    <div class="card card-body mx-3 mx-md-4 mt-n6">--}}
    {{--        <div class="row gx-4 mb-2">--}}
    {{--            <div class="col-auto">--}}
    {{--                <div class="avatar avatar-xl position-relative">--}}
    {{--                    <img src="{{ asset('assets') }}/img/bruce-mars.jpg" alt="profile_image"--}}
    {{--                         class="w-100 border-radius-lg shadow-sm">--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-auto my-auto">--}}
    {{--                <div class="h-100">--}}
    {{--                    <h5 class="mb-1">--}}
    {{--                        {{ auth()->user()->name }}--}}
    {{--                    </h5>--}}
    {{--                    <p class="mb-0 font-weight-normal text-sm">--}}
    {{--                        CEO / Co-Founder--}}
    {{--                    </p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">--}}
    {{--                <div class="nav-wrapper position-relative end-0">--}}
    {{--                    <ul class="nav nav-pills nav-fill p-1" role="tablist">--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"--}}
    {{--                               role="tab" aria-selected="true">--}}
    {{--                                <i class="material-icons text-lg position-relative">home</i>--}}
    {{--                                <span class="ms-1">App</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"--}}
    {{--                               aria-selected="false">--}}
    {{--                                <i class="material-icons text-lg position-relative">email</i>--}}
    {{--                                <span class="ms-1">Messages</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                        <li class="nav-item">--}}
    {{--                            <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab"--}}
    {{--                               aria-selected="false">--}}
    {{--                                <i class="material-icons text-lg position-relative">settings</i>--}}
    {{--                                <span class="ms-1">Settings</span>--}}
    {{--                            </a>--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <div class="card card-plain h-100">
        {{--            <div class="card-header pb-0 p-3">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="col-md-8 d-flex align-items-center">--}}
        {{--                        <h6 class="mb-3">Profile Information</h6>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        <div class="card-body p-3">
            @if (session('status'))
                <div class="row">
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">{{ Session::get('status') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            {{--            @if (Session::has('demo'))--}}
            {{--                <div class="row">--}}
            {{--                    <div class="alert alert-danger alert-dismissible text-white" role="alert">--}}
            {{--                        <span class="text-sm">{{ Session::get('demo') }}</span>--}}
            {{--                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"--}}
            {{--                                aria-label="Close">--}}
            {{--                            <span aria-hidden="true">&times;</span>--}}
            {{--                        </button>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            <form wire:submit.prevent="submit">
                <div class="row">

                    <div class="mb-3 col-md-6">
                        <label class="form-label">{{__('Amount')}}</label>
                        <input wire:model="amount" type="number" class="form-control border border-2 p-2">
                        @error('amount')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">{{__('Title')}}</label>
                        <input wire:model="title" type="text" class="form-control border border-2 p-2">
                        @error('title')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{ __('Transaction Type') }}</label>
                        <div class="form-check">
                            <input wire:model="type" type="radio" id="income" name="type" value="income"
                                   class="form-check-input">
                            <label class="form-check-label" for="income">{{ __('Income') }}</label>
                        </div>
                        <div class="form-check">
                            <input wire:model="type" type="radio" id="expense" name="type" value="expense"
                                   class="form-check-input">
                            <label class="form-check-label" for="expense">{{ __('Expense') }}</label>
                        </div>
                        @error('type')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">{{__('Period')}}</label>
                            <select wire:model="period" class="form-select border border-2 p-2">
                                <option value="">{{__('-- Select Type --')}}</option>
                                <option value="monthly">{{__('Monthly')}}</option>
                                <option value="weekly">{{__('Weekly')}}</option>
                                <option value="daily">{{__('Daily')}}</option>
                                {{--                                <option value="custom">{{__('Custom')}}</option>--}}
                            </select>
                            @error('period')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">{{__('Start Date')}}</label>
                        <input wire:model="startDate" type="date" class="form-control border border-2 p-2">
                        @error('startDate')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <label class="form-label">{{ __('Duration Type') }}</label>
                    <div class="form-check">
                        <input wire:click="setDuration('numberOfPeriod')" type="radio" id="numberOfPeriod"
                               name="durationType"
                               class="form-check-input">
                        <label class="form-check-label" for="numberOfPeriod">{{ __('Number of Periods') }}</label>
                    </div>
                    <div class="form-check">
                        <input wire:click="setDuration('EndDate')" type="radio" id="EndDate" name="durationType"
                               class="form-check-input">
                        <label class="form-check-label" for="EndDate">{{ __('End Date') }}</label>
                    </div>
                    @error('numberOfPeriod')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                    @enderror
                    @error('endDate')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                    @enderror


                    @if($durationType === 'numberOfPeriod')
                        <div class="mb-3 col-md-6">
                            <label class="form-label">{{__('Number of period')}}</label>
                            <input wire:model="numberOfPeriod" type="number"
                                   class="form-control border border-2 p-2">
                        </div>
                    @endif


                    @if($durationType === 'EndDate')
                        <div class="mb-3 col-md-6">
                            <label class="form-label">{{__('End Date')}}</label>
                            <input wire:model="endDate" type="date" class="form-control border border-2 p-2">
                        </div>
                    @endif



                    <div class="mb-3 col-md-12">

                        <label for="floatingTextarea2">{{__('Description')}}</label>
                        <textarea wire:model="description" class="form-control border border-2 p-2"
                                  placeholder=" Say something about yourself" id="floatingTextarea2" rows="4"
                                  cols="50"></textarea>
                        @error('description')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>
                </div>


                <button type="submit" class="btn bg-gradient-dark">Submit</button>
            </form>

        </div>
    </div>


</div>

