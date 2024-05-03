<x-admin-dashboard dashTitle='Tout les member'>
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
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <div class="d-flex align-items-center">
                <img
                    src="{{asset('imgs/user.png')}}"
                    alt=""
                    style="width: 30px; height: 30px"
                    class="rounded-circle"
                    />
                <div class="ms-3">
                  <p class="fw-bold mb-1">John Doe</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">Software engineer</p>
            </td>
            <td>
              <span class="badge badge-success rounded-pill d-inline">Active</span>
            </td>
            <td>Senior</td>
            <td>Senior</td>
            <td>Senior</td>
            <td>
                <div class="dropdown">
                    <div class="nav-link collapsed"
                      data-mdb-dropdown-init
                    >
                    <i class="fa-solid fa-caret-down" style="cursor:pointer !important;"></i>
                    </div>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Modifier</a></li>
                      <li><a class="dropdown-item" href="#">Supprimer</a></li>
                    </ul>
                  </div>
            </td>
          </tr>
        </tbody>
      </table>
</x-admin-dashboard>