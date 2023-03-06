import './bootstrap'



var animation = bodymovin.loadAnimation({
    container: document.getElementById('trash'),
    renderer: 'svg',
    loop:false,
    autoPlay: false,
    hover: true,
    path: '/animation/trash.json',
});


