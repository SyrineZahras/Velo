<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog"aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Ajouter vélo') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('bikes.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Image</label>
                                <input type="file" class="form-control @error('imageUrl') is-invalid @enderror" name="imageUrl">
                            
                                <!-- error message untuk title -->
                                @error('imageUrl')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Marque</label>
                                <input type="text" class="form-control @error('marque') is-invalid @enderror" name="marque" value="{{ old('marque') }}" placeholder="marque">
                            
                                <!-- error message untuk title -->
                                @error('marque')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Vitesse</label>
                                <input type="text" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" value="{{ old('vitesse') }}" placeholder="vitesse">
                            
                                <!-- error message untuk title -->
                                @error('vitesse')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Type</label>
                                <!-- <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" placeholder="type"> -->
                                <select class="form-control @error('type') is-invalid @enderror" name="type">
                                    <option value="Tout chemin">Tout chemin</option>
                                    <option value="Sport">Sport </option>
                                    <option value="cargo">cargo </option>

                                </select>
                                <!-- error message untuk title -->
                                @error('type')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Etat</label>
                                <input type="text" class="form-control @error('etat') is-invalid @enderror" name="etat" value="{{ old('etat') }}" placeholder="etat">
                            
                                <!-- error message untuk title -->
                                @error('etat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Couleur</label>
                                <input type="color" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ old('couleur') }}" placeholder="couleur">
                            
                                <!-- error message untuk title -->
                                @error('couleur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Taille</label>
                                <input type="text" class="form-control @error('taille') is-invalid @enderror" name="taille" value="{{ old('taille') }}" placeholder="taille">
                            
                                <!-- error message untuk title -->
                                @error('taille')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Prix</label>
                                <input type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" placeholder="prix">
                            
                                <!-- error message untuk title -->
                                @error('prix')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Quantité</label>
                                <input type="text" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite') }}" placeholder="quantite">
                            
                                <!-- error message untuk title -->
                                @error('quantite')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">AJOUTER</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</form>
