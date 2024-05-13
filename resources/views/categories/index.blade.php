<x-admin-dashboard dashTitle='Tout les categories'>
    <table class="table align-middle mb-0 bg-white">
      <div>
        @if (session()->has('success'))
          <div class="alert alert-success text-center">{{session()->get('success')}}</div>
        @endif
      </div>
        <thead class="bg-light">
          <tr>
            <th>ID</th>
            <th>Nom Categorie</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @if(count($categories) == 0 )
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>NULL</h2>
                    </td>
                </tr>
            @else
                @foreach ( $categories as $categorie )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="ms-3">
                          <p class="fw-bold mb-1">{{$categorie->nom_categorie}}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                        <div class="dropdown">
                            <div class="nav-link collapsed"
                              data-mdb-dropdown-init
                            >
                            <i class="fa-solid fa-caret-down" style="cursor:pointer !important;"></i>
                            </div>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                              <li><a class="dropdown-item" href="{{route('categories.edit',$categorie)}}">Modifier</a></li>
                              <li>
                                <form method="post" action="{{route('categories.destroy',$categorie->id)}}">
                                  @csrf
                                  @method('delete')
                                  <button class="dropdown-item">Supprimer</button>
                                </form>
                              </li>
                            </ul>
                          </div>
                    </td>
                  </tr>
                @endforeach
                @endif
        </tbody>
      </table>
</x-admin-dashboard>
