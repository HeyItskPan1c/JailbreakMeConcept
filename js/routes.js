var routes = [
  // Index page
  {
    path: '/',
    url: './index.php',
    name: 'home',
  },
  // Reload Current
  {
    path: '/privacypol/',
    url: './pages/PrivacyPol.php',
  },
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.php',
  },
];
