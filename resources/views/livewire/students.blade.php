<div>
    @include('livewire.create')
    @include('livewire.update')
    @include('livewire.delete')



    <section>
        <div class="container">
            <div class="row">
                .@if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>


                            Tienda Ktronix </h3>
                        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#addStudentModal">
                            Agregar Productos <i class="fa-solid fa-plus fa-fade fa-lg"></i>
                        </button>


                    </div>
                    <div class="card-body ">
                        <table class="table tabl-striped ">



                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Empresa</th>
                                    <th>Phone</th>
                                    <th>image</th>
                                    <th>Funciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->firstname }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->image }}</td>

                                    <td>
                                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                            data-bs-target="#updateStudentModal"
                                            wire:click.prevent="edit({{ $student->id }})">Edit <i
                                                class="fa-solid fa-gear fa-spin"></i></button>
                                        <br>
                                        <br>

                                    </td>

                                    <td>

                                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteStudentModal"
                                            wire:click.prevent="destroy({{ $student->id }})">Delete <i
                                                class="fa-solid fa-skull-crossbones fa-beat-fade"></i></button>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            @foreach ($students as $student)
            <div class="col-md-3">
                <div class="card card text-black bg-dark mb-3">


                    <div class="card-body">
                        <div class="card-group mt-3">

                            <div class="card text-center border-info">
                                <div class="card-body">
                                    <img class="card-img-top" src="{{ $student->image }}" width="100" height="200">
                                    <br>
                                    <br>


                                    <h4 class="card-title ">{{ $student->firstname }}</h4>
                                    <p class="card-text">{{ $student->lastname }}</p>
                                    <p class="card-text">{{ $student->email }}</p>
                                    <p class="card-text">{{ $student->phone }}</p>


                                    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal"
                                        data-bs-target="#updateStudentModal"
                                        wire:click.prevent="edit({{ $student->id }})"><i
                                            class="fa-solid fa-store fa-bounce fa-lg"></i></button>



                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
            @endforeach
    </section>
</div>