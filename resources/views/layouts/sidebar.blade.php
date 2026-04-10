<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="/dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Livres</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('Listelivre') }}">Listes des livres</a></li>
              <li><a href="{{ route('livre.create') }}">Nouveau</a></li>


            </ul>

          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Etudiants</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('ListeEtudiant') }}">Listes</a></li>
              <li><a href="{{ route('etudiant.create') }}">Nouveau</a></li>


            </ul>

          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Emprunts</span>
              </a>
            <ul class="sub">
              <li><a href="{{ route('emprunts.index') }}">Liste</a></li>
              <li><a href="{{ route('emprunts.create') }}">Nouveau</a></li>

            </ul>
          </li>

        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
