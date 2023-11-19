

<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')
    @include('livewire.look')




    <section>
        <div class="container">
            <div class="row">
                .@if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                
            </div>
        </div>
        <br>
        

        <div class="row">
            @foreach ($users as $student)
            <div class="col-md-3">
                <div class="card card text-black bg-dark mb-3">


                    <div class="card-body">
                        <div class="card-group mt-3">

                            <div class="card text-center border-info">
                                <div class="card-body">
                                    <img class="card-img-top" src="{{ $student->image }}" width="100" height="200">
                                    <br>
                                    


                                    <h4 class="card-title "><b>{{ $student->firstname }}</b></h4>
                                    <p class="card-text">{{ $student->lastname }}</p>
                                    <p class="card-text">{{ $student->email }}</p>
                                    <p  class="card-text">{{ $student->phone }}</p>


                                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#lookStudentModal"
                                        wire:click.prevent="edit({{ $student->id }})">Comprar<i class="fa-solid fa-cart-shopping fa-beat fa-lg"></i></button>
                                        
                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                    data-bs-target="#lookStudentModal"
                                    wire:click.prevent="edit({{ $student->id }})"><i class="fa-regular fa-plus"></i></button>



                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
            @endforeach
    </section>
</div>