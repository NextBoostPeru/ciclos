// main.js - improved interactions
document.addEventListener('DOMContentLoaded', function(){
  // mobile menu toggle
  const btnMenu = document.getElementById('btnMenu');
  const mobileMenu = document.getElementById('mobileMenu');
  if(btnMenu && mobileMenu){
    btnMenu.addEventListener('click', () => {
      if(mobileMenu.style.display === 'block'){
        mobileMenu.style.display = 'none';
        btnMenu.setAttribute('aria-expanded', 'false');
      } else {
        mobileMenu.style.display = 'block';
        btnMenu.setAttribute('aria-expanded', 'true');
      }
    });
  }

  // Carousel improvement: keyboard & wheel support
  const track = document.getElementById('carouselTrack');
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');

  function scrollByCard(direction = 1) {
    if (!track) return;
    const card = track.querySelector('.card');
    if (!card) return;
    const gap = 18;
    const cardWidth = Math.round(card.getBoundingClientRect().width) + gap;
    track.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
  }

  prev && prev.addEventListener('click', () => scrollByCard(-1));
  next && next.addEventListener('click', () => scrollByCard(1));

  if(track){
    track.addEventListener('wheel', (e) => {
      e.preventDefault();
      track.scrollBy({ left: e.deltaY < 0 ? -200 : 200 });
    });
  }

  // Thumbs click handler (delegation)
  document.querySelectorAll('.thumb').forEach(t => {
    t.addEventListener('click', () => {
      const main = document.getElementById('mainImage');
      if(main) main.src = t.src;
    });
  });

  // Smooth anchor scroll
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if(href.length > 1){
        e.preventDefault();
        document.querySelector(href)?.scrollIntoView({behavior:'smooth'});
      }
    });
  });
});
