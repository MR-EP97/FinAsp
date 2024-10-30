<div class="container-fluid px-2 px-md-4">
    <div class="card card-plain h-100">


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

            <div class="card-body pt-0 p-3 text-center">
                <h6 class="text-center mb-0">{{__('Balance')}}</h6>
                {{--                <span class="text-xs">Freelance Payment</span>--}}
                <hr class="horizontal dark my-3">
                <h5 class="mb-0">{{$balance}} $</h5>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="form-label">{{__('Amount')}}</label>
                    <input wire:model="amount" type="number" class="form-control border border-2 p-2">
                    @error('amount')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <i wire:click="increment" class="material-icons btn bg-gradient-success">add</i>
            <i wire:click="decrement" class="material-icons btn bg-gradient-danger">remove</i>

            {{--            <button wire:click="increment">+</button>--}}
            {{--            <button wire:click="decrement">-</button>--}}


            <form wire:submit.prevent="submit">
                <button type="submit" class="btn bg-gradient-dark">{{__('Submit')}}</button>
            </form>

        </div>
    </div>


</div>

