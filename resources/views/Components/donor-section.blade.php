
<div class="donor-dashboard">
  <header>
    <div class="header">
      <div style="display: block; color: white">
        <h1>Bonjour, {{ $user->name }}</h1>
        <p>Dernier don: {{ $lastDonation }} • Prochain don possible: {{ $nextDonation }}</p>
      </div>
      <div class="header-actions">
        <a href="{{ route('login') }}" class="RDV-action">
          <i class="bi bi-calendar"></i> Prendre RDV
        </a>
        <a href="{{ route('login') }}" class="Centres-action">
          <i class="bi bi-geo-alt-fill"></i> Centres
        </a>
      </div>
    </div>
  </header>

  <main class="main-content">
    <div class="left-column">
      <div class="section">
        <div class="header-info" style="display: flex; justify-content: space-between">
          <h3 style="display: inline">Prochain rendez-vous</h3>
          <a href="#" class="modifierRDV-link">modifier</a>
        </div>
        <div class="appointment">
          <div>
            <i class="bi bi-calendar4"></i>
          </div>
          <div>
            <p><strong>{{ $appointment['date'] }} à {{ $appointment['time'] }}</strong></p>
            <p>{{ $appointment['center'] }}</p>
            <p>{{ $appointment['location'] }}</p>
          </div>
        </div>
      </div>

      <div class="section">
        <div class="header-info">
          <h3>Historique des dons</h3>
          <a href="#" class="view-all-link">voir tout <i class="bi bi-chevron-right"></i></a>
        </div>
        <table class="donation-history">
          <thead style="background-color: #202938; color: #666">
            <tr>
              <th>Date</th>
              <th>Type</th>
              <th>Centre</th>
              <th>Statut</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($donations as $donation)
              <tr>
                <td>{{ $donation['date'] }}</td>
                <td>{{ $donation['type'] }}</td>
                <td>{{ $donation['center'] }}</td>
                <td><span class="status">{{ $donation['status'] }}</span></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="right-column">
      @include('donor.components.stats', ['stats' => $stats])

      <div class="section">
        <div class="header-info">
          <h3>Notifications</h3>
          <button type="button" class="btn btn-secondary">Tout marquer comme lu</button>
        </div>
        @foreach ($notifications as $notification)
          <div class="notification-item">
            <i class="{{ getNotificationIcon($notification['type']) }}"></i>
            <div class="notification-content">
              <div class="notification-title">{{ $notification['title'] }}</div>
              <div class="notification-time">{{ $notification['time'] }}</div>
            </div>
          </div>
        @endforeach
      </div>

      <div class="section">
        <h3>Récompenses</h3>
        <p>Échangez vos points de fidélité contre des récompenses.</p>
        @foreach ($recompenses as $recompense)
          <div class="recompense-item">
            <i class="{{ getRecompenseIcon($recompense['type']) }}"></i>
            <div class="recompense-content">
              <div class="recompense-content-info">
                <div class="recompense-title">{{ $recompense['title'] }}</div>
                <div class="recompense-description">{{ $recompense['description'] }}</div>
                <div class="recompense-date">Obtenu le {{ $recompense['date'] }}</div>
              </div>
              <button type="button" class="btn btn-danger">Echanger</button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
</div>
