@include('site.header',['title' => 'Enregistrement en ligne dans opc ordre profestionnel des comptables'])
    <div class="main container">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                 <div class="row">
         <div class="col-md-6">
            <h4 class="text-center">Formulaire d'identification</h4>
            <form action="{{ route('register-member') }}" method="post">
                @method('post')
                @csrf
                <div class="form-group">
                    <label for="">Nom et Prénom</label>
                    <input class="form-control" type="text" name="first_name">
                    @error('first_name')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">GENRE</label>
                    <select name="" class="form-control" name="sexe" id="">
                        <option value="">Choisissez</option>
                        <option value="HOMME">HOMME</option>
                        <option value="FEMME">FEMME</option>
                    </select>

                    @error('sexe')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Province/Commune/Quartier</label>
                    <input class="form-control" type="text" name="addresse" placeholder="ex: Bujumbura/Ntahangwa/Kigobe">

                    @error('addresse')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input class="form-control" placeholder="ex: +257 79 000 000" type="text" name="telephone">

                    @error('telephone')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Tableau</label>
                    <select name="table_name" name="" id="" class="form-control">
                        <option value="">Select ...</option>
                        <option value="A">TABLEAU A</option>
                        <option value="B">TABLEAU B</option>
                        <option value="C">TABLEAU C</option>
                        <option value="D">TABLEAU D</option>
                        <option value="ST">STAGAIERE</option>
                        <option value="CABINET">CABINET</option>
                    </select>
                    @error('table_name')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                  <div class="form-group">
                    <label for="">NIF</label>
                    <input type="text" name="nif" class="form-control">
                    @error('nif')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="form-group">
                    <label for="">DEBUT D'ACTIVITE</label>
                    <input type="date" name="debut_activite" class="form-control">
                    @error('debut_activite')
                    <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" placeholder="ex: exemple@emple.bi" type="email" name="email">
                    @error('email')
                    <span class="error text-danger">{{ $message }}</span>

                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Type</label>

                    <select class="form-control" id="" name="type_personne">
                        <option value="">Select ...</option>

                        <option value="ETUDIANT">ETUDIANT</option>
                        <option value="MEMBRE">MEMBRE</option>
                    </select>
                </div>

                <div class="form-group">
                    <button class=" btn-info btn">Enregistrer</button>

                    <a href="{{ route('accueil') }}" class=" btn-info btn">Retour</a>

                </div>

            </form>
            
        </div>

        </div>

         </div>

            </div>
        </section>

        <!-- Sing in  Form -->

    </div>



@include('site.footer')