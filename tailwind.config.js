module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  darkMode: "class",
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
        secondary: '#668FFF', // biru muda
        thirty: '#FF9700', // orange
        fourty: '#FFF5E6', // kulit amerika
        fivety: '#1E1E1E', // hitam fivety
        sixty: '#FF9700', // orange -> utama
        seventy: '#0D1D9A', // orange -> utama
        darkBg: '#111827',
        darkCt: '#334155',
        darkFt: '#cbd5e1'
      },
      fontFamily: {
        'body': [
          'Inter', 
          'ui-sans-serif', 
          'system-ui', 
          '-apple-system', 
          'system-ui', 
          'Segoe UI', 
          'Roboto', 
          'Helvetica Neue', 
          'Arial', 
          'Noto Sans', 
          'sans-serif', 
          'Apple Color Emoji', 
          'Segoe UI Emoji', 
          'Segoe UI Symbol', 
          'Noto Color Emoji'
        ],
        'sans': [
          'Inter', 
          'ui-sans-serif', 
          'system-ui', 
          '-apple-system', 
          'system-ui', 
          'Segoe UI', 
          'Roboto', 
          'Helvetica Neue', 
          'Arial', 
          'Noto Sans', 
          'sans-serif', 
          'Apple Color Emoji', 
          'Segoe UI Emoji', 
          'Segoe UI Symbol', 
          'Noto Color Emoji'
        ],
      },
      boxShadow: {
        'besar': '2px 2px 10px rgba(0,0,0,0.6)',
        'kecil': '2px 2px 5px rgba(0,0,0,0.2)',
      },
      // backgroundImage: {
      // //   'header': "url('/img/backgroundBeranda2.png')", // Perbarui path ke gambar
      //   'backgroundBeranda1': 'url(img/backgroundBeranda)',
      // },
    },
  },
  plugins: [
    require('flowbite/plugin'), require('flowbite-typography'),
  ],
}
