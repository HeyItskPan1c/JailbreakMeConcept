var routes = [
  // Index page
  {
    path: '/',
    url: './index.html',
    name: 'home',
  },
  // Reload Current
  {
    path: '/Storage/',
    url: './pages/DetectStorage.html',
  },
  // Default route (404 page). MUST BE THE LAST
  {
    path: '(.*)',
    url: './pages/404.html',
  },
];
