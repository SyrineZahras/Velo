<form action="{{ route('options.update', $option->id) }}" method="POST" enctype="multipart/form-data">
    {{ method_field('patch') }}
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalUpdate{{$option->id}}" tabindex="-1" role="dialog"aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">{{__('Modifier option') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                <div class="form-group">
                            <img src="{{ Storage::url('public/veloImg/').$option->imageUrl }}" class="rounded img" style="width: 60px;border-radius:5%" >

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
                                <label class="font-weight-bold">Option</label>
                                <input type="text" class="form-control @error('option') is-invalid @enderror" name="option" value="{{ old('type', $option->option) }}" placeholder="type">
                            
                                <!-- error message untuk title -->
                                @error('option')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Type</label>
                                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type', $option->type) }}" placeholder="type">
                            
                                <!-- error message untuk title -->
                                @error('type')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label class="font-weight-bold">Couleur</label>
                                <input type="color" class="form-control @error('couleur') is-invalid @enderror" name="couleur" value="{{ old('couleur', $option->couleur) }}" placeholder="couleur">
                            
                                <!-- error message untuk title -->
                                @error('couleur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <label class="font-weight-bold">Prix</label>
                                <input type="text" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix', $option->prix) }}" placeholder="prix">
                            
                                <!-- error message untuk title -->
                                @error('prix')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           

                            <button type="submit" class="btn btn-md btn-primary">Modifier</button>
                            <button type="reset" class="btn btn-md btn-warning"data-dismiss="modal">Annuler</button>           
                </div>
            </div>
        </div>
    </div>
</form>