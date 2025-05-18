<div class="auth-form">
  <div class="logo">
    <svg
      width="40"
      height="40"
      viewBox="0 0 40 40"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z"
        fill="#D32F2F"
      />
      <path
        d="M26 15C26 18.3137 23.3137 21 20 21C16.6863 21 14 18.3137 14 15C14 11.6863 16.6863 9 20 9C23.3137 9 26 11.6863 26 15Z"
        fill="white"
      />
      <path
        d="M25 27C25 24.7909 22.7614 23 20 23C17.2386 23 15 24.7909 15 27V29H25V27Z"
        fill="white"
      />
    </svg>
    <span>SangVie</span>
  </div>

  <h1>Connexion à votre compte</h1>

  <p class="new-account"><span>ou</span> : créer un nouveau compte</p>

  {{-- If you want account options, you can list them manually, or skip this block --}}
  <div class="account-menu">
    <div class="account-option active">
      <i class="bi bi-person" style="margin-right: 10px"></i>
      <span>Utilisateur</span>
    </div>
    {{-- Add more options if needed --}}
  </div>

  <form method="POST" action="{{ route('login') }}" class="login-form">
    @csrf

    <div class="form-group">
      <label for="email">Adresse e-mail</label>
      <div class="input-with-icon">
        <input
          type="email"
          id="email"
          name="email"
          value="{{ old('email') }}"
          required
          autofocus
        />
      </div>
      @error('email')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="password">Mot de passe</label>
      <div class="input-with-icon" style="position: relative;">
        <input
          type="password"
          id="password"
          name="password"
          required
          autocomplete="current-password"
        />
        <button
          type="button"
          class="show-password"
          onclick="togglePasswordVisibility()"
          style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;"
        >
          <i class="bi bi-eye" style="color: white"></i>
        </button>
      </div>
      @error('password')
        <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-options">
      <div class="remember-me">
        <input type="checkbox" id="remember" name="remember" />
        <label for="remember">Se souvenir de moi</label>
      </div>
        <a href="#" class="forgot-password">Mot de passe oublié ?</a>
      </div>

    <button type="submit" class="login-btn">
      <span>Se connecter</span>
      <svg
        width="20"
        height="20"
        viewBox="0 0 24 24"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M5 12H19"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M12 5L19 12L12 19"
          stroke="white"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </button>

    <div class="social-divider">
      <span class="divider-text">Ou contacter avec</span>
    </div>

    <div class="social-logins">
      <button type="button" class="social-btn google">
        <i class="bi bi-google"></i>
      </button>
      <button type="button" class="social-btn facebook">
        <i class="bi bi-facebook"></i>
      </button>
    </div>
  </form>
</div>

<script>
  function togglePasswordVisibility() {
    const input = document.getElementById('password');
    const icon = event.currentTarget.querySelector('i');
    if (input.type === 'password') {
      input.type = 'text';
      icon.classList.remove('bi-eye');
      icon.classList.add('bi-eye-slash');
    } else {
      input.type = 'password';
      icon.classList.remove('bi-eye-slash');
      icon.classList.add('bi-eye');
    }
  }
</script>
