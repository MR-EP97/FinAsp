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

                    <div class="mb-3 col-md-6">

                        <label class="form-label">{{__('Type')}}</label>
                        <select wire:model="type" class="form-select border border-2 p-2">
                            <option value="">{{__('-- Select Type --')}}</option>
                            <option value="income">{{__('Income')}}</option>
                            <option value="expense">{{__('Expense')}}</option>
                        </select>
                        {{--                        <input wire:model.blur="user.phone" type="number" class="form-control  border border-2 p-2">--}}
                        @error('type')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">{{__('Date')}}</label>
                        <input wire:model="date" type="date" class="form-control border border-2 p-2">
                        @error('date')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">{{__('Period')}}</label>
                        <input wire:model="period" type="number" class="form-control border border-2 p-2">
                        @error('period')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                        @enderror
                    </div>

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

