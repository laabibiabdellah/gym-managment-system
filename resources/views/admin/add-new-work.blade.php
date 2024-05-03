<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Add new work'>
    <form action="">
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Brand name</label>
        </div>
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Work image</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple />
        </div>
        <div class="mb-4">
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Select the category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Add</button>
    </form>
</x-admin-dashboard>