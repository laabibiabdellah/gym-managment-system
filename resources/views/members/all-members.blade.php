@php
  use Carbon\Carbon;
@endphp
<x-admin-dashboard dashTitle='Tout les member'>
    @if (session()->has('success'))
      <div class="alert alert-success text-center">{{session()->get('success')}}</div>
    @endif
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>ID</th>
            <th>Nom et prenom</th>
            <th>Categorie de sport</th>
            <th>Status</th>
            <th>Montant paye</th>
            <th>Date payment</th>
            <th>Date expiratio</th>
            <th>Les jours restants</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(count($members) == 0 )
            <tr>
                <td colspan="3" class="text-center">
                    <h2>NULL</h2>
                </td>
            </tr>
          @else
            @foreach ( $members as $member )
          <tr class="{{ Carbon::now()->toDateString() >= Carbon::parse($member->date_expriration)->subDays(3)->toDateString() ? 'table-warning' : '' }}">
          <td>{{$loop->iteration}}</td>
            <td>
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
               {{Carbon::now()->toDateString() == $member->date_expriration?'badge-danger':'badge-success'}}
               rounded-pill d-inline">
               {{Carbon::now()->toDateString() == $member->date_expriration?'Session expiré':'En cours'}}
              </span>
            </td>
            <td>{{$member->montant_payé}} DH</td>
            <td>{{$member->date_payement}}</td>
            <td>{{$member->date_expriration}}</td>
            @php
              $a = Carbon::parse($member->date_expriration);
              $b = Carbon::parse(Carbon::now()->toDateString());
            @endphp
            <td>
              <span class="badge badge-info">{{$a->diffInDays($b)}} jours</span>
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
                          <button class="dropdown-item">Supprimer</button>
                        </form>
                    </ul>
                  </div>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
</x-admin-dashboard>