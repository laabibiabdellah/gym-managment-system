<link rel="stylesheet" href="{{asset('css/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Ajouter Categories'>
    <form method="Post" action="{{route('categories.store')}}">
        @csrf
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="form1Example1" class="form-control @error('nom_categorie') is-invalid @enderror" name="nom_categorie" value="{{old('nom_categorie')}}" />
            <label class="form-label" for="form1Example1">Nom Categorie</label>
        </div>
        @error('nom_categorie')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <button data-mdb-ripple-init type="submit" class="btn add btn-block mt-4">Ajouter Categorie</button>
    </form>
</x-admin-dashboard>