<link rel="stylesheet" href="{{asset('css/admin/add-new-work.css')}}">
<x-admin-dashboard title='Modifier member' dashTitle='Modifier member'>
    <form method="post" action="{{route('members.update',$member)}}">
        @csrf
        @method('put')
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="form1Example1" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$member->nom}}" />
            <label class="form-label" for="form1Example1">Nom</label>
        </div>
        @error('nom')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div data-mdb-input-init class="form-outline mt-4">
            <input type="text" id="form1Example1" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{$member->prenom}}"/>
            <label class="form-label" for="form1Example1">Prenom</label>
        </div>
        @error('prenom')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="mt-4">
            <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" >
                <option disabled selected>Sélectionnez la catégorie</option>
                @if(count($categories) == 0 )
                    <option disabled>Null</option>
                @else
                    @foreach ($categories as $categorie )
                        <option value="{{$categorie->id}}" {{$member->category_id == null?'': ($categorie->id == $member->category->id? 'selected':'')}}>{{$categorie->nom_categorie}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        @error('category_id')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div data-mdb-input-init class="form-outline mt-4">
            <input type="number" id="form1Example1" class="form-control @error('montant_payé') is-invalid @enderror" name="montant_payé" value="{{$member->montant_payé}}"/>
            <label class="form-label" for="form1Example1">Montant payé</label>
        </div>
        @error('montant_payé')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <!-- Default checkbox -->
        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="assurance_payé" />
            <label class="form-check-label" for="flexCheckDefault">Assurance payé ?</label>
        </div>
        <div data-mdb-input-init id="assurance" hidden class="form-outline mt-4">
            <input type="number" class="form-control @error('montant_assurance') is-invalid @enderror" name="montant_assurance"/>
            <label class="form-label" for="assurance">Montant de l'assurance</label>
        </div>
        @error('montant_assurance')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div data-mdb-input-init class="form-outline mt-4">
            <input type="date" data-mdb-inline id="date_payment" class="form-control @error('date_payement') is-invalid @enderror" name="date_payement"/>
            <label class="form-label" for="date_payment">Date de payment</label>
        </div>
        @error('date_payement')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div data-mdb-input-init class="form-outline mt-4">
            <select class="form-select @error('nombre_mois') is-invalid @enderror" aria-label="Default select example" name="nombre_mois">
                <option selected disabled>Sélectionner nombre de mois</option>
                <option vqlue="1">1</option>
                <option vqlue="2">2</option>
                <option vqlue="3">3</option>
                <option vqlue="4">4</option>
                <option vqlue="5">5</option>
                <option vqlue="6">6</option>
                <option vqlue="7">7</option>
                <option vqlue="8">8</option>
                <option vqlue="9">9</option>
                <option vqlue="10">10</option>
                <option vqlue="11">11</option>
                <option vqlue="12">12</option>
            </select>
        </div>
        @error('nombre_mois')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <button data-mdb-ripple-init type="submit" class="btn add btn-block mt-4">Modifier member</button>
    </form>
</x-admin-dashboard>

<script>
    const checkbox = document.getElementById('flexCheckDefault');
    const textInput = document.getElementById('assurance');

    checkbox.addEventListener('change', function() {
      if (this.checked) {
        textInput.removeAttribute('hidden');
      } else {
        textInput.setAttribute('hidden', 'true');
        textInput.value = '';
      }
    });
  </script>