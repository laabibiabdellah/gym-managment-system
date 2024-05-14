@php
  use Carbon\Carbon;
@endphp
<x-admin-dashboard title='Tout les member' dashTitle='Tout les member'>
    @if (session()->has('success'))
      <div class="alert alert-success text-center">{{session()->get('success')}}</div>
    @endif

      <div class="d-flex align-items-center justify-content-center flex-wrap mb-3 gap-2 switch-btns">
        @if(count($categories) <= 0 )
          ''
        @else
          <div>
            <input type="radio" class="btn-check border border-3" name="options" id="option1" autocomplete="off" />
            <label data-cat="all" class="btn btn-secondary btn-cat active" for="option1" data-mdb-ripple-init>Tous</label>
          </div>
            @foreach ($categories as $categorie )
              <div>
                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" />
                <label data-cat="cat-{{$categorie->id}}" class="btn btn-secondary btn-cat" for="option1" data-mdb-ripple-init>{{ $categorie->nom_categorie}}</label>
              </div>
            @endforeach
        @endif
      </div>
      <div class=" mb-3 w-100 d-flex align-items-center justify-content-center">
        <div class="form-outline w-75" data-mdb-input-init>
          <i class="fas fa-search trailing"></i>
          <input type="text" id="form1" class="form-control form-icon-trailing search-inp" onkeyup="search()" />
          <label class="form-label" for="form1">Rechercher un membre</label>
        </div>
      </div>
    <div class="table-responsive">
    <table class="table align-middle mb-0 bg-white table-hover">
        <thead class="bg-light">
          <tr>
            <th>ID</th>
            <th>Nom et prenom</th>
            <th>Catégorie de sport</th>
            <th>Status</th>
            <th>Montant payé</th>
            <th>Date payment</th>
            <th>Date expiration</th>
            <th>Les jours restants</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(count($members) == 0 )
            <tr>
                <td colspan="9" class="text-center">
                    <h2>NULL</h2>
                </td>
            </tr>
          @else
            @foreach ( $members as $member )
          @php
            $a = Carbon::parse($member->date_expriration);
            $b = Carbon::parse(Carbon::now()->toDateString());
          @endphp
          <tr class="all {{'cat-'.$member->category_id}} {{$a->diffInDays($b) >= -3 ?'table-warning':''}} {{$a->diffInDays($b) >= 0 ?'table-danger':''}}">
          <td>{{$loop->iteration}}</td>
            <td class="nom">
              <div class="d-flex align-items-center">
                <img
                    src="{{asset('imgs/user.png')}}"
                    alt=""
                    style="width: 30px; height: 30px"
                    class="rounded-circle"
                    />
                <div class="ms-3">
                  <p class="fw-bold mb-1">{{$member->nom. ' ' .$member->prenom}}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">
                @if ($member->category == null)
                  -
                @else
                  {{ $member->category->nom_categorie}}
                @endif

              </p>
            </td>
            <td>
              <span class="badge
               {{Carbon::now()->toDateString() >= $member->date_expriration?'badge-danger':'badge-success'}}
               rounded-pill d-inline">
               {{Carbon::now()->toDateString() >= $member->date_expriration?'Session expiré':'En cours'}}
              </span>
            </td>
            <td>{{$member->montant_payé}} DH</td>
            <td>{{$member->date_payement}}</td>
            <td>{{$member->date_expriration}}</td>
            <td>
              <span class="badge badge-info">{{$a->diffInDays($b) == 0 ?$a->diffInDays($b):-$a->diffInDays($b)}} jours</span>
            </td>
            <td>
                <div class="dropdown">
                    <div class="nav-link collapsed"
                      data-mdb-dropdown-init
                    >
                    <i class="fa-solid fa-caret-down" style="cursor:pointer !important;"></i>
                    </div>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="{{route('members.edit',$member)}}">Modifier</a></li>
                      <li>
                        <form action="{{route('members.destroy',$member)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="dropdown-item delete-btn">Supprimer</button>
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
    </div>
      <div class="mt-3">
        {{$members->links()}}
      </div>
</x-admin-dashboard>

<script src="{{asset('js/all-members.js')}}"></script>

<script src="{{asset('js/delete-confirmation.js')}}"></script>