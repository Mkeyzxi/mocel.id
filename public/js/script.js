document.addEventListener('DOMContentLoaded', function() {
    var iframe = document.getElementsByTagName('iframe')[0];
    if (iframe) {
        iframe.style.width = '100%';
        iframe.style.height = '100%';
    }
});


const menu = document.getElementById('menu');
const toggle = document.getElementById('toggle')
let click = true;
menu.addEventListener('click', ()=>{
    
    click = !click;
    click ? (menu.setAttribute('name', 'menu'), toggle.classList.add('hidden')) : (menu.setAttribute('name', 'close-outline'), toggle.classList.remove('hidden'));
});

let parent = document.body;
window.addEventListener('scroll', () => {
let scrollTop = parseInt(window.scrollY) * 10;
if (scrollTop > 0) {
    // console.log('hellow')
    parent.querySelector('header').style.boxShadow = '0px 0px 25px rgba(0,0,0,.6)';
    parent.querySelector('header').style.transition = 'all .3s ease-out';
    document.getElementById('kembaliKeatas').classList.remove('hidden');
    document.getElementById('kembaliKeatas').style.transition = 'all .3s ease-out';
}else {
    parent.querySelector('header').style.boxShadow = '0px 0px 0px rgba(0,0,0,.4)';
    parent.querySelector('header').style.transition = 'all .2s ease-out';
    document.getElementById('kembaliKeatas').classList.add('hidden');

}
});

let clickMode = true;
document.getElementById('modeMalam').addEventListener('click', function() {
    clickMode = !clickMode;
    this.setAttribute('name', clickMode ? 'aperture-outline' : 'moon-outline');
});


function confirmDeleteArtikel(event, id) {
    event.preventDefault(); // Mencegah tindakan default (navigasi tautan)
    
    // Tampilkan dialog konfirmasi
    const userConfirmed = confirm('yakin untuk menghapus?');
    
    if (userConfirmed) {
        // Jika pengguna mengkonfirmasi, lanjutkan ke URL penghapusan
        window.location.href = `/dashboard/delete/artikel/${id}`;
    } else {
        // Jika pengguna tidak mengkonfirmasi, tidak lakukan apa-apa
        console.log('Penghapusan dibatalkan');
    }
}



function confirmDeleteBengkel(event, id) {
    event.preventDefault(); // Mencegah tindakan default (navigasi tautan)
    
    // Tampilkan dialog konfirmasi
    const userConfirmed = confirm('yakin untuk menghapus?');
    
    if (userConfirmed) {
        // Jika pengguna mengkonfirmasi, lanjutkan ke URL penghapusan
        window.location.href = `/dashboard/delete/bengkel/${id}`;
    } else {
        // Jika pengguna tidak mengkonfirmasi, tidak lakukan apa-apa
        console.log('Penghapusan dibatalkan');
    }
}


const modeMalam = document.getElementById('modeMalam');
modeMalam.addEventListener('click', () => {
    const html = document.querySelector('html');
    if (html.classList.contains('dark')) {
        html.classList.remove('dark');
    } else {
        html.classList.add('dark');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const headerLink = document.querySelectorAll('nav ul li a');
    headerLink.forEach(link => {
        const linkPath = link.getAttribute('href');
        if (linkPath === currentPath) {
            link.classList.add('font-bold', 'border-b-secondary', 'text-sixty');
        } else {
            link.classList.remove('font-bold', 'border-b-secondary','text-sixty');
        }
    });
});
