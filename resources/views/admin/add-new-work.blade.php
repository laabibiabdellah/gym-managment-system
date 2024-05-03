<link rel="stylesheet" href="{{asset('css/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Ajouter member'>
    <form action="">
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Nom</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Prenom</label>
        </div>
        <div class="mb-4">
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select the category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Montant paye</label>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Ajoute member</button>
    </form>
</x-admin-dashboard>